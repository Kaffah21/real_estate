@extends('layouts.admin')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-lg">
    <h1 class="text-xl font-bold mb-4">Daftar Properti Villa</h1>
    <ul>
        @foreach($villa as $v)
            <li>{{ $v }}</li>
        @endforeach
    </ul>
</div>
@endsection
