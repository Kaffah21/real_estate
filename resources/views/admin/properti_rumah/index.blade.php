@extends('layouts.admin')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-lg">
    <h1 class="text-xl font-bold mb-4">Daftar Properti Rumah</h1>
    <a href="{{ route('admin.properti_rumah.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Properti</a>

    @if (session('success'))
        <div class="bg-green-500 text-white p-2 my-2 rounded">
            {{ session('success') }}
        </div>
    @endif

    <table class="min-w-full bg-white mt-4">
        <thead>
            <tr>
                <th class="border px-4 py-2">Nama</th>
                <th class="border px-4 py-2">Lokasi</th>
                <th class="border px-4 py-2">Harga</th>
                <th class="border px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rumah as $r)
                <tr>
                    <td class="border px-4 py-2">{{ $r->nama }}</td>
                    <td class="border px-4 py-2">{{ $r->lokasi }}</td>
                    <td class="border px-4 py-2">{{ $r->harga }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('admin.properti_rumah.edit', $r->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded">Edit</a>
                        <form action="{{ route('admin.properti_rumah.destroy', $r->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
