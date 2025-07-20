<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekstrakurikuler</title>
    @vite('resources/css/app.css')
</head>

<body >
    

    <x-header />

    {{-- Section Gambar --}}
    <section class="relative w-full h-[80vh] overflow-hidden">
        <div class="absolute inset-0 bg-black/40 z-10"></div>
        <div class="absolute inset-0 w-full h-full z-0">
            @if ($gambarHeader)
                <img src="{{ asset('storage/' . $gambarHeader->gambar) }}" alt="Header Halaman"
                    class="w-full h-full object-cover" />
            @else
                <img src="{{ asset('assets/default-header.jpg') }}" alt="Header Halaman Default"
                    class="w-full h-full object-cover" />
            @endif
        </div>



    </section>
    {{-- Section Gambar End --}}

    <!-- Navbar -->
    <x-navbar />

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-600 to-sky-600 text-white py-20">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Ekstrakurikuler Terbaik untuk Anda</h1>
            <p class="text-lg md:text-xl mb-6">Kami menawarkan berbagai kegiatan ekstrakurikuler untuk pengembangan
                bakat Anda</p>
            <a href="#extracurricular"
                class="bg-white text-blue-600 px-6 py-3 rounded-full font-semibold hover:bg-blue-50 transition duration-300 shadow-md hover:shadow-lg">
                Lihat Ekstrakurikuler
            </a>
        </div>
    </section>

    <!-- Extracurricular Section -->
    <section id="extracurricular" class="container mx-auto px-4 py-12">
        <header class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800">Daftar Ekstrakurikuler</h2>
            <p class="text-gray-600 mt-2">Jelajahi kegiatan unggulan kami yang mendukung minat dan bakat Anda</p>
        </header>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($ekstra as $activity)
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border border-blue-50">
                    <img src="{{ asset('storage/' . $activity->gambar) }}" alt="{{ $activity->nama }}"
                        class="w-full h-48 object-cover hover:scale-105 transition-transform duration-500">
                    <div class="p-6">
                        <h3
                            class="text-xl font-semibold text-gray-800 mb-2 hover:text-blue-600 transition-colors duration-300">
                            {{ $activity->nama }}
                        </h3>
                        <p class="text-gray-600">{{ $activity->deskripsi }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Footer -->
    <x-footer />
    <script src="{{ asset('js/nav.js') }}"></script>
</body>

</html>
