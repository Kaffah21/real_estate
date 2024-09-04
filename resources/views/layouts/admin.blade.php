<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
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
    <aside class="w-64 bg-gray-800 h-screen shadow-lg sidebar">
        <div class="flex flex-col h-full text-white">
            <div class="flex-shrink-0 flex items-center px-4 py-6">
                <a href="{{ route('admin.dashboard') }}" class="font-bold text-xl">Dashboard</a>
            </div>
            <nav class="flex-1 px-2 py-4 space-y-2">
                <a href="{{ route('admin.properties') }}" class="block px-4 py-2 text-gray-300 rounded-md hover:bg-gray-700">
                    Rumah Properti
                </a>
                <a href="{{ route('admin.properties') }}" class="block px-4 py-2 text-gray-300 rounded-md hover:bg-gray-700">
                    Villa Properti
                </a>
                <!-- Add more sidebar links here if needed -->
            </nav>
            <div class="px-4 py-6 border-t border-gray-600">
                <div class="flex items-center space-x-2">
                    <div class="h-8 w-8 rounded-full bg-indigo-500 flex items-center justify-center text-white font-bold">
                        {{ substr(Auth::user()->name, 0, 1) }}
                    </div>
                    <div>
                        <span class="text-gray-200">{{ Auth::user()->name }}</span>
                    </div>
                </div>
            </div>
        </div>
    </aside>

    <!-- Main content -->
    <main class="flex-1 max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        @yield('content')
    </main>
</body>
</html>
