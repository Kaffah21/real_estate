@extends('layouts.admin')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-lg">
    <h1 class="text-xl font-bold mb-4">Daftar Penyewa</h1>
    <ul>
        @foreach($penyewa as $p)
            <li>{{ $p }}</li>
        @endforeach
    </ul>
</div>
@endsection
