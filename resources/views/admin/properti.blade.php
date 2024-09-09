@extends('layouts.admin')


    <div class="bg-white p-6 rounded-lg shadow-lg">
        <h3 class="text-lg font-semibold text-gray-900"> Properti</h3>
        <@extends('layouts.admin')

        @section('content')
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-lg font-semibold text-gray-900">Daftar Rumah</h3>

                <a href="{{ route('admin.rumah.create') }}" class="inline-block px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                    Tambah Rumah
                </a>

                @if (session('success'))
                    <div class="mt-4 p-4 bg-green-100 text-green-800 rounded-md">
                        {{ session('success') }}
                    </div>
                @endif

                <table class="mt-4 w-full border border-gray-300">
                    <thead>
                        <tr>
                            <th class="border-b px-4 py-2">Nama</th>
                            <th class="border-b px-4 py-2">Harga</th>
                            <th class="border-b px-4 py-2">Alamat</th>
                            <th class="border-b px-4 py-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rumahs as $rumah)
                            <tr>
                                <td class="border-b px-4 py-2">{{ $rumah->nama }}</td>
                                <td class="border-b px-4 py-2">{{ $rumah->harga }}</td>
                                <td class="border-b px-4 py-2">{{ $rumah->alamat }}</td>
                                <td class="border-b px-4 py-2">
                                    <a href="{{ route('admin.rumah.edit', $rumah) }}" class="text-blue-500 hover:underline">Edit</a>
                                    <form action="{{ route('admin.rumah.destroy', $rumah) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:underline">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


    </div>
@endsection
