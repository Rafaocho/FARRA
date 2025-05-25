@extends("master")

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
                    <input type="text" name="name" class="form-control" value="{{ old('name', $town->name ?? '') }}"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Latitud:</label>
                    <input type="text" name="latitude" id="latitude" class="form-control"
                        value="{{ old('latitude', $town->latitude ?? '') }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Longitud:</label>
                    <input type="text" name="longitude" id="longitude" class="form-control"
                        value="{{ old('longitude', $town->longitude ?? '') }}" required>
                </div>

                <div class="mb-4 text-center">
                    <label class="form-label fw-semibold mb-2">
                        Selecciona la ubicación en el mapa:
                    </label>

                    <div class="mx-auto border border-1 rounded-3 shadow-sm"
                        style="height: 400px; max-width: 600px; width: 100%; overflow: hidden;">
                        <div id="map" style="height: 100%; width: 100%;"></div>
                    </div>

                    <small class="text-muted fst-italic d-block mt-2">
                        Haz clic sobre el mapa para establecer la latitud y longitud del pueblo.
                    </small>
                </div>

                <div class="mb-3">
                    <label class="form-label">Provincia:</label>
                    <select name="province_id" class="form-select" required>
                        @foreach($provincesList as $province)
                            <option value="{{ $province->id }}" {{ old('province_id', $town->province_id ?? ($provinceId ?? '')) == $province->id ? 'selected' : '' }}>
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

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const latitudInput = document.getElementById('latitude');
            const altitudInput = document.getElementById('longitude');
            const latitudInicial = parseFloat(latitudInput.value) || 40.4168;
            const altitudInicial = parseFloat(altitudInput.value) || -3.7038;

            const map = L.map('map').setView([latitudInicial, altitudInicial], 6);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);

            const marker = L.marker([latitudInicial, altitudInicial], { draggable: true }).addTo(map);

            marker.on('dragend', function (e) {
                const { lat, lng } = marker.getLatLng();
                latitudInput.value = lat.toFixed(6);
                altitudInput.value = lng.toFixed(6);
            });

            latitudInput.addEventListener('change', updateMarker);
            altitudInput.addEventListener('change', updateMarker);

            function updateMarker() {
                const lat = parseFloat(latitudInput.value);
                const lng = parseFloat(altitudInput.value);
                if (!isNaN(lat) && !isNaN(lng)) {
                    marker.setLatLng([lat, lng]);
                    map.setView([lat, lng], map.getZoom());
                }
            }
        });
    </script>
@endsection