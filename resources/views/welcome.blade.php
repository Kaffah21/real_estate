<head>
    <title>Dashboard</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        body {
            color: #000; /* Mengubah warna font menjadi hitam */
            font-size: 18px; /* Memperbesar sedikit ukuran font */
        }


        /* Navbar styles */
        nav {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 10px;
        }

        .auth-links {
            display: flex;
            gap: 10px;
        }

        .auth-links a {
            margin-left: 10px;
            color: #000; /* Mengubah warna font menjadi hitam */
            font-size: 18px; /* Memperbesar ukuran font pada link */
            text-decoration: none; /* Menghilangkan garis bawah */
        }

        .auth-links a:hover {
            color: #888; /* Mengubah warna font menjadi abu-abu saat hover */
        }

    </style>
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/70">
    <header>
        @if (Route::has('login'))
        <nav class="-mx-3 flex flex-1 justify-end">
            <div class="auth-links">
                @auth
                <a href="{{ url('/dashboard') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                    Dashboard
                </a>
                @else
                <a href="{{ url('/welcome') }}"
                    class="text-gray-300 rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                    Dashboard
                </a>
                <a href="{{ url('/rumah') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                    Rumah
                </a>
                <a href="{{ url('/villa') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                    Villa
                </a>
                <a href="{{ url('/tentang') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                    Tentang
                </a>
                <a href="{{ url('/contact') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                    Contact
                </a>
                <input class="search fa fas-search" type="search" placeholder="Search..." />
                <a href="{{ route('login') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                    Log in
                </a>
                @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                    Register
                </a>
                @endif
                @endauth
            </div>
        </nav>
        @endif
    </header>

    <!-- Dashboard layout -->

    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
    </footer>
</body>
