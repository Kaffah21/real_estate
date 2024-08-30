@extends('layouts.admin')

@section('content')
<div class="px-4 py-6 sm:px-0">
    <h1 class="text-2xl font-semibold text-gray-900">Selamat datang, {{ Auth::user()->name }}</h1>
</div>
@endsection
