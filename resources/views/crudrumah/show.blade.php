<!-- resources/views/properties/show.blade.php -->

@extends('layout')

@section('content')
    <h1>{{ $property->name }}</h1>

    <div>
        <strong>Location:</strong> {{ $property->location }}
    </div>
    <div>
        <strong>Price:</strong> {{ $property->price }}
    </div>
    <div>
        <strong>Description:</strong> {{ $property->description }}
    </div>

    <a href="{{ route('properties.index') }}" class="btn btn-secondary">Back</a>
@endsection
