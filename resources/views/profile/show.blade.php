@extends('master')

@section('header', 'Usuario')

@section('content')
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-body text-center">
                <img src="{{ asset('images/userpic.png') }}" alt="Usuario" style="width: 150px; height: 150px; object-fit: cover;">
                <h2 class="card-title">Perfil de {{ $user->name }}</h2>
                <p class="text-muted">{{ $user->email }}</p>

                <hr>

                <div class="row my-3">
                    <div class="col-md-4">
                        <h5 class="mb-0">Tipo de usuario</h5>
                        <p>{{ ucfirst($user->role) }}</p> 
                    </div>
                    <div class="col-md-4">
                        <h5 class="mb-0">Seguidores</h5>
                        <p>{{ $followersCount }}</p>
                    </div>
                    <div class="col-md-4">
                        <h5 class="mb-0">Siguiendo</h5>
                        <p>{{ $followingCount }}</p>
                    </div>
                </div>

                {{-- Botón seguir/dejar de seguir --}}
                @if (auth()->id() !== $user->id)
                    <form action="{{ $isFollowing ? route('users.unfollow', $user->id) : route('users.follow', $user->id) }}"
                        method="POST">
                        @csrf
                        <button type="submit" class="btn btn-{{ $isFollowing ? 'danger' : 'primary' }}">
                            {{ $isFollowing ? 'Dejar de seguir' : 'Seguir' }}
                        </button>
                    </form>
                @endif
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-light">
                        <h5 class="mb-0">Seguidores</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        @forelse ($user->followed as $follower)
                            <li class="list-group-item">
                                <a href="{{ route('profile.show', $follower->id) }}">{{ $follower->name }}</a>
                            </li>
                        @empty
                            <li class="list-group-item text-muted">No tiene seguidores.</li>
                        @endforelse
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-light">
                        <h5 class="mb-0">Siguiendo a</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        @forelse ($user->following as $followed)
                            <li class="list-group-item">
                                <a href="{{ route('profile.show', $followed->id) }}">{{ $followed->name }}</a>
                            </li>
                        @empty
                            <li class="list-group-item text-muted">No sigue a nadie.</li>
                        @endforelse
                    </ul>
                </div>
                <div class="mt-4">
                    <h4>Pueblos favoritos</h4>
                    <ul>
                        @forelse ($favoriteTowns as $town)
                            <li>
                                <a href="{{ route('towns.events', $town->id) }}">{{ $town->name }}</a>
                            </li>
                        @empty
                            <li class="text-muted">No hay pueblos favoritos.</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection