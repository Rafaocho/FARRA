@extends("master")
<!--Vista para añadir pueblos o modificarlos (al final no se ha añadido esta opcion, pero sigue contemplada en la vista)-->
@section("content")
    <div class="container mt-4">
        <div class="card shadow p-4 rounded-4">
            <h2 class="text-center mb-4 fw-bold text-primary">
                {{ isset($town) && $town->id ? __('messages.editTown') : __('messages.newTown') }}
            </h2>

            <form action="{{ isset($town) && $town->id ? route('towns.update', $town->id) : route('towns.store') }}" method="POST">
                @csrf
                @if(isset($town) && $town->id)
                    @method("PATCH")
                @endif

                <div class="mb-3">
                    <label class="form-label fw-bold">{{ __('messages.name') }}</label>
                    <input type="text" name="name" class="form-control rounded-3"
                           value="{{ old('name', $town->name ?? '') }}" required>
                </div>

                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label fw-bold">{{ __('messages.latitude') }}</label>
                        <input type="text" name="latitude" id="latitude" class="form-control rounded-3"
                               value="{{ old('latitude', $town->latitude ?? '') }}" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-bold">{{ __('messages.longitude') }}</label>
                        <input type="text" name="longitude" id="longitude" class="form-control rounded-3"
                               value="{{ old('longitude', $town->longitude ?? '') }}" required>
                    </div>
                </div>

                <div class="my-4 text-center">
                    <label class="form-label fw-bold">{{ __('messages.mapLabel') }}</label>
                    <div class="mx-auto border rounded shadow-sm" style="height: 400px; max-width: 600px; width: 100%;">
                        <div id="map" style="height: 100%; width: 100%;"></div>
                    </div>
                    <small class="text-muted fst-italic mt-2 d-block">{{ __('messages.mapHint') }}</small>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-bold">{{ __('messages.province') }}</label>
                    <select name="province_id" class="form-select rounded-3" required>
                        @foreach($provincesList as $province)
                            <option value="{{ $province->id }}"
                                {{ old('province_id', $town->province_id ?? ($provinceId ?? '')) == $province->id ? 'selected' : '' }}>
                                {{ $province->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('provinces.towns', $province->id) }}" class="btn fw-bold rounded-3" style="background-color: #ccc;">
                        {{ __('messages.goBack') }}
                    </a>
                    <button type="submit" class="btn fw-bold rounded-3" style="background-color: #f28dd0; color: white;">
                        {{ __('messages.save') }}
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const latInput = document.getElementById('latitude');
            const lngInput = document.getElementById('longitude');

            const lat = parseFloat(latInput.value) || 40.4168;
            const lng = parseFloat(lngInput.value) || -3.7038;

            const map = L.map('map').setView([lat, lng], 6);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);

            const marker = L.marker([lat, lng], { draggable: true }).addTo(map);

            marker.on('dragend', function () {
                const { lat, lng } = marker.getLatLng();
                latInput.value = lat.toFixed(6);
                lngInput.value = lng.toFixed(6);
            });

            latInput.addEventListener('change', updateMarker);
            lngInput.addEventListener('change', updateMarker);

            function updateMarker() {
                const lat = parseFloat(latInput.value);
                const lng = parseFloat(lngInput.value);
                if (!isNaN(lat) && !isNaN(lng)) {
                    marker.setLatLng([lat, lng]);
                    map.setView([lat, lng], map.getZoom());
                }
            }
        });
    </script>
@endsection
