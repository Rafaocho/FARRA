@extends("master")
<!--Vista para creacion y edicion de eventos-->
@section("content")
    <div class="container mt-4">
        <div class="card shadow p-4 rounded-4">
            <h2 class="text-center mb-4 fw-bold" style="color: rgb(11, 64, 161);">
                {{ isset($event) ? __('messages.editEvent') : __('messages.newEvent') }}
            </h2>

            <form action="{{ isset($event) ? route('events.update', $event->id) : route('events.store') }}" method="POST">
                @csrf
                @isset($event)
                    @method("PATCH")
                @endisset

                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label fw-bold">{{ __('messages.title') }}</label>
                        <input type="text" name="title" class="form-control rounded-3"
                               value="{{ old('title', $event->title ?? '') }}" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-bold">{{ __('messages.date') }}</label>
                        <input type="date" name="date" class="form-control rounded-3"
                               value="{{ old('date', $event->date ?? '') }}">
                    </div>

                    <div class="col-md-12">
                        <label class="form-label fw-bold">{{ __('messages.description') }}</label>
                        <textarea name="description" rows="3" class="form-control rounded-3">{{ old('description', $event->description ?? '') }}</textarea>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-bold">{{ __('messages.type') }}</label>
                        <select name="type" class="form-select rounded-3">
                            @foreach($types as $value => $label)
                                <option value="{{ $value }}" {{ (old('type') ?? ($event->type ?? '')) == $value ? 'selected' : '' }}>
                                    {{ $label }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-bold">{{ __('messages.minAge') }}</label>
                        <input type="number" name="age" class="form-control rounded-3"
                               value="{{ old('age', $event->minAge ?? '') }}">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-bold">{{ __('messages.town') }}</label>
                        <select name="town_id" class="form-select rounded-3">
                            @foreach($townsList as $town)
                                <option value="{{ $town->id }}" {{ old('town_id', $event->town_id ?? ($townId ?? '')) == $town->id ? 'selected' : '' }}>
                                    {{ $town->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-bold">{{ __('messages.price') }} (€)</label>
                        <input type="number" step="0.01" min="0" name="price" class="form-control rounded-3"
                               value="{{ old('price', $event->price ?? 0) }}" required>
                    </div>
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <a class="btn fw-bold rounded-3" style="background-color: #ccc; color: black;"
                       href="{{ route('towns.events', $event->town_id ?? $townId) }}">
                        {{ __('messages.cancel') }}
                    </a>

                    <button type="submit" class="btn fw-bold rounded-3" style="background-color: #f28dd0; color: white;">
                        {{ __('messages.saveEvent') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
