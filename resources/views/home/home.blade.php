<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Home</title>
    <link rel="stylesheet" href="css/slider.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/countup.js/2.8.0/countUp.umd.js"></script>

</head>

<body class="bg-gradient-to-br from-emerald-50 via-green-50 to-teal-50 overflow-x-hidden">
    <div class="flex items-center gap-4 bg-[#06923E] px-6 py-4 shadow-sm">
        <div class="ml-2">
            <img src="assets/logoBaru.png" alt="Logo SD" class="w-16 h-16" />
        </div>
        <div>
            <h1 class="text-xl font-semibold text-gray-100 ">SD MUHAMMADIYAH BAUSASRAN</h1>
            <p class="text-sm text-gray-300">Kec. Danurejan, Kota Yogyakarta, Daerah Istimewa Yogyakarta</p>
        </div>
    </div>
    {{-- Header End --}}

    {{-- Section Selamat Datang Start --}}
    <section class="relative w-full h-[90vh] overflow-hidden">
        <div class="swiper hero-swiper absolute inset-0 w-full h-full z-0">
            <div class="swiper-wrapper">
                @foreach ($slider as $slide)
                    <div class="swiper-slide">
                        <img src="{{ asset('storage/' . $slide->gambar) }}" alt="Slide {{ $loop->iteration }}"
                            class="w-full h-full object-cover" />
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Overlay & Text --}}
        <div class="absolute inset-0 bg-black/40 flex items-center justify-center z-10 px-4 text-center">
            <div class="text-white max-w-3xl" data-aos="fade-down" data-aos-duration="1000">
                <h1 class="text-3xl md:text-5xl font-bold mb-4 drop-shadow-lg">
                    <span class="text-[#06923E]">Selamat Datang</span> di SD Muhammadiyah <span
                        class="text-[#06923E]">Bausasran</span>
                </h1>
                <p class="text-lg text-white/90">
                    Sekolah unggulan dengan pendidikan berbasis akhlak mulia, prestasi, dan teknologi.
                </p>
            </div>
        </div>
    </section>
    {{-- Section Selamat Datang End --}}

    {{-- Statistik Prestasi --}}
    <section class="relative z-10 -mt-20">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Container biru untuk statistik --}}
            <div id="stats-section" class="bg-green-700 rounded-2xl shadow-xl p-8">

                {{-- Grid untuk 4 item statistik --}}
                <div
                    class="grid grid-cols-2 md:grid-cols-4 divide-y-2 md:divide-y-0 md:divide-x-2 divide-green-600/70 text-center">

                    {{-- Item 1: Internasional --}}
                    <div class="p-4">
                        <span id="counter-internasional"
                            class="text-4xl lg:text-5xl font-extrabold text-orange-400 block">0</span>
                        <p class="mt-1 text-sm lg:text-base text-blue-100/90">Prestasi Internasional</p>
                    </div>

                    {{-- Item 2: Nasional --}}
                    <div class="p-4">
                        <span id="counter-nasional"
                            class="text-4xl lg:text-5xl font-extrabold text-[#FFC107] block">0</span>
                        <p class="mt-1 text-sm lg:text-base text-blue-100/90">Prestasi Nasional</p>
                    </div>

                    {{-- Item 3: Provinsi --}}
                    <div class="p-4">
                        <span id="counter-provinsi"
                            class="text-4xl lg:text-5xl font-extrabold text-[#FF3F33] block">0</span>
                        <p class="mt-1 text-sm lg:text-base text-blue-100/90">Prestasi Provinsi</p>
                    </div>

                    {{-- Item 4: Kota --}}
                    <div class="p-4">
                        <span id="counter-kota"
                            class="text-4xl lg:text-5xl font-extrabold text-[#B9D4AA] block">0</span>
                        <p class="mt-1 text-sm lg:text-base text-blue-100/90">Prestasi Kota</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    {{-- Statistik Prestasi End --}}

    {{-- Navbar --}}
    <x-navbar />
    {{-- Navbar End --}}

    {{-- Main Start --}}
    <main class="bg-gradient-to-br from-emerald-50 via-green-50 to-teal-50 min-h-screen">
        <!-- Tentang Kami Section -->
        <section class="py-16 md:py-20 relative bg-gradient-to-br from-emerald-50 to-teal-50">
            <div class="container mx-auto px-4 md:px-8 lg:px-16">
                <div class="flex flex-col lg:flex-row items-center gap-8 lg:gap-16">
                    <div class="lg:w-1/2 w-full h-96 lg:h-[500px]" data-aos="fade-right">
                        <div class="relative h-full w-full rounded-2xl overflow-hidden shadow-2xl">
                            <img src="assets/tentang.png" alt="Tentang Sekolah"
                                class="w-full h-full object-cover transform hover:scale-105 transition duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/10 to-transparent"></div>
                        </div>
                    </div>

                    <!-- Konten Teks -->
                    <div class="lg:w-1/2 w-full" data-aos="fade-left">
                        <h2 class="text-3xl md:text-4xl font-bold text-emerald-600 mb-6">Sekilas Tentang Kami</h2>
                        <div class="h-1 w-20 bg-gradient-to-r from-emerald-500 to-teal-500 mb-6"></div>
                        <p class="text-gray-700 mb-6 leading-relaxed text-lg">
                            Selamat datang di SD Muhammadiyah Bausasran, sebuah institusi pendidikan yang berdedikasi
                            untuk menectak generasi penerus bangsa yang tidak hanya cemerlang secara akademis, tetapi
                            juga memiliki pondasi iman yang kokoh dan akhlak yang terpuji. Lebih dari sekadar sekolah,
                            kami adalah sebuah komunitas, sebuah keluarga besar yang berkomitmen untuk menjadi rumah
                            kedua yang aman dan inspiratif bagi setiap siswa.
                        </p>

                        <!-- Fitur Unggulan -->
                        <div class="space-y-5">
                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0 mt-1">
                                    <div
                                        class="w-10 h-10 bg-emerald-500 rounded-full flex items-center justify-center text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800">Pendidikan Berkualitas Tinggi</h3>
                                    <p class="text-gray-600 text-sm mt-1">Kurikulum terpadu yang mengintegrasikan ilmu
                                        pengetahuan dan nilai-nilai Islam</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0 mt-1">
                                    <div
                                        class="w-10 h-10 bg-emerald-500 rounded-full flex items-center justify-center text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800">Fasilitas Modern</h3>
                                    <p class="text-gray-600 text-sm mt-1">Ruang belajar nyaman dilengkapi teknologi
                                        pendidikan terkini</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0 mt-1">
                                    <div
                                        class="w-10 h-10 bg-emerald-500 rounded-full flex items-center justify-center text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800">Guru Berpengalaman</h3>
                                    <p class="text-gray-600 text-sm mt-1">Tenaga pendidik profesional dan berkompeten
                                        di bidangnya</p>
                                </div>
                            </div>
                        </div>

                        <!-- Tombol -->
                        <div class="mt-8">
                            <a href="#"
                                class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-emerald-500 to-teal-500 text-white font-semibold rounded-lg hover:from-emerald-600 hover:to-teal-600 transition duration-300 shadow-md">
                                <span>Pelajari Lebih Lanjut</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Guru Section -->
        <section class="py-16 md:py-20 bg-white">
            <div class="container mx-auto px-4 md:px-8 lg:px-16">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-emerald-600 mb-4">Guru & Tenaga Kependidikan</h2>
                    <div class="h-1 w-20 bg-gradient-to-r from-emerald-500 to-teal-500 mx-auto mb-6"></div>
                    <p class="text-gray-600 max-w-2xl mx-auto">Tim pengajar berpengalaman dan berdedikasi tinggi untuk
                        masa depan siswa</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                    @foreach ($guru as $index => $gurus)
                        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300 transform hover:-translate-y-2"
                            data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                            <div class="p-6 text-center">
                                <div
                                    class="relative mx-auto w-32 h-32 rounded-full overflow-hidden border-4 border-emerald-100 mb-4">
                                    <img src="{{ asset('storage/' . $gurus->foto) }}" alt="Foto {{ $gurus->nama }}"
                                        class="w-full h-full object-cover">
                                </div>
                                <h3 class="text-xl font-bold text-gray-800 mb-1">{{ $gurus->nama_lengkap }}</h3>
                                <p class="text-emerald-600 font-medium">{{ $gurus->jabatan }}</p>
                                <div class="mt-4 h-1 bg-gradient-to-r from-emerald-400 to-teal-400 w-1/2 mx-auto">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="text-center mt-12">
                    <a href="{{ route('struktur.gtk') }}"
                        class="inline-block bg-gradient-to-r from-emerald-500 to-teal-500 text-white font-bold px-8 py-3 rounded-full hover:from-emerald-600 hover:to-teal-600 transition duration-300 shadow-lg">
                        Lihat Semua Guru
                    </a>
                </div>
            </div>
        </section>

        <!-- Ekstrakurikuler Section -->
        <section class="py-16 md:py-20 bg-gradient-to-br from-emerald-50 to-teal-50">
            <div class="container mx-auto px-4 md:px-8 lg:px-16">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-emerald-600 mb-4">Ekstrakurikuler Unggulan</h2>
                    <div class="h-1 w-20 bg-gradient-to-r from-emerald-500 to-teal-500 mx-auto mb-6"></div>
                    <p class="text-gray-600 max-w-2xl mx-auto">Berbagai kegiatan untuk mengembangkan bakat dan minat
                        siswa</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach ($ekstra as $index => $ekskul)
                        <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition duration-300"
                            data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                            <div class="relative h-48 overflow-hidden">
                                <img src="{{ asset('storage/' . $ekskul->gambar) }}" alt="{{ $ekskul->nama }}"
                                    class="w-full h-full object-cover transition duration-500 hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $ekskul->nama }}</h3>
                                <p class="text-gray-600 text-sm">{{ Str::limit($ekskul->deskripsi, 100) }}</p>
                                <a href="#"
                                    class="mt-4 inline-block text-emerald-600 font-medium text-sm hover:text-emerald-700 transition duration-300">
                                    Selengkapnya →
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Galeri Section -->
        <section class="py-16 md:py-20 bg-white">
            <div class="container mx-auto px-4 md:px-8 lg:px-16">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-emerald-600 mb-4">Galeri Terbaru</h2>
                    <div class="h-1 w-20 bg-gradient-to-r from-emerald-500 to-teal-500 mx-auto mb-6"></div>
                    <p class="text-gray-600 max-w-2xl mx-auto">Dokumentasi kegiatan dan fasilitas sekolah</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                    @foreach ($galeriTerbaru as $index => $galeri)
                        <div class="group relative rounded-xl overflow-hidden shadow-md hover:shadow-xl transition duration-300"
                            data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                            <img src="{{ asset('storage/' . $galeri->gambar) }}" alt="{{ $galeri->judul }}"
                                class="w-full h-64 object-cover transition duration-500 group-hover:scale-110">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-6">
                                <div>
                                    <h3 class="text-white font-bold text-lg">{{ $galeri->judul }}</h3>
                                    <div class="h-1 w-12 bg-emerald-400 mt-2"></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="text-center mt-12">
                    <a href="{{ route('galeri.index') }}"
                        class="inline-block bg-gradient-to-r from-emerald-500 to-teal-500 text-white font-bold px-8 py-3 rounded-full hover:from-emerald-600 hover:to-teal-600 transition duration-300 shadow-lg">
                        Lihat Semua Galeri
                    </a>
                </div>
            </div>
        </section>

        <!-- Berita Section -->
        <section class="py-16 md:py-20 bg-gradient-to-br from-teal-50 to-emerald-50">
            <div class="container mx-auto px-4 md:px-8 lg:px-16">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-emerald-600 mb-4">Berita Terbaru</h2>
                    <div class="h-1 w-20 bg-gradient-to-r from-emerald-500 to-teal-500 mx-auto mb-6"></div>
                    <p class="text-gray-600 max-w-2xl mx-auto">Informasi dan kegiatan terkini dari sekolah</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($beritaTerbaru as $index => $berita)
                        <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition duration-300"
                            data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                            <div class="relative h-48 overflow-hidden">
                                <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}"
                                    class="w-full h-full object-cover transition duration-500 hover:scale-110">
                                <div class="absolute top-4 left-4">
                                    <span
                                        class="bg-emerald-500 text-white px-3 py-1 rounded-full text-xs font-bold">TERBARU</span>
                                </div>
                            </div>
                            <div class="p-6">
                                <h3
                                    class="text-xl font-bold text-gray-800 mb-3 hover:text-emerald-600 transition duration-300">
                                    {{ $berita->judul }}</h3>
                                <p class="text-gray-600 text-sm mb-4">
                                    {{ Str::limit(strip_tags($berita->konten), 120) }}</p>
                                <a href="#"
                                    class="text-emerald-600 font-medium text-sm hover:text-emerald-700 transition duration-300 flex items-center">
                                    Baca selengkapnya
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Testimoni Section -->
        <section class="py-16 md:py-20 bg-white">
            <div class="container mx-auto px-4 md:px-8 lg:px-16">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-emerald-600 mb-4">Apa Kata Wali Murid</h2>
                    <div class="h-1 w-20 bg-gradient-to-r from-emerald-500 to-teal-500 mx-auto mb-6"></div>
                    <p class="text-gray-600 max-w-2xl mx-auto">Testimoni dari para wali murid tentang pengalaman
                        pendidikan di sekolah kami</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($testimoni as $index => $testi)
                        <div class="bg-white rounded-xl p-8 shadow-md hover:shadow-xl transition duration-300 relative"
                            data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                            <div
                                class="absolute top-0 left-8 -translate-y-1/2 bg-emerald-500 w-10 h-10 rounded-full flex items-center justify-center text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z" />
                                    <path
                                        d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z" />
                                </svg>
                            </div>
                            <p class="text-gray-700 italic mb-6">"{{ $testi->pesan }}"</p>
                            <div class="border-t border-gray-200 pt-4">
                                <h4 class="font-bold text-emerald-600">{{ $testi->nama }}</h4>
                                <p class="text-gray-500 text-sm">{{ $testi->status }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-16 md:py-20 bg-gradient-to-r from-emerald-600 to-teal-600 text-white">
            <div class="container mx-auto px-4 md:px-8 lg:px-16 text-center">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">Siap Bergabung Dengan Kami?</h2>
                <p class="text-xl max-w-2xl mx-auto mb-8">Daftarkan putra/putri Anda sekarang untuk mendapatkan
                    pendidikan terbaik</p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#"
                        class="bg-white text-emerald-600 font-bold px-8 py-3 rounded-full hover:bg-gray-100 transition duration-300 shadow-lg">
                        Pendaftaran Online
                    </a>
                    <a href="#"
                        class="border-2 border-white text-white font-bold px-8 py-3 rounded-full hover:bg-white/10 transition duration-300">
                        Kunjungi Sekolah
                    </a>
                </div>
            </div>
        </section>
    </main>
    {{-- Main End --}}


    {{-- Footer Start --}}
    <x-footer/>
    {{-- Footer End --}}

    <script src="https://unpkg.com/boxicons@2.1.3/dist/boxicons.js"></script>
    <script src="js/nav.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/slider.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/swiper.js"></script>
    <script src="js/statistik.js"></script>

</body>

</html>
