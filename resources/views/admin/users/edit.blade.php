@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2>Edit Admin User</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.users.update', $admin->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $admin->name) }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email', $admin->email) }}" required>
            </div>

            <div class="form-group">
                <label for="password">Password (Leave blank to keep current password)</label>
                <input type="password" name="password" class="form-control">
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Update Admin</button>
        </form>
    </div>
@endsection
