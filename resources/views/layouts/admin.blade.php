<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    {{-- menambahkan Icon website --}}
    <link rel="icon" href="{{ asset('asset/logo.png') }}" type="image/svg+xml">

    <style>
        /* Additional custom styles */
        .sidebar {
            position: sticky;
            top: 0; /* Make sure the sidebar sticks to the top of the viewport */
            height: 100vh; /* Ensure the sidebar takes full viewport height */
        }
    </style>
</head>
<body class="bg-gray-100 flex">
    <!-- Sidebar -->
   <!-- Sidebar -->
<aside class="w-64 bg-gray-800 h-screen shadow-lg sidebar">
    <div class="flex flex-col h-full text-white">
        <div class="flex-shrink-0 flex items-center px-4 py-6">
            <a href="{{ route('admin.dashboard') }}" class="font-bold text-xl">Dashboard</a>
        </div>

        <!-- Add menu items here -->
        <div class="px-4 py-6 border-t border-gray-600">
            <ul>
                <li>
                    <a href="{{ route('admin.properti_rumah.index') }}" class="flex items-center space-x-2 py-2 text-gray-200 hover:bg-gray-700 px-4 rounded-md">
                        <span>Properti Rumah</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.properti_villa.index') }}" class="flex items-center space-x-2 py-2 text-gray-200 hover:bg-gray-700 px-4 rounded-md">
                        <span>Properti Villa</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="px-4 py-6 border-t border-gray-600">
            <div class="flex items-center space-x-2">
                <div class="h-8 w-8 rounded-full overflow-hidden bg-indigo-500 flex items-center justify-center text-white font-bold">
                    @if(Auth::user()->profile_image)
                        <img src="{{ asset('storage/' . Auth::user()->profile_image) }}" alt="{{ Auth::user()->name }}" class="h-full w-full object-cover">
                    @else
                        {{ substr(Auth::user()->name, 0, 1) }}
                    @endif
                </div>
                <div>
                    <span class="text-gray-200">{{ Auth::user()->name }}</span>
                </div>
            </div>
            <form method="POST" action="{{ route('logout') }}" class="mt-4">
                @csrf
                <button type="submit" class="text-red-500 hover:bg-gray-700 px-4 py-2 rounded-md w-full text-left">Logout</button>
            </form>
        </div>
    </div>
</aside>


    <!-- Main content -->
    <main class="flex-1 max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        @yield('content')
    </main>
</body>
</html>
