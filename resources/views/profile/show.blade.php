@extends('master')

@section('content')
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-body text-center">
                <img src="{{ asset('images/userpic.png') }}" alt="{{ __('messages.user') ?? 'User' }}"
                    style="width: 150px; height: 150px; object-fit: cover;">
                <h2 class="card-title">{{ __('messages.profileOf') ?? 'Profile of' }} {{ $user->name }}</h2>
                <p class="text-muted">{{ $user->email }}</p>

                <hr>

                <div class="row my-3">
                    <div class="col-md-4">
                        <h5 class="mb-0">{{ __('messages.userType') ?? 'User type' }}</h5>
                        <p>{{ ucfirst($user->role) }}</p>
                    </div>
                    <div class="col-md-4">
                        <h5 class="mb-0">{{ __('messages.followers') ?? 'Followers' }}</h5>
                        <p>{{ $followersCount }}</p>
                    </div>
                    <div class="col-md-4">
                        <h5 class="mb-0">{{ __('messages.following') ?? 'Following' }}</h5>
                        <p>{{ $followingCount }}</p>
                    </div>
                </div>

                {{-- Follow/unfollow button --}}
                @if (auth()->id() !== $user->id)
                    <form action="{{ $isFollowing ? route('users.unfollow', $user->id) : route('users.follow', $user->id) }}"
                        method="POST">
                        @csrf
                        <button type="submit" class="btn btn-{{ $isFollowing ? 'danger' : 'primary' }}">
                            {{ $isFollowing ? __('messages.unfollow') ?? 'Unfollow' : __('messages.follow') ?? 'Follow' }}
                        </button>
                    </form>
                @endif
            </div>
        </div>

        <div class="row mt-4">
            {{-- Left column --}}
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header" style="background-color: rgb(11, 64, 161); color: white;">
                        <h5 class="mb-0">{{ __('messages.followers') ?? 'Followers' }}</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        @forelse ($user->followed as $follower)
                            <li class="list-group-item">
                                <a href="{{ route('profile.show', $follower->id) }}"
                                    class="text-decoration-none fw-bold text-primary" style="transition: text-decoration 0.3s;">
                                    {{ $follower->name }}
                                </a>
                            </li>
                        @empty
                            <li class="list-group-item text-muted">{{ __('messages.noFollowers') ?? 'No followers.' }}</li>
                        @endforelse
                    </ul>
                </div>

                {{-- Joined events --}}
                <div class="card shadow-sm mt-4">
                    <div class="card-header" style="background-color: rgb(11, 64, 161); color: white;">
                        <h5 class="mb-0">{{ __('messages.joinedEvents') ?? 'Joined Events' }}</h5>
                    </div>
                    <div class="card-body">
                        @if($joinedEvents->isEmpty())
                            <p class="text-muted">{{ __('messages.noJoinedEvents') ?? 'You have not joined any events.' }}</p>
                        @else
                            @foreach ($joinedEvents as $event)
                                <div class="mb-3 border-bottom pb-2">
                                    <h6 class="mb-1">{{ $event->title }}</h6>
                                    <p class="mb-0">
                                        <strong>{{ __('messages.date') ?? 'Date:' }}</strong>
                                        {{ \Carbon\Carbon::parse($event->date)->format('d/m/Y') }}<br>
                                        <strong>{{ __('messages.town') ?? 'Town:' }}</strong> {{ $event->town->name }}
                                    </p>
                                    <a href="{{ route('events.show', $event->id) }}"
                                        class="btn btn-sm btn-outline-primary mt-2">{{ __('messages.viewEvent') ?? 'View event' }}</a>

                                    @if(auth()->id() === $user->id)
                                        <form action="{{ route('event.leave', $event->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            <button type="submit"
                                                class="btn btn-sm btn-outline-danger mt-2">{{ __('messages.cancelSignUp') ?? 'Cancel attendance' }}</button>
                                        </form>
                                    @endif
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>

            {{-- Right column --}}
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header" style="background-color: rgb(11, 64, 161); color: white;">
                        <h5 class="mb-0">{{ __('messages.following') ?? 'Following' }}</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        @forelse ($user->following as $followed)
                            <li class="list-group-item">
                                <a href="{{ route('profile.show', $followed->id) }}"
                                    class="text-decoration-none fw-bold text-primary">
                                    {{ $followed->name }}
                                </a>
                            </li>
                        @empty
                            <li class="list-group-item text-muted">
                                {{ __('messages.notFollowingAnyone') ?? 'Not following anyone.' }}
                            </li>
                        @endforelse
                    </ul>
                </div>
                <div class="card shadow-sm mt-4">
                    <div class="card-header" style="background-color: rgb(11, 64, 161); color: white;">
                        <h5 class="mb-0">{{ __('messages.favoriteTowns') ?? 'Favorite Towns' }}</h5>
                    </div>
                    <div class="card-body">
                        @if ($favoriteTowns->isEmpty())
                            <p class="text-muted">{{ __('messages.noFavoriteTowns') ?? 'No favorite towns.' }}</p>
                        @else
                            <div class="row row-cols-1 row-cols-md-2 g-3">
                                @foreach ($favoriteTowns as $town)
                                    <div class="col">
                                        <div class="card h-100 shadow-sm hover-effect text-center" style="border: 1px solid rgb(11, 64, 161);">
                                            <div class="d-flex justify-content-between align-items-center px-2">
                                                <a class="text-decoration-none fw-bold text-dark p-2"
                                                    href="{{ route('towns.events', $town->id) }}">
                                                    {{ $town->name }}
                                                </a>
                                                @auth
                                                    <form method="POST" action="{{ route('towns.toggleFavorite', $town->id) }}">
                                                        @csrf
                                                        <button type="submit" class="btn btn-link p-0 border-0"
                                                            style="font-size: 1.5rem; color: red;"
                                                            title="{{ __('messages.removeFavorite') ?? 'Remove from favorites' }}">
                                                            <i class="fas fa-heart"></i>
                                                        </button>
                                                    </form>
                                                @endauth
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection