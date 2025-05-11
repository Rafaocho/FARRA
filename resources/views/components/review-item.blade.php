<li class="list-group-item d-flex justify-content-between align-items-start">
    <div>
        <strong>{{ '@' . ($review->user->name ?? 'Usuario desconocido') }}</strong>
        <span class="badge bg-primary ms-2">Valoración: {{ $review->rate }}/10</span>
        <p class="mt-2 mb-0">{{ $review->content ?: 'Sin comentario escrito.' }}</p>
    </div>
    @auth
        @if(Auth::id() !== $review->user->id)
            <form method="POST" 
                  action="{{ route(Auth::user()->following->contains($review->user->id) ? 'users.unfollow' : 'users.follow', $review->user->id) }}">
                @csrf
                <button class="btn btn-sm {{ Auth::user()->following->contains($review->user->id) ? 'btn-outline-danger' : 'btn-outline-success' }}">
                    {{ Auth::user()->following->contains($review->user->id) ? 'Dejar de seguir' : 'Seguir' }}
                </button>
            </form>
        @endif
    @endauth
</li>