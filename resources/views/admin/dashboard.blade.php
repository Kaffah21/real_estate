@extends('layouts.admin')

@section('content')
<div class="px-4 py-6 sm:px-0">
    <h1 class="text-2xl font-semibold text-gray-900">Selamat datang, {{ Auth::user()->name }}</h1>
    <p class="mt-2 text-sm text-gray-700">Anda login sebagai admin.</p>

    <div class="mt-6">
        <h2 class="text-xl font-semibold text-gray-900">Daftar Property Rumah</h2>
        <div class="mt-4 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
            @foreach($properties as $property)
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <h3 class="text-lg font-medium text-gray-900">{{ $property->name }}</h3>
                    <p class="mt-1 text-sm text-gray-500">{{ $property->description }}</p>
                    <p class="mt-2 text-sm font-semibold text-gray-900">Rp {{ number_format($property->price, 0, ',', '.') }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
