@extends("master")

@section("header", isset($town) && $town->id ? "Editar Pueblo" : "Añadir Pueblo")

@section('sub_header')
<div class="hero-section text-black text-center d-flex align-items-center"
    style="background-size: cover; background-position: center; height: 250px;">
    <div class="container">
        <h2 class="display-4 fw-bold">Descubre las mejores fiestas</h2>
        <p class="lead">Crea nuevos pueblos y empieza a organizar eventos.</p>
    </div>
</div>
@endsection

@section("content")
<div class="container mt-4">
    <div class="card shadow-lg p-5">
        <h2 class="text-center mb-4">{{ isset($town) && $town->id ? 'Editar Pueblo' : 'Nuevo Pueblo' }}</h2>

        <form action="{{ isset($town) && $town->id ? route('towns.update', $town->id) : route('towns.store') }}"
              method="POST">
            @csrf
            @if(isset($town) && $town->id)
                @method("PATCH")
            @endif

            <div class="mb-3">
                <label class="form-label">Nombre:</label>
                <input type="text" name="name" class="form-control"
                       value="{{ old('name', $town->name ?? '') }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Latitud:</label>
                <input type="text" name="latitude" class="form-control"
                       value="{{ old('latitude', $town->latitude ?? '') }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Longitud:</label>
                <input type="text" name="longitude" class="form-control"
                       value="{{ old('longitude', $town->longitude ?? '') }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Provincia:</label>
                <select name="province_id" class="form-select" required>
                    @foreach($provincesList as $province)
                        <option value="{{ $province->id }}"
                            {{ old('province_id', $town->province_id ?? ($provinceId ?? '')) == $province->id ? 'selected' : '' }}>
                            {{ $province->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="{{ route('towns.index') }}" class="btn btn-secondary">Volver</a>
            </div>
        </form>
    </div>
</div>
@endsection