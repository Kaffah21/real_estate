<x-guest-layout >


    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <body>
        <div class="flex justify-center mb-6">
            <form method="POST" action="{{ route('login') }}">
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf


            <div class="flex justify-center">
                <h2 class="text-2xl font-semibold mb-4">Sign in</h2>
            </div>


            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

        <!-- Buttons Section -->
        <div class="flex items-center justify-between mt-4">
            <!-- Log in Button -->
            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>

            <!-- Register Link -->
            @if (Route::has('register'))
                <a href="{{ route('register') }}"
                   class="rounded-md px-3 py-2 text-black ring-1 text-size 10 italic ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                    Buat akun?
                </a>
            @endif
        </div>

        <!-- Google Login Button -->
        <div class="flex justify-center mt-6">
            <a href="{{ route('login.google') }}" class="btn btn-primary">
                Login with Google
            </a>
        </div>
    </form>

</x-guest-layout>
