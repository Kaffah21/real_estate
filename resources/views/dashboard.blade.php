<x-app-layout>
    {{-- <x-slot name="header">
        <nav class="bg-gray-800">
            <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
                <div class="relative flex items-center justify-between h-16">

                    <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                        <div class="flex-shrink-0">
                            <a href="{{ url('/home') }}" class="text-white text-lg font-semibold">Dashboard</a>
                        </div>
                        <div class="hidden sm:block sm:ml-6">
                            <div class="flex space-x-4">
                                <a href="{{ url('/rumah') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Rumah</a>
                                <a href="{{ url('/villa') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Villa</a>
                                <a href="{{ url('/tentang') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Tentang</a>
                            </div>
                        </div>
                        <div class="hidden sm:flex sm:ml-auto">
                            <div class="flex space-x-4">
                                <input class="search fa fas-search" type="search" placeholder="Search..." style="border-radius: 25px; padding: 4px; border: 1px solid #ddd;" />
                                <a href="{{ route('login') }}"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                    Login
                </a>
                @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                    Register
                </a>
                @endif
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="sm:hidden" id="mobile-menu">
                <div class="px-2 pt-2 pb-3 space-y-1">
                    <a href="{{ url('/tentang') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Tentang</a>
                    <a href="{{ url('/rumah') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Rumah</a>
                    <a href="{{ url('/villa') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Villa</a>
                </div>
            </div>
        </nav>

    </x-slot> --}}
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Custom styling for the carousel controls */
        .carousel-control-prev,
        .carousel-control-next {
            width: 3rem;
            height: 3rem;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 50%;
        }
    </style>
    <div>
        <div class="py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <!-- Slideshow -->
                        <div class="relative">
                            <div class="relative h-64 overflow-hidden rounded-lg">
                                <!-- Carousel -->
                                <div id="carouselExampleIndicators" class="carousel slide relative w-full" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner relative w-full overflow-hidden">
                                        <!-- Slide 1 -->
                                        <div class="carousel-item active relative float-left w-full">
                                            <img src="asset/villa.jpg" class="block w-full h-64 object-cover" alt="Slide 1">
                                        </div>
                                        <!-- Slide 2 -->
                                        <div class="carousel-item relative float-left w-full">
                                            <img src="https://via.placeholder.com/800x400?text=Slide+2" class="block w-full h-64 object-cover" alt="Slide 2">
                                        </div>
                                        <!-- Slide 3 -->
                                        <div class="carousel-item relative float-left w-full">
                                            <img src="https://via.placeholder.com/800x400?text=Slide+3" class="block w-full h-64 object-cover" alt="Slide 3">
                                        </div>
                                    </div>
                                    <!-- Controls -->
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Include Bootstrap JS and dependencies -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </div>


<!-- Card Section -->
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <!-- Heading above cards -->
        <a href="{{ url('/rumah') }}" class="block text-2xl font-bold mb-6 text-center">
            Rumah
        </a>


        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Card 1 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <img src="path-to-image-1.jpg" alt="Card Image 1" class="w-full h-32 object-cover rounded-md mb-4">
                <h3 class="text-lg font-semibold mb-2">Card Title 1</h3>
                <p class="text-gray-600 mb-4">This is a description for card 1. It provides a brief overview of the content.</p>
                <div class="flex items-center mb-4">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                </div>
                <a href="#" class="text-indigo-600 hover:text-indigo-800 mt-4 inline-block">Learn More</a>
            </div>
            <!-- Card 2 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <img src="path-to-image-2.jpg" alt="Card Image 2" class="w-full h-32 object-cover rounded-md mb-4">
                <h3 class="text-lg font-semibold mb-2">Card Title 2</h3>
                <p class="text-gray-600 mb-4">This is a description for card 2. It provides a brief overview of the content.</p>
                <div class="flex items-center mb-4">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                </div>
                <a href="#" class="text-indigo-600 hover:text-indigo-800 mt-4 inline-block">Learn More</a>
            </div>
            <!-- Card 3 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <img src="path-to-image-3.jpg" alt="Card Image 3" class="w-full h-32 object-cover rounded-md mb-4">
                <h3 class="text-lg font-semibold mb-2">Card Title 3</h3>
                <p class="text-gray-600 mb-4">This is a description for card 3. It provides a brief overview of the content.</p>
                <div class="flex items-center mb-4">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                </div>
                <a href="#" class="text-indigo-600 hover:text-indigo-800 mt-4 inline-block">Learn More</a>
            </div>
            <!-- Card 4 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <img src="path-to-image-4.jpg" alt="Card Image 4" class="w-full h-32 object-cover rounded-md mb-4">
                <h3 class="text-lg font-semibold mb-2">Card Title 4</h3>
                <p class="text-gray-600 mb-4">This is a description for card 4. It provides a brief overview of the content.</p>
                <div class="flex items-center mb-4">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                </div>
                <a href="#" class="text-indigo-600 hover:text-indigo-800 mt-4 inline-block">Learn More</a>
            </div>
            <!-- Card 5 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <img src="path-to-image-5.jpg" alt="Card Image 5" class="w-full h-32 object-cover rounded-md mb-4">
                <h3 class="text-lg font-semibold mb-2">Card Title 5</h3>
                <p class="text-gray-600 mb-4">This is a description for card 5. It provides a brief overview of the content.</p>
                <div class="flex items-center mb-4">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                </div>
                <a href="#" class="text-indigo-600 hover:text-indigo-800 mt-4 inline-block">Learn More</a>
            </div>
            <!-- Card 6 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <img src="path-to-image-6.jpg" alt="Card Image 6" class="w-full h-32 object-cover rounded-md mb-4">
                <h3 class="text-lg font-semibold mb-2">Card Title 6</h3>
                <p class="text-gray-600 mb-4">This is a description for card 6. It provides a brief overview of the content.</p>
                <div class="flex items-center mb-4">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                </div>
                <a href="#" class="text-indigo-600 hover:text-indigo-800 mt-4 inline-block">Learn More</a>
            </div>
            <!-- Card 7 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <img src="path-to-image-7.jpg" alt="Card Image 7" class="w-full h-32 object-cover rounded-md mb-4">
                <h3 class="text-lg font-semibold mb-2">Card Title 7</h3>
                <p class="text-gray-600 mb-4">This is a description for card 7. It provides a brief overview of the content.</p>
                <div class="flex items-center mb-4">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                </div>
                <a href="#" class="text-indigo-600 hover:text-indigo-800 mt-4 inline-block">Learn More</a>
            </div>
            <!-- Card 8 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <img src="path-to-image-8.jpg" alt="Card Image 8" class="w-full h-32 object-cover rounded-md mb-4">
                <h3 class="text-lg font-semibold mb-2">Card Title 8</h3>
                <p class="text-gray-600 mb-4">This is a description for card 8. It provides a brief overview of the content.</p>
                <div class="flex items-center mb-4">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                </div>
                <a href="#" class="text-indigo-600 hover:text-indigo-800 mt-4 inline-block">Learn More</a>
            </div>
        </div>
    </div>
</div>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <!-- Heading above cards -->
        <a href="{{ url('/villa') }}" class="block text-2xl font-bold mb-6 text-center">
            Villa
        </a>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Card 1 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <img src="path-to-image-1.jpg" alt="Card Image 1" class="w-full h-32 object-cover rounded-md mb-4">
                <h3 class="text-lg font-semibold mb-2">Card Title 1</h3>
                <p class="text-gray-600 mb-4">This is a description for card 1. It provides a brief overview of the content.</p>
                <div class="flex items-center mb-4">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                </div>
                <a href="#" class="text-indigo-600 hover:text-indigo-800 mt-4 inline-block">Learn More</a>
            </div>
            <!-- Card 2 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <img src="path-to-image-2.jpg" alt="Card Image 2" class="w-full h-32 object-cover rounded-md mb-4">
                <h3 class="text-lg font-semibold mb-2">Card Title 2</h3>
                <p class="text-gray-600 mb-4">This is a description for card 2. It provides a brief overview of the content.</p>
                <div class="flex items-center mb-4">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                </div>
                <a href="#" class="text-indigo-600 hover:text-indigo-800 mt-4 inline-block">Learn More</a>
            </div>
            <!-- Card 3 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <img src="path-to-image-3.jpg" alt="Card Image 3" class="w-full h-32 object-cover rounded-md mb-4">
                <h3 class="text-lg font-semibold mb-2">Card Title 3</h3>
                <p class="text-gray-600 mb-4">This is a description for card 3. It provides a brief overview of the content.</p>
                <div class="flex items-center mb-4">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                </div>
                <a href="#" class="text-indigo-600 hover:text-indigo-800 mt-4 inline-block">Learn More</a>
            </div>
            <!-- Card 4 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <img src="path-to-image-4.jpg" alt="Card Image 4" class="w-full h-32 object-cover rounded-md mb-4">
                <h3 class="text-lg font-semibold mb-2">Card Title 4</h3>
                <p class="text-gray-600 mb-4">This is a description for card 4. It provides a brief overview of the content.</p>
                <div class="flex items-center mb-4">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                </div>
                <a href="#" class="text-indigo-600 hover:text-indigo-800 mt-4 inline-block">Learn More</a>
            </div>
            <!-- Card 5 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <img src="path-to-image-5.jpg" alt="Card Image 5" class="w-full h-32 object-cover rounded-md mb-4">
                <h3 class="text-lg font-semibold mb-2">Card Title 5</h3>
                <p class="text-gray-600 mb-4">This is a description for card 5. It provides a brief overview of the content.</p>
                <div class="flex items-center mb-4">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                </div>
                <a href="#" class="text-indigo-600 hover:text-indigo-800 mt-4 inline-block">Learn More</a>
            </div>
            <!-- Card 6 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <img src="path-to-image-6.jpg" alt="Card Image 6" class="w-full h-32 object-cover rounded-md mb-4">
                <h3 class="text-lg font-semibold mb-2">Card Title 6</h3>
                <p class="text-gray-600 mb-4">This is a description for card 6. It provides a brief overview of the content.</p>
                <div class="flex items-center mb-4">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                </div>
                <a href="#" class="text-indigo-600 hover:text-indigo-800 mt-4 inline-block">Learn More</a>
            </div>
            <!-- Card 7 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <img src="path-to-image-7.jpg" alt="Card Image 7" class="w-full h-32 object-cover rounded-md mb-4">
                <h3 class="text-lg font-semibold mb-2">Card Title 7</h3>
                <p class="text-gray-600 mb-4">This is a description for card 7. It provides a brief overview of the content.</p>
                <div class="flex items-center mb-4">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                </div>
                <a href="#" class="text-indigo-600 hover:text-indigo-800 mt-4 inline-block">Learn More</a>
            </div>
            <!-- Card 8 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <img src="path-to-image-8.jpg" alt="Card Image 8" class="w-full h-32 object-cover rounded-md mb-4">
                <h3 class="text-lg font-semibold mb-2">Card Title 8</h3>
                <p class="text-gray-600 mb-4">This is a description for card 8. It provides a brief overview of the content.</p>
                <div class="flex items-center mb-4">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                    <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/>
                    </svg>
                </div>
                <a href="#" class="text-indigo-600 hover:text-indigo-800 mt-4 inline-block">Learn More</a>
            </div>
        </div>
    </div>
</div>


<!-- Include Footer -->
<x-footer />
</x-app-layout>
