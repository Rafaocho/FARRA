@extends("master")

@section("header", isset($event) ? "Editar Evento" : "Crear Evento")

@section('sub_header')
    <div class="hero-section text-black text-center d-flex align-items-center"
        style="background-size: cover; background-position: center; height: 250px;">
        <div class="container">
            <h2 class="display-4 fw-bold">Descubre las mejores fiestas</h2>
            <p class="lead">Eventos únicos, experiencias inolvidables. ¡Únete ahora!</p>
        </div>
    </div>
@endsection

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

                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success">Enviar</button>
                    <a class="btn btn-info" href="{{ route('index') }}">MENÚ</a>
                </div>
            </form>
        </div>
    </div>
@endsection