<x-app-layout>
    <x-slot name="header">
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
                                <a href="{{ url('/contact') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Contact</a>
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

    </x-slot>
<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Selamat datang") }}
                </div>
            </div>
        </div>
    </div>

    <!-- Slideshow Section -->
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6">
                <!-- Slideshow -->
                <div class="relative">
                    <div class="relative h-64 overflow-hidden rounded-lg">
                        <div class="absolute inset-0">
                            <div class="flex items-center justify-center w-full h-full">
                                <div class="w-full h-full bg-gray-200 animate-pulse"></div>
                            </div>
                        </div>
                        <div class="absolute inset-0">
                            <div class="flex items-center justify-center w-full h-full">
                                <div class="w-full h-full bg-gray-300 animate-pulse"></div>
                            </div>
                        </div>
                        <div class="absolute inset-0">
                            <div class="flex items-center justify-center w-full h-full">
                                <div class="w-full h-full bg-gray-400 animate-pulse"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Card Section -->
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold mb-2">Card Title 1</h3>
                <p class="text-gray-600">This is a description for card 1. It provides a brief overview of the content.</p>
                <a href="#" class="text-indigo-600 hover:text-indigo-800 mt-4 inline-block">Learn More</a>
            </div>
            <!-- Card 2 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold mb-2">Card Title 2</h3>
                <p class="text-gray-600">This is a description for card 2. It provides a brief overview of the content.</p>
                <a href="#" class="text-indigo-600 hover:text-indigo-800 mt-4 inline-block">Learn More</a>
            </div>
            <!-- Card 3 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold mb-2">Card Title 3</h3>
                <p class="text-gray-600">This is a description for card 3. It provides a brief overview of the content.</p>
                <a href="#" class="text-indigo-600 hover:text-indigo-800 mt-4 inline-block">Learn More</a>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Include Footer -->
<x-footer />
</x-app-layout>
