@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Rumah</h1>
    <a href="{{ route('rumah.create') }}" class="btn btn-primary">Tambah Rumah</a>
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rumah as $r)
            <tr>
                <td>{{ $r->nama }}</td>
                <td>{{ $r->alamat }}</td>
                <td>{{ $r->harga }}</td>
                <td>
                    <a href="{{ route('rumah.edit', $r->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('rumah.destroy', $r->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
