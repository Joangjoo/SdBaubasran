<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fasilitas</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-sans">
    <x-navbar/>
    <div class="flex items-center gap-4 bg-[#06923E] px-6 py-4 shadow-sm">
        <div class="ml-2">
            <img src="../assets/logoBaru.png" alt="Logo SD" class="w-16 h-16" />
        </div>
        <div>
            <h1 class="text-xl font-semibold text-gray-100 ">SD MUHAMMADIYAH BAUSASRAN</h1>
            <p class="text-sm text-gray-300">Kec. Danurejan, Kota Yogyakarta, Daerah Istimewa Yogyakarta</p>
        </div>
    </div>

    <section class="bg-[#06923E] text-white py-20 ">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Fasilitas Terbaik untuk Anda</h1>
            <p class="text-lg md:text-xl mb-6">Kami menyediakan berbagai fasilitas modern untuk mendukung gaya hidup Anda</p>
            <a href="#facilities" class="bg-white text-green-600 px-6 py-3 rounded-full font-semibold hover:bg-gray-200">Lihat Fasilitas</a>
        </div>
    </section>
    <section id="facilities" class="container mx-auto px-4 py-12">
        <header class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800">Daftar Fasilitas</h2>
            <p class="text-gray-600 mt-2">Jelajahi fasilitas unggulan kami yang dirancang untuk kenyamanan dan kepuasan Anda</p>
        </header>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($fasilitas as $facility)
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="{{asset('storage/' . $facility->gambar )}}" alt="{{ $facility->nama }}" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800">{{ $facility->nama }}</h3>
                        <p class="text-gray-600 mt-2">{{ $facility->deskripsi }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <x-footer/>
    <script src="../js/nav.js"></script>
</body>
</html>
