<x-guest-layout style="background-image: linear-gradient(rgba(255,255,255,0.5), rgba(255,255,255,0.5)), url('{{ asset('images/background.jpg') }}'); background-size: cover; height: 100vh;">
    <style>
        body {
            background-image: url(public('asset/villa.jpg'));
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
        }
    </style>

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

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <!-- Log in Button -->
            <div class="flex items-center justify-center mt-4">
                <x-primary-button class="ms-3">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>

            <!-- Create Account Link -->
            <div class="flex items-center justify-center mt-4">
                @if (Route::has('register'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 italic rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                        {{ __('Create account?') }}
                    </a>
                @endif
            </div>

            <!-- Google Login -->
            <div class="flex justify-center mt-6">
                <a href="{{ route('login.google') }}" class="btn btn-primary">
                    Login with Google
                </a>
            </div>
        </form>
    </body>
</x-guest-layout>
