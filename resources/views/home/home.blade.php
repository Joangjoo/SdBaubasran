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
    <x-header />

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
                    <span class="text-[#FF6F00]">Selamat Datang</span> di SD Muhammadiyah <span
                        class="text-[#FF6F00]">Bausasran</span>
                </h1>
                <p class="text-lg text-white/90">
                    Sekolah unggulan dengan pendidikan berbasis akhlak mulia, prestasi, dan teknologi.
                </p>
            </div>
        </div>
    </section>
    {{-- Section Selamat Datang End --}}



    {{-- Navbar --}}
    <x-navbar />
    {{-- Navbar End --}}

    {{-- Main Start --}}
    <main class="bg-gradient-to-br from-blue-50 via-blue-100 to-blue-200">
        <section class="py-16 md:py-24 relative overflow-hidden bg-gradient-to-br from-blue-50 via-sky-100 to-blue-200">
            <div class="absolute inset-0 overflow-hidden z-0">
                <div
                    class="absolute top-20 left-10 w-40 h-40 rounded-full bg-blue-200 opacity-20 blur-xl animate-float-slow">
                </div>
                <div
                    class="absolute bottom-1/4 right-20 w-60 h-60 rounded-full bg-sky-100 opacity-15 blur-xl animate-float-medium">
                </div>
                <div
                    class="absolute top-1/3 right-1/4 w-80 h-80 rounded-full bg-blue-50 opacity-10 blur-xl animate-float-slow">
                </div>
                <div class="absolute inset-0 opacity-10"
                    style="background-image: radial-gradient(circle at 1px 1px, #3b82f6 1px, transparent 0);
                    background-size: 30px 30px;">
                </div>
                <div class="absolute inset-0 opacity-5"
                    style="background: repeating-linear-gradient(45deg, rgba(59, 130, 246, 0.1), rgba(59, 130, 246, 0.1) 5px, transparent 5px, transparent 10px)">
                </div>
            </div>

            <div class="container mx-auto px-4 md:px-8 lg:px-16 relative z-10">
                <div class="max-w-4xl mx-auto">
                    <div
                        class="relative bg-white/30 backdrop-blur-md p-8 md:p-10 rounded-2xl shadow-xl border border-white/20">
                        <div
                            class="absolute -top-5 -left-5 w-14 h-14 bg-blue-200 rounded-full opacity-30 animate-pulse">
                        </div>
                        <div
                            class="absolute -bottom-5 -right-5 w-16 h-16 bg-sky-300 rounded-full opacity-20 animate-pulse">
                        </div>
                        <div class="absolute top-0 right-10 w-24 h-24 bg-blue-400 rounded-full opacity-10 blur-lg">
                        </div>

                        <div class="mb-8 text-center relative z-10">
                            <span class="text-blue-500 font-semibold tracking-wider">PROFIL SEKOLAH</span>
                            <h2 class="text-3xl md:text-4xl font-bold text-blue-800 mt-2">
                                Mengenal Lebih Dekat <span class="text-blue-600">Sekolah Kami</span>
                            </h2>
                            <div class="w-20 h-1.5 bg-gradient-to-r from-blue-400 to-sky-400 rounded-full mt-4 mx-auto">
                            </div>
                        </div>
                        <p
                            class="text-gray-700 mb-8 leading-relaxed text-lg relative z-10 text-center max-w-3xl mx-auto">
                            SD Muhammadiyah Bausasran hadir sebagai institusi pendidikan unggulan yang memadukan
                            keunggulan akademik dengan pembentukan karakter islami. Dengan lingkungan belajar yang
                            inspiratif dan fasilitas modern, kami berkomitmen menumbuhkan generasi yang cerdas, kreatif,
                            dan berakhlak mulia.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-5 mb-10 items-center relative z-10">
                            <div
                                class="md:col-start-2 bg-white/70 p-5 rounded-xl shadow-sm text-center border border-white/50">
                                <div class="text-3xl font-bold text-blue-600 mb-1">25+</div>
                                <div class="text-sm text-gray-600">Guru Berpengalaman</div>
                            </div>

                            <div class="bg-white/70 p-5 rounded-xl shadow-sm text-center border border-white/50">
                                <div class="text-3xl font-bold text-blue-600 mb-1">10+</div>
                                <div class="text-sm text-gray-600">Program Unggulan</div>
                            </div>

                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-10 relative z-10">
                            <div
                                class="bg-white/70 p-5 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 border border-white/50">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-10 h-10 bg-gradient-to-br from-blue-500 to-sky-500 rounded-lg flex items-center justify-center text-white shadow-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path
                                                d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                                        </svg>
                                    </div>
                                    <h3 class="font-semibold text-blue-800">Kurikulum Integratif</h3>
                                </div>
                                <p class="text-gray-600 text-sm mt-3">Menggabungkan kurikulum nasional dengan
                                    nilai-nilai Islam secara harmonis</p>
                            </div>

                            <div
                                class="bg-white/70 p-5 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 border border-white/50">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-10 h-10 bg-gradient-to-br from-blue-500 to-sky-500 rounded-lg flex items-center justify-center text-white shadow-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <h3 class="font-semibold text-blue-800">Fasilitas Digital</h3>
                                </div>
                                <p class="text-gray-600 text-sm mt-3">Ruang belajar berbasis teknologi untuk pengalaman
                                    belajar optimal</p>
                            </div>

                            <div
                                class="bg-white/70 p-5 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 border border-white/50">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-10 h-10 bg-gradient-to-br from-blue-500 to-sky-500 rounded-lg flex items-center justify-center text-white shadow-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <h3 class="font-semibold text-blue-800">Guru Profesional</h3>
                                </div>
                                <p class="text-gray-600 text-sm mt-3">Tenaga pendidik berpengalaman dan bersertifikasi
                                </p>
                            </div>

                            <div
                                class="bg-white/70 p-5 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 border border-white/50">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-10 h-10 bg-gradient-to-br from-blue-500 to-sky-500 rounded-lg flex items-center justify-center text-white shadow-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path
                                                d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v1h8v-1zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-1a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v1h-3zM4.75 12.094A5.973 5.973 0 004 15v1H1v-1a3 3 0 013.75-2.906z" />
                                        </svg>
                                    </div>
                                    <h3 class="font-semibold text-blue-800">Komunitas Solid</h3>
                                </div>
                                <p class="text-gray-600 text-sm mt-3">Lingkungan sosial yang mendukung perkembangan
                                    siswa</p>
                            </div>
                        </div>

                        <div class="text-center relative z-10">
                            <a href="{{ route('tentangkami.index') }}"
                                class="inline-flex items-center px-6 py-3.5 bg-gradient-to-r from-blue-600 to-sky-500 text-white font-semibold rounded-xl hover:from-blue-700 hover:to-sky-600 transition duration-300 shadow-lg hover:shadow-xl group relative overflow-hidden">
                                <span class="relative z-10">Jelajahi Sekolah Kami</span>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 ml-2 relative z-10 transform group-hover:translate-x-1 transition duration-300"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span
                                    class="absolute inset-0 bg-gradient-to-r from-blue-700 to-sky-600 opacity-0 group-hover:opacity-100 transition duration-300 z-0"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="absolute bottom-0 left-0 right-0 h-24 overflow-hidden">
                <div
                    class="absolute bottom-0 left-0 right-0 h-24 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMjAwIDEyMCI+PHBhdGggZmlsbD0iI2ZmZmZmZiIgZD0iTTAgNjRjMTYwLTMzIDMyMCAzMyA0ODAgMHMzMjAtOTkgNDgwIDAgMzIwIDEzMiA0ODAgMHY2MEgweiIvPjwvc3ZnPg==')] bg-repeat-x bg-[length:1200px_120px] opacity-20 animate-wave-slow">
                </div>
            </div>
        </section>

        <!-- Guru Section -->
        <section
            class="relative py-16 md:py-20 bg-gradient-to-br from-blue-50 via-sky-100 to-blue-200 overflow-hidden">
            <div class="absolute inset-0 opacity-10"
                style="background-image: radial-gradient(circle at 1px 1px, #3b82f6 1px, transparent 0); 
                background-size: 30px 30px;">
            </div>

            <div class="absolute inset-0 overflow-hidden">
                <div
                    class="absolute top-10 left-10 w-32 h-32 bg-blue-200 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-float">
                </div>
                <div
                    class="absolute top-20 right-20 w-40 h-40 bg-sky-200 rounded-full mix-blend-multiply filter blur-xl opacity-25 animate-float-delay">
                </div>
                <div
                    class="absolute bottom-20 left-1/4 w-36 h-36 bg-blue-300 rounded-full mix-blend-multiply filter blur-xl opacity-15 animate-float-delay-2">
                </div>
                <div
                    class="absolute bottom-10 right-1/3 w-28 h-28 bg-sky-300 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-float">
                </div>

                <div
                    class="absolute top-1/3 left-1/2 w-24 h-24 bg-blue-100 rounded-full opacity-30 animate-float-reverse">
                </div>
                <div
                    class="absolute top-2/3 right-1/4 w-20 h-20 bg-sky-100 rounded-full opacity-25 animate-float-delay">
                </div>
                <div
                    class="absolute top-1/2 left-1/4 w-16 h-16 bg-blue-200 rounded-full opacity-35 animate-float-delay-2">
                </div>

                <div class="absolute top-16 left-1/3 w-3 h-3 bg-blue-400 rounded-full animate-pulse-slow"></div>
                <div class="absolute top-32 right-1/2 w-2 h-2 bg-sky-400 rounded-full animate-pulse-slow"
                    style="animation-delay: 1s;"></div>
                <div class="absolute bottom-32 left-1/2 w-4 h-4 bg-blue-500 rounded-full animate-pulse-slow"
                    style="animation-delay: 2s;"></div>
                <div class="absolute bottom-16 right-1/3 w-3 h-3 bg-sky-500 rounded-full animate-pulse-slow"
                    style="animation-delay: 3s;"></div>

                <div
                    class="absolute top-1/4 right-1/3 w-12 h-12 border-2 border-blue-300 opacity-20 animate-rotate-slow">
                    <div class="w-full h-full border border-blue-400 transform rotate-45"></div>
                </div>
                <div class="absolute bottom-1/4 left-1/3 w-10 h-10 border-2 border-sky-300 opacity-25 animate-rotate-slow"
                    style="animation-delay: -10s;">
                    <div class="w-full h-full border border-sky-400 transform rotate-45"></div>
                </div>
            </div>

            <div class="container mx-auto px-4 md:px-8 lg:px-16 relative z-10">
                <div class="text-center mb-12" data-aos="fade-up">
                    <span class="text-blue-500 font-semibold tracking-wider">TIM PENGAJAR</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-blue-800 mt-2 mb-4">
                        Guru <span class="text-blue-600">Profesional</span> Kami
                    </h2>
                    <div class="h-1.5 w-20 bg-gradient-to-r from-blue-400 to-sky-400 rounded-full mx-auto mb-6"></div>
                    <p class="text-gray-600 max-w-2xl mx-auto text-lg">Tim pengajar berpengalaman dan berdedikasi
                        tinggi untuk membentuk masa depan siswa yang gemilang</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    @foreach ($guru as $index => $gurus)
                        <div class="bg-white/80 backdrop-blur-sm rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-white/50"
                            data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                            <div class="p-6 text-center">
                                <div
                                    class="relative mx-auto w-32 h-32 rounded-full overflow-hidden border-4 border-blue-100 mb-4 shadow-lg">
                                    <img src="{{ asset('storage/' . $gurus->foto) }}" alt="Foto {{ $gurus->nama }}"
                                        class="w-full h-full object-cover">
                                    <!-- Subtle overlay on hover -->
                                    <div
                                        class="absolute inset-0 bg-gradient-to-br from-blue-400/20 to-sky-400/20 opacity-0 hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                        <div
                                            class="w-12 h-12 bg-white/80 rounded-full flex items-center justify-center transform scale-0 group-hover:scale-100 transition duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="text-xl font-bold text-gray-800 mb-1">{{ $gurus->nama_lengkap }}</h3>
                                <p class="text-blue-600 font-medium">{{ $gurus->jabatan }}</p>
                                <div
                                    class="mt-4 h-1 bg-gradient-to-r from-blue-400 to-sky-400 w-1/2 mx-auto rounded-full">
                                </div>
                                <div
                                    class="mt-4 text-sm text-gray-500 opacity-0 h-0 overflow-hidden transition-all duration-300 group-hover:opacity-100 group-hover:h-auto">
                                    <p class="truncate"><span class="font-medium">Bidang:</span>
                                        {{ $gurus->bidang_keahlian ?? '-' }}</p>
                                    <p class="mt-1"><span class="font-medium">Pengalaman:</span>
                                        {{ $gurus->pengalaman ?? '-' }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="text-center mt-12" data-aos="fade-up" data-aos-delay="100">
                    <a href="{{ route('struktur.gtk') }}"
                        class="inline-flex items-center px-8 py-3.5 bg-gradient-to-r from-blue-600 to-sky-500 text-white font-semibold rounded-full hover:from-blue-700 hover:to-sky-600 transition duration-300 shadow-lg hover:shadow-xl group relative overflow-hidden">
                        <span class="relative z-10">Lihat Semua Guru</span>
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 ml-2 relative z-10 transform group-hover:translate-x-1 transition duration-300"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                        <span
                            class="absolute inset-0 bg-gradient-to-r from-blue-700 to-sky-600 opacity-0 group-hover:opacity-100 transition duration-300 z-0"></span>
                    </a>
                </div>
            </div>

            <div class="absolute bottom-0 left-0 right-0 h-24 overflow-hidden">
                <div
                    class="absolute bottom-0 left-0 right-0 h-24 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMjAwIDEyMCI+PHBhdGggZmlsbD0iI2ZmZmZmZiIgZD0iTTAgNjRjMTYwLTMzIDMyMCAzMyA0ODAgMHMzMjAtOTkgNDgwIDAgMzIwIDEzMiA0ODAgMHY2MEgweiIvPjwvc3ZnPg==')] bg-repeat-x bg-[length:1200px_120px] opacity-20 animate-wave-slow">
                </div>
            </div>
        </section>

        <!-- Ekstrakurikuler Section -->
        <section
            class="relative py-16 md:py-20 bg-gradient-to-br from-blue-50 via-sky-100 to-blue-200 overflow-hidden">
            <div class="absolute inset-0 opacity-10"
                style="background-image: radial-gradient(circle at 1px 1px, #3b82f6 1px, transparent 0); 
                background-size: 30px 30px;">
            </div>
            <div class="absolute inset-0 opacity-5"
                style="background: repeating-linear-gradient(45deg, rgba(59, 130, 246, 0.1), rgba(59, 130, 246, 0.1) 5px, transparent 5px, transparent 10px);">
            </div>
            <div class="absolute inset-0 overflow-hidden">
                <div
                    class="absolute top-16 left-8 w-40 h-40 bg-blue-200 rounded-full mix-blend-multiply filter blur-2xl opacity-25 animate-float">
                </div>
                <div
                    class="absolute top-32 right-16 w-48 h-48 bg-sky-200 rounded-full mix-blend-multiply filter blur-2xl opacity-20 animate-float-delay">
                </div>
                <div
                    class="absolute bottom-24 left-1/4 w-36 h-36 bg-blue-300 rounded-full mix-blend-multiply filter blur-2xl opacity-30 animate-float-delay-2">
                </div>
                <div
                    class="absolute bottom-16 right-1/3 w-32 h-32 bg-sky-300 rounded-full mix-blend-multiply filter blur-2xl opacity-25 animate-float-delay-3">
                </div>
                <div
                    class="absolute top-1/4 left-1/3 w-24 h-24 bg-gradient-to-br from-blue-100 to-sky-100 rounded-full opacity-40 animate-float-reverse">
                </div>
                <div
                    class="absolute top-2/3 right-1/5 w-28 h-28 bg-gradient-to-br from-sky-100 to-blue-100 rounded-full opacity-35 animate-float-delay">
                </div>
                <div
                    class="absolute top-1/2 left-1/5 w-20 h-20 bg-gradient-to-br from-blue-200 to-sky-200 rounded-full opacity-45 animate-float-delay-2">
                </div>
                <div class="absolute top-20 right-1/4 w-16 h-16 opacity-10 animate-bounce-slow">
                    <svg class="w-full h-full text-blue-400" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                    </svg>
                </div>
                <div class="absolute bottom-32 left-1/6 w-12 h-12 opacity-15 animate-bounce-slow"
                    style="animation-delay: 2s;">
                    <svg class="w-full h-full text-sky-400" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                    </svg>
                </div>
                <div class="absolute top-1/3 right-1/6 w-14 h-14 opacity-12 animate-bounce-slow"
                    style="animation-delay: 4s;">
                    <svg class="w-full h-full text-blue-500" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M9 11H7v3H5v-3H3v-1h2V7h2v3h2v1zm4 0h3v3h2v-3h3v-1h-3V7h-2v3h-3v1z" />
                    </svg>
                </div>
                <div class="absolute top-24 left-1/2 w-3 h-3 bg-blue-400 rounded-full animate-pulse-slow"></div>
                <div class="absolute top-40 right-1/3 w-2 h-2 bg-sky-400 rounded-full animate-pulse-slow"
                    style="animation-delay: 1s;"></div>
                <div class="absolute bottom-40 left-1/4 w-4 h-4 bg-blue-500 rounded-full animate-pulse-slow"
                    style="animation-delay: 2s;"></div>
                <div class="absolute bottom-24 right-1/4 w-3 h-3 bg-sky-500 rounded-full animate-pulse-slow"
                    style="animation-delay: 3s;"></div>
                <div class="absolute top-1/2 left-2/3 w-2 h-2 bg-blue-400 rounded-full animate-pulse-slow"
                    style="animation-delay: 4s;"></div>
                <div
                    class="absolute top-1/3 left-1/4 w-16 h-16 border-2 border-blue-300 opacity-20 animate-rotate-slow">
                    <div class="w-full h-full border border-blue-400 transform rotate-45 rounded-lg"></div>
                </div>
                <div class="absolute bottom-1/3 right-1/4 w-12 h-12 border-2 border-sky-300 opacity-25 animate-rotate-slow"
                    style="animation-delay: -15s;">
                    <div class="w-full h-full border border-sky-400 transform rotate-45 rounded-lg"></div>
                </div>
                <div class="absolute top-1/2 left-0 w-full h-1 opacity-8">
                    <svg class="w-full h-full" viewBox="0 0 1200 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 10 Q300 2 600 10 T1200 10" stroke="currentColor" stroke-width="3" fill="none"
                            class="text-blue-400" />
                    </svg>
                </div>
                <div class="absolute top-1/3 left-0 w-full h-1 opacity-8">
                    <svg class="w-full h-full" viewBox="0 0 1200 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 10 Q300 18 600 10 T1200 10" stroke="currentColor" stroke-width="3" fill="none"
                            class="text-sky-400" />
                    </svg>
                </div>
            </div>
            <div class="container mx-auto px-4 md:px-8 lg:px-16 relative z-10">
                <div class="text-center mb-12" data-aos="fade-up">
                    <span class="text-blue-500 font-semibold tracking-wider">AKTIVITAS SISWA</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-blue-800 mt-2 mb-4">
                        Ekstrakurikuler <span class="text-blue-600">Unggulan</span>
                    </h2>
                    <div class="h-1.5 w-20 bg-gradient-to-r from-blue-400 to-sky-400 rounded-full mx-auto mb-6"></div>
                    <p class="text-gray-600 max-w-2xl mx-auto text-lg">Berbagai kegiatan untuk mengembangkan bakat dan
                        minat siswa secara optimal</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach ($ekstra as $index => $ekskul)
                        <div class="bg-white/80 backdrop-blur-sm rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-white/30 group"
                            data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                            <div class="relative h-48 overflow-hidden">
                                <img src="{{ asset('storage/' . $ekskul->gambar) }}" alt="{{ $ekskul->nama }}"
                                    class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                                <div class="absolute bottom-0 left-0 right-0 p-4">
                                    <h3 class="text-xl font-bold text-white">{{ $ekskul->nama }}</h3>
                                </div>
                            </div>
                            <div class="p-6">
                                <p class="text-gray-600 text-sm mb-4">{{ Str::limit($ekskul->deskripsi, 100) }}</p>
                                <div class="flex justify-between items-center">
                                    <a href="{{ route('tentangkami.ekstra') }}"
                                        class="inline-flex items-center text-blue-600 font-medium text-sm hover:text-blue-700 transition duration-300 group">
                                        Selengkapnya
                                        <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform duration-300"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7" />
                                        </svg>
                                    </a>
                                    <span
                                        class="text-xs text-gray-500">{{ $ekskul->jadwal ?? 'Jadwal tersedia' }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="text-center mt-12" data-aos="fade-up" data-aos-delay="100">
                    <a href="{{ route('tentangkami.ekstra') }}"
                        class="inline-flex items-center px-8 py-3.5 bg-gradient-to-r from-blue-600 to-sky-500 text-white font-semibold rounded-full hover:from-blue-700 hover:to-sky-600 transition duration-300 shadow-lg hover:shadow-xl group relative overflow-hidden">
                        <span class="relative z-10">Lihat Semua Ekstrakurikuler</span>
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 ml-2 relative z-10 transform group-hover:translate-x-1 transition duration-300"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                        <span
                            class="absolute inset-0 bg-gradient-to-r from-blue-700 to-sky-600 opacity-0 group-hover:opacity-100 transition duration-300 z-0"></span>
                    </a>
                </div>
            </div>
            <div class="absolute bottom-0 left-0 right-0 h-24 overflow-hidden">
                <div
                    class="absolute bottom-0 left-0 right-0 h-24 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMjAwIDEyMCI+PHBhdGggZmlsbD0iI2ZmZmZmZiIgZD0iTTAgNjRjMTYwLTMzIDMyMCAzMyA0ODAgMHMzMjAtOTkgNDgwIDAgMzIwIDEzMiA0ODAgMHY2MEgweiIvPjwvc3ZnPg==')] bg-repeat-x bg-[length:1200px_120px] opacity-20 animate-wave-slow">
                </div>
            </div>
        </section>

        <!-- Galeri Section -->
        <section
            class="relative py-16 md:py-20 bg-gradient-to-br from-blue-50 via-sky-100 to-blue-200 overflow-hidden">
            <div class="absolute inset-0 overflow-hidden">
                <div
                    class="absolute top-1/4 left-1/4 w-72 h-72 bg-blue-200 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-pulse">
                </div>
                <div
                    class="absolute top-3/4 left-2/3 w-80 h-80 bg-sky-200 rounded-full mix-blend-multiply filter blur-2xl opacity-30 animate-pulse">
                </div>
                <div
                    class="absolute top-1/3 right-1/4 w-72 h-72 bg-blue-300 rounded-full mix-blend-multiply filter blur-2xl opacity-20 animate-pulse">
                </div>
                <svg class="absolute top-0 left-0 transform scale-150 opacity-20" width="100%" height="100%">
                    <defs>
                        <pattern id="pattern-dots" x="0" y="0" width="20" height="20"
                            patternUnits="userSpaceOnUse">
                            <circle cx="1" cy="1" r="1" fill="#3b82f6"></circle>
                        </pattern>
                    </defs>
                    <rect width="100%" height="100%" fill="url(#pattern-dots)" />
                </svg>
                <div class="absolute bottom-0 left-0 right-0 h-24 overflow-hidden">
                    <div
                        class="absolute bottom-0 left-0 right-0 h-24 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMjAwIDEyMCI+PHBhdGggZmlsbD0iI2ZmZmZmZiIgZD0iTTAgNjRjMTYwLTMzIDMyMCAzMyA0ODAgMHMzMjAtOTkgNDgwIDAgMzIwIDEzMiA0ODAgMHY2MEgweiIvPjwvc3ZnPg==')] bg-repeat-x bg-[length:1200px_120px] opacity-20 animate-wave-slow">
                    </div>
                </div>
            </div>
            <div class="relative z-10 container mx-auto px-4 md:px-8 lg:px-16">
                <div class="text-center mb-12" data-aos="fade-up">
                    <span class="text-blue-500 font-semibold tracking-wider">MOMEN BERHARGA</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-blue-800 mt-2 mb-4">
                        Galeri <span class="text-blue-600">Sekolah</span>
                    </h2>
                    <div class="h-1.5 w-20 bg-gradient-to-r from-blue-400 to-sky-400 rounded-full mx-auto mb-6"></div>
                    <p class="text-gray-600 max-w-2xl mx-auto text-lg">Dokumentasi kegiatan dan momen berharga di
                        sekolah kami</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                    @foreach ($galeriTerbaru as $index => $galeri)
                        <div class="bg-white/80 backdrop-blur-md border border-white/30 rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group"
                            data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                            <div class="relative h-64 overflow-hidden">
                                <img src="{{ asset('storage/' . $galeri->gambar) }}" alt="{{ $galeri->judul }}"
                                    class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent flex items-end p-5">
                                    <div>
                                        <h3 class="text-lg font-bold text-white mb-1">{{ $galeri->judul }}</h3>
                                        <div class="h-1 w-12 bg-blue-400 mb-2 rounded-full"></div>
                                        <p class="text-white/80 text-sm">{{ $galeri->created_at->format('d M Y') }}
                                        </p>
                                    </div>
                                </div>
                                <div
                                    class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div
                                        class="w-12 h-12 bg-white/80 rounded-full flex items-center justify-center shadow-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="text-center mt-12" data-aos="fade-up" data-aos-delay="100">
                    <a href="{{ route('galeri.index') }}"
                        class="inline-flex items-center px-8 py-3.5 bg-gradient-to-r from-blue-600 to-sky-500 text-white font-semibold rounded-full hover:from-blue-700 hover:to-sky-600 transition duration-300 shadow-lg hover:shadow-xl group relative overflow-hidden">
                        <span class="relative z-10">Lihat Semua Galeri</span>
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 ml-2 relative z-10 transform group-hover:translate-x-1 transition duration-300"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                        <span
                            class="absolute inset-0 bg-gradient-to-r from-blue-700 to-sky-600 opacity-0 group-hover:opacity-100 transition duration-300 z-0"></span>
                    </a>
                </div>
            </div>
        </section>


        <!-- Berita Section -->
        <section
            class="relative py-16 md:py-20 bg-gradient-to-br from-blue-50 via-sky-100 to-blue-200 overflow-hidden">
            <div class="absolute inset-0 overflow-hidden pointer-events-none">
                <div
                    class="absolute top-1/4 left-1/4 w-72 h-72 bg-blue-200 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-pulse">
                </div>
                <div
                    class="absolute top-3/4 left-2/3 w-80 h-80 bg-sky-200 rounded-full mix-blend-multiply filter blur-2xl opacity-30 animate-pulse">
                </div>
                <div
                    class="absolute top-1/3 right-1/4 w-72 h-72 bg-blue-100 rounded-full mix-blend-multiply filter blur-2xl opacity-20 animate-pulse">
                </div>

                <svg class="absolute top-0 left-0 transform scale-150 opacity-10" width="100%" height="100%">
                    <defs>
                        <pattern id="dots-pattern" x="0" y="0" width="20" height="20"
                            patternUnits="userSpaceOnUse">
                            <circle cx="1" cy="1" r="1" fill="#3b82f6" />
                        </pattern>
                    </defs>
                    <rect width="100%" height="100%" fill="url(#dots-pattern)" />
                </svg>

                <div class="absolute bottom-0 left-0 right-0 h-24 overflow-hidden">
                    <div
                        class="absolute bottom-0 left-0 right-0 h-24 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMjAwIDEyMCI+PHBhdGggZmlsbD0iI2ZmZmZmZiIgZD0iTTAgNjRjMTYwLTMzIDMyMCAzMyA0ODAgMHMzMjAtOTkgNDgwIDAgMzIwIDEzMiA0ODAgMHY2MEgweiIvPjwvc3ZnPg==')] bg-repeat-x bg-[length:1200px_120px] opacity-20 animate-wave-slow">
                    </div>
                </div>
            </div>

            <div class="container relative z-10 mx-auto px-4 md:px-8 lg:px-16">
                <div class="text-center mb-12" data-aos="fade-up">
                    <span class="text-blue-500 font-semibold tracking-wider">INFORMASI TERKINI</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-blue-800 mt-2 mb-4">
                        Berita <span class="text-blue-600">Sekolah</span>
                    </h2>
                    <div class="h-1.5 w-20 bg-gradient-to-r from-blue-400 to-sky-400 rounded-full mx-auto mb-6"></div>
                    <p class="text-gray-600 max-w-2xl mx-auto text-lg">Update kegiatan dan informasi terbaru dari
                        sekolah kami</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($beritaTerbaru as $index => $berita)
                        <div class="bg-white/80 backdrop-blur-md border border-white/30 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition duration-300 transform hover:-translate-y-2 group"
                            data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                            <div class="relative h-48 overflow-hidden">
                                <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}"
                                    class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                                <div class="absolute top-4 left-4">
                                    <span
                                        class="bg-blue-600 text-white px-3 py-1 rounded-full text-xs font-bold shadow-md">TERBARU</span>
                                </div>
                                <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                                <div
                                    class="absolute bottom-4 left-4 bg-white/90 text-blue-800 text-xs font-medium px-2 py-1 rounded">
                                    {{ $berita->created_at->format('d M Y') }}
                                </div>
                            </div>
                            <div class="p-6">
                                <h3
                                    class="text-xl font-bold text-gray-800 mb-3 hover:text-blue-600 transition duration-300 line-clamp-2">
                                    {{ $berita->judul }}
                                </h3>
                                <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                                    {{ Str::limit(strip_tags($berita->konten), 120) }}
                                </p>
                                <a href="{{ route('informasi.berita') }}"
                                    class="text-blue-600 font-medium text-sm hover:text-blue-700 transition duration-300 flex items-center group">
                                    Baca selengkapnya
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-4 w-4 ml-1 transform group-hover:translate-x-1 transition-transform duration-300"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="text-center mt-12" data-aos="fade-up" data-aos-delay="100">
                    <a href="{{ route('informasi.berita') }}"
                        class="inline-flex items-center px-8 py-3.5 bg-gradient-to-r from-blue-600 to-sky-500 text-white font-semibold rounded-full hover:from-blue-700 hover:to-sky-600 transition duration-300 shadow-lg hover:shadow-xl group relative overflow-hidden">
                        <span class="relative z-10">Lihat Semua Berita</span>
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 ml-2 relative z-10 transform group-hover:translate-x-1 transition duration-300"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                        <span
                            class="absolute inset-0 bg-gradient-to-r from-blue-700 to-sky-600 opacity-0 group-hover:opacity-100 transition duration-300 z-0"></span>
                    </a>
                </div>
            </div>
        </section>


        <!-- Testimoni Section -->
        <!-- Testimonial Section -->
<section class="relative py-16 md:py-20 bg-gradient-to-br from-white to-blue-50 overflow-hidden">
    <!-- Floating Background Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <!-- Large Floating Circles -->
        <div class="absolute top-1/4 left-1/3 w-72 h-72 bg-blue-200 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-pulse"></div>
        <div class="absolute bottom-0 left-1/4 w-80 h-80 bg-sky-100 rounded-full mix-blend-multiply filter blur-2xl opacity-30 animate-pulse"></div>
        <div class="absolute top-1/2 right-1/4 w-72 h-72 bg-blue-100 rounded-full mix-blend-multiply filter blur-2xl opacity-20 animate-pulse"></div>

        <!-- Dots Pattern -->
        <svg class="absolute top-0 left-0 transform scale-150 opacity-10" width="100%" height="100%">
            <defs>
                <pattern id="testimonial-dots" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                    <circle cx="1" cy="1" r="1" fill="#3b82f6" />
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#testimonial-dots)" />
        </svg>

        <!-- Wave Bottom -->
        <div class="absolute bottom-0 left-0 right-0 h-24 overflow-hidden">
            <div class="absolute bottom-0 left-0 right-0 h-24 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMjAwIDEyMCI+PHBhdGggZmlsbD0iI2ZmZmZmZiIgZD0iTTAgNjRjMTYwLTMzIDMyMCAzMyA0ODAgMHMzMjAtOTkgNDgwIDAgMzIwIDEzMiA0ODAgMHY2MEgweiIvPjwvc3ZnPg==')] bg-repeat-x bg-[length:1200px_120px] opacity-20 animate-wave-slow"></div>
        </div>
    </div>

    <!-- Konten Testimoni -->
    <div class="relative z-10 container mx-auto px-4 md:px-8 lg:px-16">
        <div class="text-center mb-12" data-aos="fade-up">
            <span class="text-blue-500 font-semibold tracking-wider">KEPUASAN ORANG TUA</span>
            <h2 class="text-3xl md:text-4xl font-bold text-blue-800 mt-2 mb-4">
                Apa Kata <span class="text-blue-600">Wali Murid</span>
            </h2>
            <div class="h-1.5 w-20 bg-gradient-to-r from-blue-400 to-sky-400 rounded-full mx-auto mb-6"></div>
            <p class="text-gray-600 max-w-2xl mx-auto text-lg">Testimoni jujur dari orang tua tentang pengalaman pendidikan di sekolah kami</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($testimoni as $index => $testi)
            <div class="bg-white/80 backdrop-blur-md border border-white/30 rounded-xl p-8 shadow-md hover:shadow-xl transition duration-300 transform hover:-translate-y-2 group relative"
                data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                <!-- Quote Icon -->
                <div class="absolute top-0 left-8 -translate-y-1/2 bg-blue-600 w-10 h-10 rounded-full flex items-center justify-center text-white shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z" />
                        <path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z" />
                    </svg>
                </div>
                
                <!-- Testimonial Text -->
                <p class="text-gray-700 mb-6 relative">
                    <span class="absolute top-0 left-0 text-5xl font-serif text-blue-200 opacity-50">"</span>
                    <span class="relative pl-6">{{ $testi->pesan }}</span>
                </p>
                
                <!-- Testimonial Author -->
                <div class="border-t border-gray-200 pt-4">
                    <h4 class="font-bold text-blue-600">{{ $testi->nama }}</h4>
                    <p class="text-gray-500 text-sm">{{ $testi->status }}</p>
                </div>
                
                <!-- Decorative Elements -->
                <div class="absolute bottom-4 right-4 w-8 h-8 bg-blue-100 rounded-full opacity-20"></div>
                <div class="absolute top-4 right-4 w-4 h-4 border-2 border-blue-200 rounded-full opacity-30"></div>
            </div>
            @endforeach
        </div>
        
        <!-- Navigation Dots (optional) -->
        <div class="flex justify-center mt-8 space-x-2">
            @foreach ($testimoni as $index => $testi)
            <button class="w-3 h-3 rounded-full bg-blue-200 hover:bg-blue-600 transition duration-300 focus:outline-none" aria-label="Go to testimonial {{ $index + 1 }}"></button>
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
    <script src="{{ asset('js/nav.js') }}"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/slider.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/swiper.js"></script>

</body>

</html>
