@extends('master')

@section('content')
    <div class="container col-9 card shadow-lg p-5">
        <div class="position-relative">
            <h1 class="text-center mb-4">{{ __('messages.eventDetails') }}</h1>
            <div class="position-absolute top-0 end-0 m-2">
                @if(Auth::check() && Auth::user()->role === 'creator')
                    <a href="{{ route('events.edit', $event->id) }}" class="btn fw-bold me-2" style="background-color: rgb(11, 64, 161); color: white; border: none;">{{ __('messages.edit') }}</a>

                    <form action="{{ route('events.destroy', $event->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn fw-bold"
                            style="background-color: #dc3545; color: white; border: none;">
                            {{ __('messages.delete') ?? 'Eliminar' }}
                        </button>
                    </form>
                @endif
            </div>
        </div>
        <ul class="list-group">
            <li class="list-group-item" style="border-color: rgb(11, 64, 161)">
                <strong>{{ __('messages.description') }}</strong> {{ $event->description }}</li>
            <li class="list-group-item" style="border-color: rgb(11, 64, 161)"><strong>{{ __('messages.date') }}</strong>
                {{ \Carbon\Carbon::parse($event->date)->format('d/m/Y') }}</li>
            <li class="list-group-item" style="border-color: rgb(11, 64, 161)"><strong>{{ __('messages.town') }}</strong>
                {{ $event->town->name ?? 'N/D' }}</li>
            <li class="list-group-item text-center" style="border-color: rgb(11, 64, 161)">
                {{ $event->attendees->count() }} {{ __('messages.signUpRegister') }}
            </li>
        </ul>
        @auth
            <div class="d-flex justify-content-center mt-4 gap-5">
                <a href="{{ route('towns.events', $event->town_id) }}" class="btn fw-bold"
                    style="background-color: #f28dd0; color: white;">← {{ __('messages.goBack') }}</a>
                @if($event->attendees && $event->attendees->contains(auth()->id()))
                    <form action="{{ route('event.leave', $event->id) }}" method="POST">
                        @csrf
                        <button type="submit"
                            class="btn btn-danger">{{ __('messages.cancelSignUp') ?? 'Cancelar asistencia' }}</button>
                    </form>
                @else
                    @if ($event->price > 0)
                        <a href="{{ route('events.pay', $event->id) }}" class="btn fw-bold btn-primary">
                            {{ __('messages.signUp') }} (€{{ $event->price }})
                        </a>
                    @else
                        <form action="{{ route('event.join', $event->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn fw-bold btn-primary">{{ __('messages.signUp') }}</button>
                        </form>
                    @endif
                @endif


            </div>
        @endauth

        <h3 class="mt-5">{{ __('messages.leaveOpinion') }}</h3>

        <form id="review-form" method="POST" action="{{ route('reviews.store', $event->id) }}" class="mt-3">
            @csrf
            <div class="mb-3">
                <label for="rate" class="form-label">{{ __('messages.ratingRange') }}</label>
                <input type="number" name="rate" id="rate" class="form-control" min="0" max="10">
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">{{ __('messages.comment') }}</label>
                <textarea name="content" id="content" class="form-control" rows="4" required></textarea>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn fw-bold" style="background-color: #28a745; color: white; border: none;">
                    {{ __('messages.sendOpinion') }}
                </button>
            </div>
        </form>

        <h3 class="mt-5 text-center">{{ __('messages.reviews') }}</h3>

        <ul class="list-group mt-3" id="review-list">
            @foreach ($event->reviews as $review)
                @include('components.review-item', ['review' => $review])
            @endforeach
        </ul>
    </div>

    <script>
        document.getElementById('review-form').addEventListener('submit', async function (e) {
            e.preventDefault();

            const form = e.target;
            const formData = new FormData(form);

            try {
                const response = await fetch(form.action, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Accept': 'application/json',
                    },
                    body: formData,
                });

                if (!response.ok) throw new Error('Error');

                const data = await response.json();

                const reviewList = document.getElementById('review-list');
                reviewList.insertAdjacentHTML('beforeend', data.html);

                form.reset();
            } catch (error) {
                alert('{{ __("messages.error") ?? "Error" }}');
                console.error(error);
            }
        });
    </script>
    @if(session('message'))
        <script>
            alert("{{ session('message') }}")
        </script>
    @endif
@endsection