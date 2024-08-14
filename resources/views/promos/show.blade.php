<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Promosi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h3 class="text-xl font-bold">{{ $promo->title }}</h3>
                    <p class="mt-4">{{ $promo->description }}</p>
                    <img src="{{ $promo->image }}" alt="{{ $promo->title }}" class="w-full h-auto mt-4 rounded-lg">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
