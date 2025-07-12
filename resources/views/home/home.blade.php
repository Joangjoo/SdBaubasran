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
        <section class="py-16 md:py-20 relative overflow-hidden bg-gradient-to-br from-emerald-50 to-teal-50">
            <div class="absolute inset-0 overflow-hidden z-0">
                <div
                    class="absolute top-20 left-10 w-40 h-40 rounded-full bg-emerald-100 opacity-20 blur-xl animate-float-slow">
                </div>
                <div
                    class="absolute bottom-1/4 right-20 w-60 h-60 rounded-full bg-teal-100 opacity-15 blur-xl animate-float-medium">
                </div>
                <div
                    class="absolute top-1/3 right-1/4 w-80 h-80 rounded-full bg-emerald-50 opacity-10 blur-xl animate-float-slow">
                </div>
                <div class="absolute inset-0 opacity-10"
                    style="background-image: 
            radial-gradient(circle at 1px 1px, #06923E 1px, transparent 0); 
            background-size: 30px 30px;">
                </div>
                <div class="absolute inset-0 opacity-5"
                    style="background: 
            repeating-linear-gradient(
                45deg,
                rgba(6, 146, 62, 0.1),
                rgba(6, 146, 62, 0.1) 5px,
                transparent 5px,
                transparent 10px
            )">
                </div>
            </div>
            <div class="container mx-auto px-4 md:px-8 lg:px-16 relative z-10">
                <div class="flex flex-col lg:flex-row items-center gap-8 lg:gap-16">
                    <div class="lg:w-1/2 w-full h-96 lg:h-[500px]" data-aos="fade-right">
                        <div class="relative h-full w-full rounded-2xl overflow-hidden shadow-2xl ">
                            <img src="assets/tentang.png" alt="Tentang Sekolah"
                                class="w-full h-full object-cover transform hover:scale-105 transition duration-500 ease-out">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/10 to-transparent"></div>
                            <div
                                class="absolute -bottom-2 -right-2 w-16 h-16 bg-emerald-500 rounded-tl-full opacity-20">
                            </div>
                            <div class="absolute -top-2 -left-2 w-12 h-12 bg-teal-400 rounded-br-full opacity-20"></div>
                        </div>
                    </div>
                    <div class="lg:w-1/2 w-full" data-aos="fade-left">
                        <div class="relative bg-white/30 backdrop-blur-sm p-8 rounded-xl shadow-lg">
                            <div
                                class="absolute -top-6 -left-6 w-12 h-12 bg-teal-200 rounded-full opacity-30 animate-pulse">
                            </div>
                            <div
                                class="absolute -bottom-6 -right-6 w-16 h-16 bg-emerald-300 rounded-full opacity-20 animate-pulse">
                            </div>

                            <h2 class="text-3xl md:text-4xl font-bold text-emerald-600 mb-6 relative z-10">
                                Sekilas Tentang Kami
                                <span
                                    class="absolute bottom-0 left-0 w-16 h-1 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-full"></span>
                            </h2>

                            <p class="text-gray-700 mb-6 leading-relaxed text-lg relative z-10">
                                Selamat datang di SD Muhammadiyah Bausasran, sebuah institusi pendidikan yang
                                berdedikasi
                                untuk menectak generasi penerus bangsa yang tidak hanya cemerlang secara akademis,
                                tetapi
                                juga memiliki pondasi iman yang kokoh dan akhlak yang terpuji. Lebih dari sekadar
                                sekolah,
                                kami adalah sebuah komunitas, sebuah keluarga besar yang berkomitmen untuk menjadi rumah
                                kedua yang aman dan inspiratif bagi setiap siswa.
                            </p>
                            <div class="space-y-5 relative z-10">
                                <div
                                    class="flex items-start gap-4 bg-white/70 p-4 rounded-lg shadow-sm hover:shadow-md transition duration-300">
                                    <div class="flex-shrink-0 mt-1">
                                        <div
                                            class="w-10 h-10 bg-gradient-to-br from-emerald-500 to-teal-500 rounded-full flex items-center justify-center text-white shadow-md transform hover:rotate-12 transition duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path
                                                    d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-gray-800">Pendidikan Berkualitas Tinggi</h3>
                                        <p class="text-gray-600 text-sm mt-1">Kurikulum terpadu yang mengintegrasikan
                                            ilmu pengetahuan dan nilai-nilai Islam</p>
                                    </div>
                                </div>

                                <div
                                    class="flex items-start gap-4 bg-white/70 p-4 rounded-lg shadow-sm hover:shadow-md transition duration-300">
                                    <div class="flex-shrink-0 mt-1">
                                        <div
                                            class="w-10 h-10 bg-gradient-to-br from-emerald-500 to-teal-500 rounded-full flex items-center justify-center text-white shadow-md transform hover:rotate-12 transition duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
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

                                <div
                                    class="flex items-start gap-4 bg-white/70 p-4 rounded-lg shadow-sm hover:shadow-md transition duration-300">
                                    <div class="flex-shrink-0 mt-1">
                                        <div
                                            class="w-10 h-10 bg-gradient-to-br from-emerald-500 to-teal-500 rounded-full flex items-center justify-center text-white shadow-md transform hover:rotate-12 transition duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-gray-800">Guru Berpengalaman</h3>
                                        <p class="text-gray-600 text-sm mt-1">Tenaga pendidik profesional dan
                                            berkompeten di bidangnya</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-8 relative z-10">
                                <a href="{{ route('tentangkami.index') }}"
                                    class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-emerald-500 to-teal-500 text-white font-semibold rounded-lg hover:from-emerald-600 hover:to-teal-600 transition duration-300 shadow-md hover:shadow-lg relative overflow-hidden group">
                                    <span class="relative z-10">Lihat Selengkapnya</span>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-5 w-5 ml-2 relative z-10 transform group-hover:translate-x-1 transition duration-300"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span
                                        class="absolute inset-0 bg-gradient-to-r from-emerald-600 to-teal-600 opacity-0 group-hover:opacity-100 transition duration-300 z-0"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="absolute bottom-0 left-0 right-0 h-20 overflow-hidden">
                <div
                    class="absolute bottom-0 left-0 right-0 h-20 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMjAwIDEyMCI+PHBhdGggZmlsbD0iI2ZmZmZmZiIgZmlsbC1vcGFjaXR5PSIwLjEiIGQ9Ik0wIDY0YzE2MC0zMyAzMjAgMzMgNDgwIDBzMzIwLTk5IDQ4MCAwIDMyMCAxMzIgNDgwIDB2NjBIMHoiLz48L3N2Zz4=')] bg-repeat-x bg-[length:1200px_100px] opacity-30 animate-wave-slow">
                </div>
            </div>
        </section>

        <!-- Guru Section -->
        <section class="relative py-16 md:py-20 bg-gradient-to-br from-emerald-50 to-teal-50 overflow-hidden">
            <!-- Background Pattern -->
            <div class="absolute inset-0 pattern-dots opacity-30"></div>

            <!-- Floating Background Elements -->
            <div class="absolute inset-0 overflow-hidden">
                <!-- Large Floating Circles -->
                <div
                    class="absolute top-10 left-10 w-32 h-32 bg-emerald-200 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-float">
                </div>
                <div
                    class="absolute top-20 right-20 w-40 h-40 bg-teal-200 rounded-full mix-blend-multiply filter blur-xl opacity-25 animate-float-delay">
                </div>
                <div
                    class="absolute bottom-20 left-1/4 w-36 h-36 bg-emerald-300 rounded-full mix-blend-multiply filter blur-xl opacity-15 animate-float-delay-2">
                </div>
                <div
                    class="absolute bottom-10 right-1/3 w-28 h-28 bg-teal-300 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-float">
                </div>

                <!-- Medium Floating Elements -->
                <div
                    class="absolute top-1/3 left-1/2 w-24 h-24 bg-emerald-100 rounded-full opacity-30 animate-float-reverse">
                </div>
                <div
                    class="absolute top-2/3 right-1/4 w-20 h-20 bg-teal-100 rounded-full opacity-25 animate-float-delay">
                </div>
                <div
                    class="absolute top-1/2 left-1/4 w-16 h-16 bg-emerald-200 rounded-full opacity-35 animate-float-delay-2">
                </div>

                <!-- Small Decorative Elements -->
                <div class="absolute top-16 left-1/3 w-3 h-3 bg-emerald-400 rounded-full animate-pulse-slow"></div>
                <div class="absolute top-32 right-1/2 w-2 h-2 bg-teal-400 rounded-full animate-pulse-slow"
                    style="animation-delay: 1s;"></div>
                <div class="absolute bottom-32 left-1/2 w-4 h-4 bg-emerald-500 rounded-full animate-pulse-slow"
                    style="animation-delay: 2s;"></div>
                <div class="absolute bottom-16 right-1/3 w-3 h-3 bg-teal-500 rounded-full animate-pulse-slow"
                    style="animation-delay: 3s;"></div>

                <!-- Geometric Shapes -->
                <div
                    class="absolute top-1/4 right-1/3 w-12 h-12 border-2 border-emerald-300 opacity-20 animate-rotate-slow">
                    <div class="w-full h-full border border-emerald-400 transform rotate-45"></div>
                </div>
                <div class="absolute bottom-1/4 left-1/3 w-10 h-10 border-2 border-teal-300 opacity-25 animate-rotate-slow"
                    style="animation-delay: -10s;">
                    <div class="w-full h-full border border-teal-400 transform rotate-45"></div>
                </div>

                <!-- Wavy Lines -->
                <div class="absolute top-1/2 left-0 w-full h-1 opacity-10">
                    <svg class="w-full h-full" viewBox="0 0 1200 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 10 Q300 5 600 10 T1200 10" stroke="currentColor" stroke-width="2" fill="none"
                            class="text-emerald-400" />
                    </svg>
                </div>
                <div class="absolute top-1/3 left-0 w-full h-1 opacity-10">
                    <svg class="w-full h-full" viewBox="0 0 1200 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 10 Q300 15 600 10 T1200 10" stroke="currentColor" stroke-width="2" fill="none"
                            class="text-teal-400" />
                    </svg>
                </div>
            </div>

            <!-- Content -->
            <div class="container mx-auto px-4 md:px-8 lg:px-16 relative z-10">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-emerald-600 mb-4">Guru & Tenaga Kependidikan</h2>
                    <div class="h-1 w-20 bg-gradient-to-r from-emerald-500 to-teal-500 mx-auto mb-6"></div>
                    <p class="text-gray-600 max-w-2xl mx-auto">Tim pengajar berpengalaman dan berdedikasi tinggi untuk
                        masa depan siswa</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                    @foreach ($guru as $index => $gurus)
                        <div class="bg-white/80 backdrop-blur-sm rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300 transform hover:-translate-y-2 border border-white/50"
                            data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                            <div class="p-6 text-center">
                                <div
                                    class="relative mx-auto w-32 h-32 rounded-full overflow-hidden border-4 border-emerald-100 mb-4 shadow-lg">
                                    <img src="{{ asset('storage/' . $gurus->foto) }}" alt="Foto {{ $gurus->nama }}"
                                        class="w-full h-full object-cover">
                                    <!-- Subtle overlay on hover -->
                                    <div
                                        class="absolute inset-0 bg-gradient-to-br from-emerald-400/20 to-teal-400/20 opacity-0 hover:opacity-100 transition-opacity duration-300">
                                    </div>
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
                        class="inline-block bg-gradient-to-r from-emerald-500 to-teal-500 text-white font-bold px-8 py-3 rounded-full hover:from-emerald-600 hover:to-teal-600 transition duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        Lihat Semua Guru
                    </a>
                </div>
            </div>
        </section>

        <!-- Ekstrakurikuler Section -->
        <section class="relative py-16 md:py-20 bg-gradient-to-br from-emerald-50 to-teal-50 overflow-hidden">
            <!-- Background Pattern -->
            <div class="absolute inset-0 pattern-hexagon opacity-40"></div>
            <div class="absolute inset-0 pattern-waves opacity-20"></div>

            <!-- Floating Background Elements -->
            <div class="absolute inset-0 overflow-hidden">
                <!-- Large Decorative Circles -->
                <div
                    class="absolute top-16 left-8 w-40 h-40 bg-emerald-200 rounded-full mix-blend-multiply filter blur-2xl opacity-25 animate-float">
                </div>
                <div
                    class="absolute top-32 right-16 w-48 h-48 bg-teal-200 rounded-full mix-blend-multiply filter blur-2xl opacity-20 animate-float-delay">
                </div>
                <div
                    class="absolute bottom-24 left-1/4 w-36 h-36 bg-emerald-300 rounded-full mix-blend-multiply filter blur-2xl opacity-30 animate-float-delay-2">
                </div>
                <div
                    class="absolute bottom-16 right-1/3 w-32 h-32 bg-teal-300 rounded-full mix-blend-multiply filter blur-2xl opacity-25 animate-float-delay-3">
                </div>

                <!-- Medium Floating Elements -->
                <div
                    class="absolute top-1/4 left-1/3 w-24 h-24 bg-gradient-to-br from-emerald-100 to-teal-100 rounded-full opacity-40 animate-float-reverse">
                </div>
                <div
                    class="absolute top-2/3 right-1/5 w-28 h-28 bg-gradient-to-br from-teal-100 to-emerald-100 rounded-full opacity-35 animate-float-delay">
                </div>
                <div
                    class="absolute top-1/2 left-1/5 w-20 h-20 bg-gradient-to-br from-emerald-200 to-teal-200 rounded-full opacity-45 animate-float-delay-2">
                </div>

                <!-- Activity-themed Icons as Background -->
                <div class="absolute top-20 right-1/4 w-16 h-16 opacity-10 animate-bounce-slow">
                    <svg class="w-full h-full text-emerald-400" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                    </svg>
                </div>
                <div class="absolute bottom-32 left-1/6 w-12 h-12 opacity-15 animate-bounce-slow"
                    style="animation-delay: 2s;">
                    <svg class="w-full h-full text-teal-400" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                    </svg>
                </div>
                <div class="absolute top-1/3 right-1/6 w-14 h-14 opacity-12 animate-bounce-slow"
                    style="animation-delay: 4s;">
                    <svg class="w-full h-full text-emerald-500" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M9 11H7v3H5v-3H3v-1h2V7h2v3h2v1zm4 0h3v3h2v-3h3v-1h-3V7h-2v3h-3v1z" />
                    </svg>
                </div>

                <!-- Small Sparkle Elements -->
                <div class="absolute top-24 left-1/2 w-3 h-3 bg-emerald-400 rounded-full animate-pulse-slow"></div>
                <div class="absolute top-40 right-1/3 w-2 h-2 bg-teal-400 rounded-full animate-pulse-slow"
                    style="animation-delay: 1s;"></div>
                <div class="absolute bottom-40 left-1/4 w-4 h-4 bg-emerald-500 rounded-full animate-pulse-slow"
                    style="animation-delay: 2s;"></div>
                <div class="absolute bottom-24 right-1/4 w-3 h-3 bg-teal-500 rounded-full animate-pulse-slow"
                    style="animation-delay: 3s;"></div>
                <div class="absolute top-1/2 left-2/3 w-2 h-2 bg-emerald-400 rounded-full animate-pulse-slow"
                    style="animation-delay: 4s;"></div>

                <!-- Geometric Shapes -->
                <div
                    class="absolute top-1/3 left-1/4 w-16 h-16 border-2 border-emerald-300 opacity-20 animate-rotate-slow">
                    <div class="w-full h-full border border-emerald-400 transform rotate-45 rounded-lg"></div>
                </div>
                <div class="absolute bottom-1/3 right-1/4 w-12 h-12 border-2 border-teal-300 opacity-25 animate-rotate-slow"
                    style="animation-delay: -15s;">
                    <div class="w-full h-full border border-teal-400 transform rotate-45 rounded-lg"></div>
                </div>

                <!-- Floating Rectangles -->
                <div
                    class="absolute top-1/4 right-1/3 w-8 h-16 bg-emerald-200 opacity-20 animate-slide-horizontal rounded-lg">
                </div>
                <div class="absolute bottom-1/4 left-1/3 w-12 h-8 bg-teal-200 opacity-25 animate-slide-horizontal rounded-lg"
                    style="animation-delay: -6s;"></div>

                <!-- Curved Lines -->
                <div class="absolute top-1/2 left-0 w-full h-1 opacity-8">
                    <svg class="w-full h-full" viewBox="0 0 1200 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 10 Q300 2 600 10 T1200 10" stroke="currentColor" stroke-width="3" fill="none"
                            class="text-emerald-400" />
                    </svg>
                </div>
                <div class="absolute top-1/3 left-0 w-full h-1 opacity-8">
                    <svg class="w-full h-full" viewBox="0 0 1200 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 10 Q300 18 600 10 T1200 10" stroke="currentColor" stroke-width="3" fill="none"
                            class="text-teal-400" />
                    </svg>
                </div>

                <!-- Additional Activity Elements -->
                <div class="absolute top-12 left-1/3 w-6 h-6 opacity-15 animate-float">
                    <svg class="w-full h-full text-emerald-400" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z" />
                    </svg>
                </div>
                <div class="absolute bottom-12 right-1/3 w-8 h-8 opacity-12 animate-float-delay">
                    <svg class="w-full h-full text-teal-400" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                    </svg>
                </div>
            </div>

            <!-- Content -->
            <div class="container mx-auto px-4 md:px-8 lg:px-16 relative z-10">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-emerald-600 mb-4">Ekstrakurikuler Unggulan</h2>
                    <div class="h-1 w-20 bg-gradient-to-r from-emerald-500 to-teal-500 mx-auto mb-6"></div>
                    <p class="text-gray-600 max-w-2xl mx-auto">Berbagai kegiatan untuk mengembangkan bakat dan minat
                        siswa</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach ($ekstra as $index => $ekskul)
                        <div class="glass-effect rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 hover:scale-105 border border-white/30"
                            data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                            <div class="relative h-48 overflow-hidden">
                                <img src="{{ asset('storage/' . $ekskul->gambar) }}" alt="{{ $ekskul->nama }}"
                                    class="w-full h-full object-cover transition duration-500 hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                                <!-- Floating Icon on Image -->
                                <div
                                    class="absolute top-4 right-4 w-8 h-8 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $ekskul->nama }}</h3>
                                <p class="text-gray-600 text-sm mb-4">{{ Str::limit($ekskul->deskripsi, 100) }}</p>
                                <a href="#"
                                    class="inline-flex items-center text-emerald-600 font-medium text-sm hover:text-emerald-700 transition duration-300 group">
                                    Selengkapnya
                                    <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform duration-300"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
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

        <!-- Galeri Section -->
        <section class="relative py-16 md:py-20 bg-gradient-to-br from-emerald-50 to-teal-50 overflow-hidden">
            <!-- Floating Background Elements (sama seperti Ekstrakurikuler) -->
            <div class="absolute inset-0 overflow-hidden">
                <div
                    class="absolute top-1/4 left-1/4 w-72 h-72 bg-emerald-200 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-pulse">
                </div>
                <div
                    class="absolute top-3/4 left-2/3 w-80 h-80 bg-teal-200 rounded-full mix-blend-multiply filter blur-2xl opacity-30 animate-pulse">
                </div>
                <div
                    class="absolute top-1/3 right-1/4 w-72 h-72 bg-green-200 rounded-full mix-blend-multiply filter blur-2xl opacity-20 animate-pulse">
                </div>

                <svg class="absolute top-0 left-0 transform scale-150 opacity-20" width="100%" height="100%">
                    <defs>
                        <pattern id="pattern-dots" x="0" y="0" width="20" height="20"
                            patternUnits="userSpaceOnUse">
                            <circle cx="1" cy="1" r="1" fill="#4ade80"></circle>
                        </pattern>
                    </defs>
                    <rect width="100%" height="100%" fill="url(#pattern-dots)" />
                </svg>
            </div>

            <!-- Konten Galeri -->
            <div class="relative z-10 container mx-auto px-4 md:px-8 lg:px-16">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-emerald-600 mb-4">Galeri Terbaru</h2>
                    <div class="h-1 w-20 bg-gradient-to-r from-emerald-500 to-teal-500 mx-auto mb-6"></div>
                    <p class="text-gray-600 max-w-2xl mx-auto">Dokumentasi kegiatan dan fasilitas sekolah</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                    @foreach ($galeriTerbaru as $index => $galeri)
                        <div class="bg-white/30 backdrop-blur-md border border-white/30 rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 hover:scale-105"
                            data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                            <div class="relative h-64 overflow-hidden">
                                <img src="{{ asset('storage/' . $galeri->gambar) }}" alt="{{ $galeri->judul }}"
                                    class="w-full h-full object-cover transition duration-500 hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                            </div>
                            <div class="p-5">
                                <h3 class="text-lg font-bold text-gray-800 mb-1">{{ $galeri->judul }}</h3>
                                <div class="h-1 w-12 bg-emerald-400 mb-2"></div>
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
        <section class="relative py-16 md:py-20 bg-gradient-to-br from-teal-50 to-emerald-50 overflow-hidden">
            <!-- Floating Background Elements -->
            <div class="absolute inset-0 overflow-hidden pointer-events-none">
                <div
                    class="absolute top-1/4 left-1/4 w-72 h-72 bg-teal-200 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-pulse">
                </div>
                <div
                    class="absolute top-3/4 left-2/3 w-80 h-80 bg-emerald-200 rounded-full mix-blend-multiply filter blur-2xl opacity-30 animate-pulse">
                </div>
                <div
                    class="absolute top-1/3 right-1/4 w-72 h-72 bg-green-100 rounded-full mix-blend-multiply filter blur-2xl opacity-20 animate-pulse">
                </div>

                <svg class="absolute top-0 left-0 transform scale-150 opacity-10" width="100%" height="100%">
                    <defs>
                        <pattern id="dots-pattern" x="0" y="0" width="20" height="20"
                            patternUnits="userSpaceOnUse">
                            <circle cx="1" cy="1" r="1" fill="#10b981" />
                        </pattern>
                    </defs>
                    <rect width="100%" height="100%" fill="url(#dots-pattern)" />
                </svg>
            </div>

            <!-- Konten Berita -->
            <div class="container relative z-10 mx-auto px-4 md:px-8 lg:px-16">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-emerald-600 mb-4">Berita Terbaru</h2>
                    <div class="h-1 w-20 bg-gradient-to-r from-emerald-500 to-teal-500 mx-auto mb-6"></div>
                    <p class="text-gray-600 max-w-2xl mx-auto">Informasi dan kegiatan terkini dari sekolah</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($beritaTerbaru as $index => $berita)
                        <div class="bg-white/30 backdrop-blur-md border border-white/30 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition duration-300 transform hover:-translate-y-2 hover:scale-105"
                            data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                            <div class="relative h-48 overflow-hidden">
                                <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}"
                                    class="w-full h-full object-cover transition duration-500 hover:scale-110">
                                <div class="absolute top-4 left-4">
                                    <span
                                        class="bg-emerald-500 text-white px-3 py-1 rounded-full text-xs font-bold">TERBARU</span>
                                </div>
                                <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                            </div>
                            <div class="p-6">
                                <h3
                                    class="text-xl font-bold text-gray-800 mb-3 hover:text-emerald-600 transition duration-300">
                                    {{ $berita->judul }}
                                </h3>
                                <p class="text-gray-600 text-sm mb-4">
                                    {{ Str::limit(strip_tags($berita->konten), 120) }}
                                </p>
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
        <section class="relative py-16 md:py-20 bg-gradient-to-br from-white to-emerald-50 overflow-hidden">
            <!-- Floating Background Elements -->
            <div class="absolute inset-0 overflow-hidden pointer-events-none">
                <div
                    class="absolute top-1/4 left-1/3 w-72 h-72 bg-teal-200 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-pulse">
                </div>
                <div
                    class="absolute bottom-0 left-1/4 w-80 h-80 bg-emerald-100 rounded-full mix-blend-multiply filter blur-2xl opacity-30 animate-pulse">
                </div>
                <div
                    class="absolute top-1/2 right-1/4 w-72 h-72 bg-green-100 rounded-full mix-blend-multiply filter blur-2xl opacity-20 animate-pulse">
                </div>

                <svg class="absolute top-0 left-0 transform scale-150 opacity-10" width="100%" height="100%">
                    <defs>
                        <pattern id="testimonial-dots" x="0" y="0" width="20" height="20"
                            patternUnits="userSpaceOnUse">
                            <circle cx="1" cy="1" r="1" fill="#10b981" />
                        </pattern>
                    </defs>
                    <rect width="100%" height="100%" fill="url(#testimonial-dots)" />
                </svg>
            </div>

            <!-- Konten Testimoni -->
            <div class="relative z-10 container mx-auto px-4 md:px-8 lg:px-16">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-emerald-600 mb-4">Apa Kata Wali Murid</h2>
                    <div class="h-1 w-20 bg-gradient-to-r from-emerald-500 to-teal-500 mx-auto mb-6"></div>
                    <p class="text-gray-600 max-w-2xl mx-auto">Testimoni dari para wali murid tentang pengalaman
                        pendidikan di sekolah kami</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($testimoni as $index => $testi)
                        <div class="bg-white/30 backdrop-blur-md border border-white/30 rounded-xl p-8 shadow-md hover:shadow-xl transition duration-300 transform hover:-translate-y-2 hover:scale-105 relative"
                            data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                            <div
                                class="absolute top-0 left-8 -translate-y-1/2 bg-emerald-500 w-10 h-10 rounded-full flex items-center justify-center text-white shadow-md">
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

    </main>
    {{-- Main End --}}


    {{-- Footer Start --}}
    <x-footer />
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
