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

        /* Slideshow styles */
        .slideshow {
            position: relative;
            width: 100%;
            height: 400px;
            overflow: hidden;
        }

        .slideshow-inner {
            position: relative;
            width: 100%;
            height: 100%;
            transition: transform 0.5s ease-in-out;
        }

        .slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: none;
        }

        .slide.active {
            display: block;
        }

        .slideshow-controls {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            justify-content: space-between;
            width: 100px;
        }

        .prev,
        .next {
            background-color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }

        .prev:hover,
        .next:hover {
            background-color: #ddd;
        }

        /* Card styles */
        .cards {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            gap: 20px;
        }

        .card {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            padding-bottom: 10px;
            border-bottom: 1px solid #ddd;
        }

        .card-title {
            font-size: 20px; /* Memperbesar ukuran font pada judul kartu */
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-body {
            padding-top: 10px;
            font-size: 18px; /* Memperbesar ukuran font pada isi kartu */
        }

        /* Responsive styles */
        @media (min-width: 768px) {
            .cards {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (min-width: 1024px) {
            .cards {
                grid-template-columns: repeat(3, 1fr);
            }
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
    <div class="container mx-auto p-4 pt-6 md:p-6 lg:p-12">
        <!-- Slideshow -->
        <div class="slideshow mb-6">
            <div class="slideshow-inner">
                <div class="slide">
                    <img src="https://www.google.com/url?client=internal-element-cse&cx=partner-pub-2698861478625135:7463904445&q=https://www.traveloka.com/id-id/accommodation/villa/indonesia/city/yogyakarta-107442&sa=U&ved=2ahUKEwjDpqmJ5YOIAxXxXmwGHXIUCIwQFnoECAIQAQ&usg=AOvVaw1XunP1saNliBFbk4RW1mTi" alt="Slide 1">
                </div>
                <div class="slide">
                    <img src="https://via.placeholder.com/800x400" alt="Slide 2">
                </div>
                <div class="slide">
                    <img src="https://via.placeholder.com/800x400" alt="Slide 3">
                </div>
            </div>
            <div class="slideshow-controls">
                <button class="prev">Prev</button>
                <button class="next">Next</button>
            </div>
        </div>

        <!-- Cards -->
        <div class="cards grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Card 1</h5>
                </div>
                <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Card 2</h5>
                </div>
                <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Card 3</h5>
                </div>
                <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Card 4</h5>
                </div>
                <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Card 5</h5>
                </div>
                <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Card 6</h5>
                </div>
                <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </div>
            </div>
        </div>
    </div>

    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
    </footer>
</body>
