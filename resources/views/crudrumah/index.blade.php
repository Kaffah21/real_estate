<!-- resources/views/properties/index.blade.php -->

@extends('layout')

@section('content')
    <h1>Properties</h1>

    <a href="{{ route('properties.create') }}" class="btn btn-primary">Add New Property</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success mt-4">
            {{ $message }}
        </div>
    @endif

    <table class="table mt-4">
        <thead>
            <tr>
                <th>Name</th>
                <th>Location</th>
                <th>Price</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($properties as $property)
                <tr>
                    <td>{{ $property->name }}</td>
                    <td>{{ $property->location }}</td>
                    <td>{{ $property->price }}</td>
                    <td>{{ $property->description }}</td>
                    <td>
                        <a href="{{ route('properties.show', $property->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('properties.edit', $property->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('properties.destroy', $property->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
