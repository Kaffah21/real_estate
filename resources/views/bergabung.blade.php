<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bergabung dengan perusahaan') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Informasi tentang perusahaan -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex flex-col md:flex-row">
                        <!-- Gambar di Kiri -->
                        <div class="md:w-1/3 mb-6 md:mb-0 flex items-center justify-center">
                            <img src="{{ asset('asset/ilustrasi.png') }}" alt="Gambar Bergabung" class="w-full h-auto rounded-md shadow-md">
                        </div>

                        <!-- Form Bergabung dengan Perusahaan -->
                        <div class="md:w-2/3 md:pl-6">
                            <h3 class="text-lg font-semibold mb-2">Bergabung dengan Kami</h3>
                            <p class="mb-4">
                                Jika Anda tertarik untuk bergabung untuk menyewakan properti Anda, silakan bergabung
                            </p>

                            @if (session('success'))
                                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                                    <strong class="font-bold">Sukses!</strong>
                                    <span class="block sm:inline">{{ session('success') }}</span>
                                </div>
                            @endif

                            <form method="POST" action="{{ route('join.submit') }}" id="join-form" onsubmit="showProcessingModal(event)">
                                @csrf

                                <div class="grid grid-cols-1 gap-4">
                                    <div>
                                        <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                                        <input id="name" name="name" type="text" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="Masukkan nama Anda">
                                        @error('name')
                                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div>
                                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                        <input id="email" name="email" type="email" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="Masukkan email Anda">
                                        @error('email')
                                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div>
                                        <label for="phone" class="block text-sm font-medium text-gray-700">Nomor Telepon</label>
                                        <input id="phone" name="phone" type="tel" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="Masukkan nomor telepon Anda" oninput="validatePhone(this)">
                                        @error('phone')
                                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div>
                                        <label for="cover_letter" class="block text-sm font-medium text-gray-700">Anda Ingin Apa</label>
                                        <textarea id="cover_letter" name="cover_letter" rows="4" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="Masukkan surat lamaran Anda"></textarea>
                                        @error('cover_letter')
                                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div>
                                        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">Kirim</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for processing -->
    <div id="processing-modal" class="fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-lg p-6 shadow-lg">
            <h3 class="text-lg font-semibold mb-4">Permintaan Sedang Diproses</h3>
            <p>Harap tunggu, kami sedang memproses permintaan Anda.</p>
        </div>
    </div>

    <script>
        function validatePhone(input) {
            // Menghapus karakter non-numerik
            input.value = input.value.replace(/[^0-9]/g, '');
        }

        function showProcessingModal(event) {
            event.preventDefault(); // Mencegah pengiriman form secara langsung

            // Tampilkan modal
            document.getElementById('processing-modal').classList.remove('hidden');

            // Kirim form setelah delay untuk menunjukkan modal
            setTimeout(() => {
                document.getElementById('join-form').submit();
            }, 1000); // Delay 1 detik
        }
    </script>
    <!-- Include the footer -->
    <x-footer />
</x-app-layout>
