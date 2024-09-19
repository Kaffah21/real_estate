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


    @include('partials.sidebar')


    <!-- Main content -->
    <main class="flex-1 max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        @yield('content')
    </main>
</body>
</html>
