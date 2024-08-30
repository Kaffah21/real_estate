<x-guest-layout>


    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="flex justify-center">
            <h2 class="text-2xl font-semibold mb-4">Register</h2>
        </div>

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full"
                          type="password"
                          name="password"
                          required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                          type="password"
                          name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Buttons and Links Section -->
        <div class="flex items-center justify-between mt-4">
            <x-primary-button>
                {{ __('Register') }}
            </x-primary-button>

            <a class=" text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ms-4" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
        </div>

        <!-- Google Login Button -->
        <div class="flex justify-center mt-6">
            <a href="{{ route('login.google') }}" class="flex items-center justify-center w-full bg-white border border-gray-300 rounded-lg shadow-md py-2 px-4 text-gray-700 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                <img src="https://th.bing.com/th/id/OIP.Fll7WPtNT6jrz1oBP8GbCgHaHj?w=166&h=180&c=7&r=0&o=5&pid=1.7" alt="Google Logo" class="h-5 w-5 mr-3" />
                <span>Login with Google</span>
            </a>
        </div>
    </form>
</x-guest-layout>
