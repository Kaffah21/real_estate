<aside class="w-64 bg-gray-500 h-screen shadow-lg sidebar">
    <div class="flex flex-col h-full text-white">

        <!-- Logo Section -->
        <div class="flex-shrink-0 flex items-center alight-center px-4 py-6">
            <a href="{{ route('admin.dashboard') }}">
                <img src="/asset/logo.png" alt="Logo" class="h-12 w-auto">
                <div class="flex-shrink-0 flex items-center px-4 py-6">
                    <a href="{{ route('admin.dashboard') }}" class="font-bold text-xl">Dashboard</a>
                </div>
            </a>
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
        <div class="px-4 py-6 border-t border-gray-600 relative">
            <div class="flex items-center space-x-2 cursor-pointer" id="profileDropdownToggle">
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

            <!-- Dropdown Menu -->
            <div id="profileDropdownMenu" class="hidden absolute left-0 mt-2 w-full bg-gray-600 rounded-md shadow-lg z-10">
                <a href="{{ route('admin.users.index') }}" class="block px-4 py-2 text-gray-200 hover:bg-gray-600">
                    Edit Profil
                </a>

                <form method="POST" action="{{ route('logout') }}" class="block px-4 py-2">
                    @csrf
                    <button type="submit" class="w-full text-left text-red-500 hover:bg-gray-600">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
</aside>

<script>
    // Toggle dropdown visibility when the profile section is clicked
    const profileDropdownToggle = document.getElementById('profileDropdownToggle');
    const profileDropdownMenu = document.getElementById('profileDropdownMenu');

    profileDropdownToggle.addEventListener('click', () => {
        profileDropdownMenu.classList.toggle('hidden');
    });

    // Close the dropdown if clicked outside
    document.addEventListener('click', function(event) {
        if (!profileDropdownToggle.contains(event.target)) {
            profileDropdownMenu.classList.add('hidden');
        }
    });
</script>
