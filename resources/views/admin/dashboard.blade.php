@extends('layouts.admin')

@section('content')
<div class="px-4 py-6 sm:px-0">
    <h1 class="text-2xl font-semibold text-gray-900">Selamat datang, {{ Auth::user()->name }}</h1>

    <!-- Data Statistik -->
    <div class="mt-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Kartu Statistik 1 -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h3 class="text-lg font-semibold text-gray-900">Total Pengguna</h3>
            {{-- <p class="text-2xl font-bold text-gray-700">{{ $totalUsers }}</p> --}}
            <p class="text-2xl font-bold text-gray-700">21</p>

        </div>

        <!-- Kartu Statistik 2 -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h3 class="text-lg font-semibold text-gray-900">Jumlah Properti</h3>
            {{-- <p class="text-2xl font-bold text-gray-700">{{ $totalProperties }}</p> --}}
            <p class="text-2xl font-bold text-gray-700">13</p>

        </div>

        <!-- Kartu Statistik 3 -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h3 class="text-lg font-semibold text-gray-900">Permintaan Bergabung</h3>
            {{-- <p class="text-2xl font-bold text-gray-700">{{ $joinRequests }}</p> --}}
            <p class="text-2xl font-bold text-gray-700">211</p>

        </div>
    </div>

    <!-- Peta Lokasi Perusahaan -->
    <div class="mt-6">
        <h2 class="text-xl font-semibold text-gray-900">Lokasi Perusahaan</h2>
        <div id="map" class="w-full h-96 mt-4 rounded-lg shadow-lg"></div>
    </div>
</div>

<!-- Include Google Maps JavaScript API -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY&callback=initMap" async defer></script>
<script>
    function initMap() {
        // Koordinat Lokasi Perusahaan
        const companyLocation = { lat: -6.200000, lng: 106.816666 }; // Ganti dengan koordinat sebenarnya

        // Buat peta dan tempatkan marker
        const map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: companyLocation,
        });

        new google.maps.Marker({
            position: companyLocation,
            map: map,
            title: 'Lokasi Perusahaan',
        });
    }
</script>
@endsection
