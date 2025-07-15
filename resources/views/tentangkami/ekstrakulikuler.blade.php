<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekstrakurikuler</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-sans">
    <!-- Navbar -->
    <x-navbar />

    <!-- Header Section -->
    <div class="flex items-center gap-4 bg-[#06923E] px-6 py-6 shadow-sm">
        <div class="ml-2">
            <img src="../assets/logoBaru.png" alt="Logo SD" class="w-16 h-16" />
        </div>
        <div>
            <h1 class="text-xl font-semibold text-gray-100">SD MUHAMMADIYAH BAUSASRAN</h1>
            <p class="text-sm text-gray-300">Kec. Danurejan, Kota Yogyakarta, Daerah Istimewa Yogyakarta</p>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="bg-[#06923E] text-white py-20">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Ekstrakurikuler Terbaik untuk Anda</h1>
            <p class="text-lg md:text-xl mb-6">Kami menawarkan berbagai kegiatan ekstrakurikuler untuk pengembangan bakat Anda</p>
            <a href="#extracurricular" class="bg-white text-green-600 px-6 py-3 rounded-full font-semibold hover:bg-gray-200 transition duration-300">Lihat Ekstrakurikuler</a>
        </div>
    </section>

    <!-- Extracurricular Section -->
    <section id="extracurricular" class="container mx-auto px-4 py-12">
        <header class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800">Daftar Ekstrakurikuler</h2>
            <p class="text-gray-600 mt-2">Jelajahi kegiatan unggulan kami yang mendukung minat dan bakat Anda</p>
        </header>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($ekstra as $activity)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img src="{{ asset('storage/' . $activity->gambar) }}" alt="{{ $activity->nama }}" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $activity->nama }}</h3>
                        <p class="text-gray-600">{{ $activity->deskripsi }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Footer -->
    <x-footer />
    <script src="../js/nav.js"></script>
</body>
</html>