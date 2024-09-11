<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    @vite('resources/css/app.css') <!-- Pastikan Anda mengatur Vite dengan benar -->
    <link rel="icon" href="{{ asset('asset/logo.png') }}" type="image/svg+xml">
    <style>
        /* Gaya untuk background gambar */
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            overflow: hidden;
            background-image: url('/asset/villa.jpg'); /* Ganti dengan path gambar Anda */
            background-size: cover; /* Menutupi seluruh layar */
            background-position: center; /* Menempatkan gambar di tengah */
            background-attachment: fixed; /* Memastikan gambar tetap saat scroll */
            background-repeat: no-repeat; /* Menghindari pengulangan gambar */
        }

        /* Gaya overlay untuk meningkatkan keterbacaan teks */
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4); /* Overlay hitam dengan transparansi */
            z-index: -1; /* Menempatkan overlay di belakang form */
        }

        /* Menambahkan gaya untuk form container */
        .form-container {
            display: flex;
            justify-content: center; /* Horizontal center */
            align-items: center; /* Vertical center */
            height: 100vh; /* Menyesuaikan dengan tinggi viewport */
            position: relative;
            z-index: 10;
        }

        /* Gaya untuk bagian form */
        .form-content {
            display: flex;
            background: white;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            max-width: 80%;
            width: 800px; /* Atur lebar sesuai kebutuhan */
        }

        /* Gaya untuk gambar */
        .form-content .image {
            flex: 1;
            background: url('/asset/login.png') no-repeat center center;
            background-size: cover;
        }

        /* Gaya untuk form login */
        .form-content .form {
            flex: 1;
            padding: 2rem;
        }
    </style>
</head>
<body class="relative">
    <!-- Background Overlay -->
    <div class="overlay"></div>

    <!-- Form Container -->
    <div class="form-container">
        <div class="form-content">
            <!-- Gambar di sebelah kiri -->
            <div class="image"></div>

            <!-- Form Login di sebelah kanan -->
            <div class="form">
                <div class="w-full max-w-sm mx-auto">
                    <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>
                    @if ($errors->any())
                        <div class="mb-4">
                            <ul class="text-red-500 list-disc pl-5">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('admin.login') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 font-medium">Email</label>
                            <input id="email" type="email" name="email" value="{{ old('email') }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-indigo-200 focus:border-indigo-500 sm:text-sm" required>
                        </div>
                        <div class="mb-4">
                            <label for="password" class="block text-gray-700 font-medium">Password</label>
                            <input id="password" type="password" name="password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-indigo-200 focus:border-indigo-500 sm:text-sm" required>
                        </div>
                        <div class="flex items-center justify-center mt-4">
                            <!-- Log in Button -->
                            <button type="submit" class="bg-black text-white py-2 px-4 rounded-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
