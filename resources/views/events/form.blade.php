@extends("master")

@section("content")
    <div class="container mt-2">
        <div class="card shadow-lg p-5">
            <h2 class="text-center mb-2">{{ isset($event) ? 'Modificando evento' : 'Nuevo evento' }}</h2>

            <form action="{{ isset($event) ? route('events.update', $event->id) : route('events.store') }}" method="POST">
                @csrf
                @isset($event)
                    @method("PATCH")
                @endisset

                <div class="mb-3">
                    <label class="form-label">Título:</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title', $event->title ?? '') }}"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Descripción:</label>
                    <textarea name="description"
                        class="form-control">{{ old('description', $event->description ?? '') }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Fecha:</label>
                    <input type="date" name="date" class="form-control"
                        value="{{ old('date', isset($event) ? $event->date : '') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Tipo:</label>
                    <select name="type" class="form-select">
                        @foreach($types as $value => $label)
                            <option value="{{ $value }}" {{ (old('type') ?? ($event->type ?? '')) == $value ? 'selected' : '' }}>
                                {{ $label }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Edad mínima:</label>
                    <input type="number" name="age" class="form-control" value="{{ old('age', $event->minAge ?? '') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Pueblo:</label>
                    <select name="town_id" class="form-select">
                        @foreach($townsList as $town)
                            <option value="{{ $town->id }}" {{ old('town_id', $event->town_id ?? ($townId ?? '')) == $town->id ? 'selected' : '' }}>
                                {{ $town->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Precio (€):</label>
                    <input type="number" step="0.01" min="0" name="price" id="price" class="form-control"
                        value="{{ old('price', $event->price ?? 0) }}" required>
                </div>

                
                <div class="d-flex justify-content-around">
                <a class="btn btn-danger" href="{{ route('towns.events', $event->town_id ?? $townId) }}">Cancelar</a>

                <button type="submit" class="btn btn-primary">Guardar evento</button>
                    
                </div>
            </form>
        </div>
    </div>
@endsection