<aside class="w-64 bg-gray-800 h-screen shadow-lg sidebar">
    <div class="flex flex-col h-full text-white">
        <div class="flex-shrink-0 flex items-center px-4 py-6">
            <a href="{{ route('admin.dashboard') }}" class="font-bold text-xl">Dashboard</a>
        </div>

        <!-- Menu Items -->
        <div class="flex-grow px-4 space-y-4">

            <a href="{{ route('admin.properti_villa') }}" class="block text-gray-200 hover:text-white">
                Properti Villa
            </a>
            <a href="{{ route('admin.data_penyewa') }}" class="block text-gray-200 hover:text-white">
                Data Penyewa
            </a>
        </div>

        <!-- User Profile and Logout -->
        <div class="px-4 py-6 border-t border-gray-600">
            <div class="flex items-center space-x-2">
                @if (Auth::check())
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
                @else
                    <span class="text-gray-200">Admin</span>
                @endif
            </div>

            @if (Auth::check())

            <a href="{{ route('admin.users.index') }}">Edit</a>

                <form method="POST" action="{{ route('logout') }}" class="mt-4">
                    @csrf
                    <button type="submit" class="text-red-500 hover:bg-gray-700 px-4 py-2 rounded-md w-full text-left">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="text-blue-500  text-left">Logout</a>
            @endif
        </div>

</aside>
