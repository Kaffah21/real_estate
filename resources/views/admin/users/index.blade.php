@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2>Daftar Admin Users</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($admins as $admin)
                    <tr>
                        <td>{{ $admin->id }}</td>
                        <td>{{ $admin->name }}</td>
                        <td>{{ $admin->email }}</td>
                        <td>
                            <a href="{{ route('admin.users.edit', $admin->id) }}" class="btn btn-warning">Edit</a>
                            <!-- Tambahkan tombol hapus jika diperlukan -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
