<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('/asset/villa.jpg');">
        <div class="absolute inset-0 bg-black opacity-40"></div>
    </div>

    <!-- Form Container -->
    <div class="relative z-10 w-full max-w-md mx-auto bg-white p-8 rounded-lg shadow-lg mt-20">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Centered Heading -->
            <div class="flex justify-center mb-6">
                <h2 class="text-2xl font-semibold mb-4">Sign in</h2>
            </div>

            <!-- Email Address -->
            <div class="mb-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mb-4">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Centered Buttons Section -->
            <div class="flex flex-col items-center mt-4">
                <!-- Log in Button -->
                <x-primary-button class="w-full mb-4">
                    {{ __('Login') }}
                </x-primary-button>

                <!-- Register Link -->
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="text-gray-600 hover:text-gray-800">
                        Buat akun?
                    </a>
                @endif
            </div>

            <!-- Google Login Button -->
            <div class="flex justify-center mt-6">
                <a href="{{ route('login.google') }}" class="flex items-center justify-center w-full bg-white border border-gray-300 rounded-lg shadow-md py-2 px-4 text-gray-700 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                    <img src="https://th.bing.com/th/id/OIP.Fll7WPtNT6jrz1oBP8GbCgHaHj?w=166&h=180&c=7&r=0&o=5&pid=1.7" alt="Google Logo" class="h-5 w-5 mr-3" />
                    <span>Login with Google</span>
                </a>
            </div>
        </form>
    </div>
</x-guest-layout>
