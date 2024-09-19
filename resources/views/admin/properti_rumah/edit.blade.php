@extends('layouts.admin')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-lg">
    <h1 class="text-xl font-bold mb-4">Edit Properti Rumah</h1>

    <!-- Menampilkan error validasi -->
    @if ($errors->any())
        <div class="bg-red-500 text-white p-4 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form untuk mengedit properti rumah -->
    <form action="{{ route('admin.properti_rumah.update', $propertiRumah->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block text-gray-700">Nama:</label>
            <input type="text" name="nama" value="{{ old('nama', $propertiRumah->nama) }}" class="w-full border rounded px-4 py-2" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Lokasi:</label>
            <input type="text" name="lokasi" value="{{ old('lokasi', $propertiRumah->lokasi) }}" class="w-full border rounded px-4 py-2" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Harga:</label>
            <input type="number" name="harga" value="{{ old('harga', $propertiRumah->harga) }}" class="w-full border rounded px-4 py-2" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Deskripsi:</label>
            <textarea name="deskripsi" class="w-full border rounded px-4 py-2" required>{{ old('deskripsi', $propertiRumah->deskripsi) }}</textarea>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
        <a href="{{ route('admin.properti_rumah.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded ml-2">Batal</a>
    </form>
</div>
@endsection
