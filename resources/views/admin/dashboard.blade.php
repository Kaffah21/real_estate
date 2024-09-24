@extends('layouts.admin')

@section('content')
<div class="px-4 py-6 sm:px-0">
    <h1 class="text-2xl font-semibold text-gray-900">Selamat datang, {{ Auth::user()->name }}</h1>

    <!-- Data Statistik -->
    <div class="mt-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Kartu Statistik 1 -->
        <div class="bg-blue-500 p-6 rounded-lg shadow-lg transition-colors duration-300 hover:bg-blue-400">
            <h3 class="text-lg font-semibold text-gray-700">Total Pengguna</h3>
            <p class="text-2xl font-bold text-gray-700">21</p>
        </div>

        <!-- Kartu Statistik 2 -->
        <div class="bg-yellow-500 p-6 rounded-lg shadow-lg transition-colors duration-300 hover:bg-yellow-400">
            <h3 class="text-lg font-semibold text-gray-900">Jumlah Properti</h3>
            <p class="text-2xl font-bold text-gray-700">13</p>
        </div>

        <!-- Kartu Statistik 3 -->
        <div class="bg-green-500 p-6 rounded-lg shadow-lg transition-colors duration-300 hover:bg-green-400">
            <h3 class="text-lg font-semibold text-gray-900">Permintaan Bergabung</h3>
            <p class="text-2xl font-bold text-gray-700">211</p>
        </div>
    </div>

    <!-- Peta Lokasi Perusahaan -->
    <h2 class="text-xl font-semibold text-gray-900 mt-6">Lokasi Perusahaan</h2>
    <div class="mt-4">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.2719849826935!2d108.32438897393178!3d-7.323316172015069!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f5eba1b06f52f%3A0xaf882382d9de1508!2sSMK%20Negeri%201%20Ciamis!5e0!3m2!1sid!2sid!4v1727179459914!5m2!1sid!2sid"
            class="w-full h-96 border-0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</div>
@endsection
