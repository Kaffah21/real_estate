@extends('layouts.admin')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-lg">
    <h1 class="text-xl font-bold mb-4">Tambah Properti Rumah</h1>

    <form action="{{ route('admin.properti_rumah.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700">Nama:</label>
            <input type="text" name="nama" class="w-full border rounded px-4 py-2" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Lokasi:</label>
            <input type="text" name="lokasi" class="w-full border rounded px-4 py-2" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Harga:</label>
            <input type="number" name="harga" class="w-full border rounded px-4 py-2" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Deskripsi:</label>
            <textarea name="deskripsi" class="w-full border rounded px-4 py-2" required></textarea>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
    </form>
</div>
@endsection
