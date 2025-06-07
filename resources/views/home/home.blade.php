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
    <title>Home</title>
    <link rel="stylesheet" href="css/slider.css">



</head>

<body class="bg-gradient-to-br from-emerald-50 via-green-50 to-teal-50 overflow-x-hidden">
    <div class="flex items-center gap-4 bg-white px-6 py-4 shadow-sm">
        <div class="ml-2">
            <img src="assets/sd.png" alt="Logo SD" class="w-16 h-16" />
        </div>
        <div>
            <h1 class="text-xl font-semibold text-gray-800">SD MUHAMMADIYAH BAUSASRAN</h1>
            <p class="text-sm text-gray-600">Kec. Danurejan, Kota Yogyakarta, Daerah Istimewa Yogyakarta</p>
        </div>
    </div>
    {{-- Header End --}}


    {{-- Nav Start --}}
    <nav class="flex items-center justify-between bg-gray-100 px-6 py-3 w-[90%] rounded-lg shadow-md mx-auto mt-4">
        <ul class="hidden md:flex items-center space-x-6 text-sm font-medium text-gray-700">
            <li><a href="{{ route('home') }}" class="hover:text-green-600 transition-colors duration-200">HOME</a></li>
            <li class="relative">
                <button type="button"
                    class="flex items-center hover:text-green-600 transition-colors duration-200 dropdown-trigger"
                    data-dropdown="profil">
                    TENTANG KAMI
                    <svg class="ml-1 w-3 h-3 transform transition-transform duration-200" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <ul id="profil"
                    class="absolute left-0 mt-2 w-40 bg-white shadow-lg rounded-md border opacity-0 invisible transform -translate-y-2 transition-all duration-200 z-50">
                    <li><a href="{{ route('tentangkami.index') }}"
                            class="block px-4 py-2 hover:bg-gray-100 transition-colors duration-200 rounded-t-md">Profile</a>
                    </li>
                    <li><a href="{{ route('tentangkami.visiMisi') }}"
                            class="block px-4 py-2 hover:bg-gray-100 transition-colors duration-200 rounded-t-md">Visi &
                            Misi</a></li>
                    <li><a href="{{ route('tentangkami.sejarah') }}"
                            class="block px-4 py-2 hover:bg-gray-100 transition-colors duration-200 rounded-b-md">Sejarah</a>
                    </li>
                </ul>
            </li>

            <li class="relative">
                <button type="button"
                    class="flex items-center hover:text-green-600 transition-colors duration-200 dropdown-trigger"
                    data-dropdown="galeri">
                    DOKUMENTASI
                    <svg class="ml-1 w-3 h-3 transform transition-transform duration-200" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <ul id="galeri"
                    class="absolute left-0 mt-2 w-40 bg-white shadow-lg rounded-md border opacity-0 invisible transform -translate-y-2 transition-all duration-200 z-50">
                    <li><a href="{{ route('galeri.index') }}"
                            class="block px-4 py-2 hover:bg-gray-100 transition-colors duration-200 rounded-t-md">Galeri</a>
                    </li>
                    <li><a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 transition-colors duration-200 rounded-b-md">Video</a>
                    </li>
                </ul>
            </li>

            <li class="relative">
                <button type="button"
                    class="flex items-center hover:text-green-600 transition-colors duration-200 dropdown-trigger"
                    data-dropdown="informasi">
                    INFORMASI
                    <svg class="ml-1 w-3 h-3 transform transition-transform duration-200" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <ul id="informasi"
                    class="absolute left-0 mt-2 w-40 bg-white shadow-lg rounded-md border opacity-0 invisible transform -translate-y-2 transition-all duration-200 z-50">
                    <li><a href="{{ route('informasi.berita') }}"
                            class="block px-4 py-2 hover:bg-gray-100 transition-colors duration-200 rounded-t-md">Berita</a>
                    </li>
                    <li><a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 transition-colors duration-200 rounded-b-md">Pengumuman</a>
                    </li>
                </ul>
            </li>
            <li><a href="#" class="hover:text-green-600 transition-colors duration-200">PPDB SD</a></li>
        </ul>
        <div class="hidden md:block">
            <div>
                <img src="assets/bgsearch.png" alt="" class="mt-1 h-12">
            </div>
        </div>

        <div class="md:hidden flex justify-end w-full ">
            <button id="menu-toggle" class="text-gray-700 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </nav>
    {{-- Nav End --}}


    {{-- Nav Mobile Start --}}
    <div id="mobile-menu" class="md:hidden px-6 pt-4 pb-6 space-y-4 hidden ">
        <ul class="space-y-2 text-gray-700 text-sm font-medium">
            <li><a href="{{ route('home') }}" class="block hover:text-green-600">HOME</a></li>
            <li class="space-y-1">
                <button class="w-full flex justify-between items-center dropdown-mobile-btn">
                    TENTANG KAMI
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <ul class="pl-4 mt-1 space-y-1 hidden dropdown-mobile-menu">
                    <li><a href="{{ route('tentangkami.index') }}" class="block hover:text-green-600">Profile</a></li>
                    <li><a href="{{ route('tentangkami.visiMisi') }}" class="block hover:text-green-600">Visi &
                            Misi</a></li>
                    <li><a href="{{ route('tentangkami.sejarah') }}" class="block hover:text-green-600">Sejarah</a>
                    </li>
                </ul>
            </li>
            <li class="space-y-1">
                <button class="w-full flex justify-between items-center dropdown-mobile-btn">
                    DOKUMENTASI
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <ul class="pl-4 mt-1 space-y-1 hidden dropdown-mobile-menu">
                    <li><a href="{{ route('galeri.index') }}" class="block hover:text-green-600">Galeri</a></li>
                    <li><a href="#" class="block hover:text-green-600">Video</a></li>
                </ul>
            </li>
            <li class="space-y-1">
                <button class="w-full flex justify-between items-center dropdown-mobile-btn">
                    INFORMASI
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <ul class="pl-4 mt-1 space-y-1 hidden dropdown-mobile-menu">
                    <li><a href="{{ route('informasi.berita') }}" class="block hover:text-green-600">Berita</a></li>
                    <li><a href="#" class="block hover:text-green-600">Pengumuman</a></li>
                </ul>
            </li>
            <li><a href="#" class="block hover:text-green-600">PPDB SD</a></li>
        </ul>
    </div>
    {{-- Nav Mobile End --}}


    {{-- Main Start --}}
    <main class="bg-gradient-to-br from-emerald-50 via-green-50 to-teal-50 min-h-screen mt-10">
        {{-- Section Selamat Datang Start --}}
        <section class="text-center px-4 md:px-8 lg:px-16">
            <h1 class="text-3xl md:text-5xl font-bold text-green-700 mb-4">Selamat Datang di SD Muhammadiyah Bausasran
            </h1>
            <p class="text-gray-700 max-w-2xl mx-auto text-lg">Sekolah unggulan dengan pendidikan berbasis akhlak mulia,prestasi, dan teknologi.</p>
            <img src="assets/gedung.png" alt="Gedung Sekolah"
                class="mt-8 rounded-xl shadow-md w-full max-w-4xl mx-auto object-cover h-64 md:h-96">
        </section>
        {{-- Section Selamat Datang End --}}

        {{-- Section Sekilas Tentang Kami Start --}}
        <section class="relative py-20 overflow-hidden mt-10">
            <div class="relative container mx-auto px-4 md:px-8 lg:px-16">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="order-2 lg:order-1" data-aos="fade-right" data-aos-duration="1000">
                        <div class="relative">
                            <img src="assets/tentang.png" alt="Tentang Sekolah"
                                class="relative rounded-2xl shadow-2xl w-full object-cover h-80 lg:h-96 transform hover:scale-105 transition-all duration-500">
                        </div>
                    </div>
                    <div class="order-1 lg:order-2" data-aos="fade-left" data-aos-duration="1000"
                        data-aos-delay="200">
                        <div class="space-y-6 fix-text-clipping">
                            <h2 class="text-4xl lg:text-5xl font-bold bg-gradient-to-r from-emerald-600 to-teal-600 bg-clip-text text-transparent">
                                Sekilas Tentang Kami
                            </h2>
                            <div class="w-20 h-1 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-full"></div>
                            <p class="text-gray-700 text-lg leading-relaxed">
                                {{ $info->judul ?? 'SD Muhammadiyah Bausasran adalah sekolah dasar unggulan yang berkomitmen untuk memberikan pendidikan berkualitas tinggi dengan pendekatan berbasis akhlak mulia, prestasi, dan teknologi.' }}
                            </p>
                            <div class="flex items-center space-x-4 pt-4">
                                <div
                                    class="w-12 h-12 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <span class="text-gray-600 font-medium">Pendidikan Berkualitas Tinggi</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Section Sekilas Tentang Kami End --}}


        {{-- Section Guru Start --}}
        <section id="guru" class="py-20 relative">
            <div class="absolute inset-0 bg-gradient-to-b from-white/50 to-emerald-50/50"></div>
            <div class="relative max-w-7xl mx-auto px-4">
                <div class="text-center mb-16" data-aos="fade-down" data-aos-duration="1000">
                    <h2
                        class="text-4xl lg:text-5xl font-bold bg-gradient-to-r from-emerald-600 to-teal-600 bg-clip-text text-transparent mb-4">
                        Guru & Tenaga Kependidikan
                    </h2>
                    <div class="w-24 h-1 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-full mx-auto mb-6">
                    </div>
                    <p class="text-gray-600 text-lg max-w-2xl mx-auto">Tim pengajar berpengalaman dan berdedikasi
                        tinggi untuk masa depan siswa</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                    @foreach ($guru as $index => $gurus)
                        <div class="group" data-aos="fade-up" data-aos-duration="800"
                            data-aos-delay="{{ $index * 100 }}">
                            <div class="glass-effect rounded-3xl p-6 text-center transform group-hover:scale-105 transition-all duration-500 hover:shadow-2xl">
                                <div class="relative mb-6">
                                    <img src="{{ asset('storage/' . $gurus->foto) }}" alt="Foto {{ $gurus->nama }}"
                                        class="relative w-24 h-24 mx-auto rounded-full object-cover border-4 border-white shadow-lg">
                                </div>
                                <h3 class="text-lg font-bold text-gray-800 mb-2">{{ $gurus->nama }}</h3>
                                <p class="text-emerald-600 text-sm font-medium">{{ $gurus->jabatan }}</p>
                                <div class="mt-4 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <div class="w-full h-1 bg-gradient-to-r from-emerald-400 to-teal-400 rounded-full">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="text-center mt-12" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="500">
                    <a href="#"
                        class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-emerald-500 to-teal-500 text-white font-semibold rounded-full hover:from-emerald-600 hover:to-teal-600 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl">
                        <span>Lihat Semua Guru</span>
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </section>
        {{-- Section Guru End --}}


        {{-- Section Ekstra Start --}}
        <section class="py-20 relative">
            <div class="absolute inset-0 bg-gradient-to-r from-emerald-50/80 to-teal-50/80"></div>
            <div class="relative container mx-auto px-4 md:px-8 lg:px-16">
                <div class="text-center mb-16" data-aos="fade-down" data-aos-duration="1000">
                    <h2
                        class="text-4xl lg:text-5xl font-bold bg-gradient-to-r from-emerald-600 to-teal-600 bg-clip-text text-transparent mb-4">
                        Ekstrakurikuler Unggulan
                    </h2>
                    <div class="w-24 h-1 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-full mx-auto mb-6">
                    </div>
                    <p class="text-gray-600 text-lg max-w-2xl mx-auto">Berbagai kegiatan untuk mengembangkan bakat dan
                        minat siswa</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                    @foreach ($ekstra as $index => $ekskul)
                        <div class="group" data-aos="fade-up" data-aos-duration="800"
                            data-aos-delay="{{ $index * 100 }}">
                            <div
                                class="glass-effect rounded-2xl overflow-hidden shadow-lg group-hover:shadow-2xl transform group-hover:scale-105 transition-all duration-500">
                                <div class="relative overflow-hidden">
                                    <img src="{{ asset('storage/' . $ekskul->gambar) }}" alt="{{ $ekskul->nama }}"
                                        class="h-48 w-full object-cover group-hover:scale-110 transition-transform duration-500">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                                    </div>
                                </div>
                                <div class="p-6">
                                    <h3 class="font-bold text-lg text-gray-800 mb-2">{{ $ekskul->nama }}</h3>
                                    <p class="text-gray-600 text-sm">{{ $ekskul->deskripsi }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        {{-- Section Ekstra End --}}


        {{-- Section Galeri Start --}}
        <section class="py-20 relative">
            <div class="relative container mx-auto px-4 md:px-8 lg:px-16">
                <div class="text-center mb-16" data-aos="fade-down" data-aos-duration="1000">
                    <h2
                        class="text-4xl lg:text-5xl font-bold bg-gradient-to-r from-emerald-600 to-teal-600 bg-clip-text text-transparent mb-4">
                        Galeri Terbaru
                    </h2>
                    <div class="w-24 h-1 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-full mx-auto mb-6">
                    </div>
                    <p class="text-gray-600 text-lg max-w-2xl mx-auto">Dokumentasi kegiatan dan fasilitas sekolah</p>
                </div>

                <div class="max-w-5xl mx-auto" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="swiper-container galeri-swiper relative">
                        <div class="swiper-wrapper">
                            @foreach ($galeriTerbaru as $index => $galeri)
                                <div class="swiper-slide">
                                    <div
                                        class="rounded-2xl overflow-hidden shadow-xl transform transition-transform duration-300 hover:scale-105">
                                        <div class="relative">
                                            <img src="{{ asset('storage/' . $galeri->gambar) }}"
                                                alt="{{ $galeri->judul }}" class="w-full h-72 object-cover">
                                            <div
                                                class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent">
                                            </div>
                                        </div>
                                        <div class="glass-effect p-6 text-center">
                                            <h3 class="text-lg font-bold text-gray-800">{{ $galeri->judul }}</h3>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="flex justify-center items-center mt-12 space-x-6" data-aos="fade-up"
                        data-aos-delay="400">
                        <div class="swiper-button-prev"></div>
                        <a href="{{ route('galeri.index') }}"
                            class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-emerald-500 to-teal-500 text-white font-semibold rounded-full hover:from-emerald-600 hover:to-teal-600 transform hover:scale-105 transition-all duration-300 shadow-lg">
                            <span>Lihat Semua Galeri</span>
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Section Galeri End --}}


        {{-- Section Berita Start --}}
        <section class="py-20 relative">
            <div class="absolute inset-0 bg-gradient-to-r from-emerald-50/80 to-teal-50/80"></div>
            <div class="relative container mx-auto px-4 md:px-8 lg:px-16">
                <div class="text-center mb-16" data-aos="fade-down" data-aos-duration="1000">
                    <h2
                        class="text-4xl lg:text-5xl font-bold bg-gradient-to-r from-emerald-600 to-teal-600 bg-clip-text text-transparent mb-4">
                        Berita Terbaru
                    </h2>
                    <div class="w-24 h-1 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-full mx-auto mb-6">
                    </div>
                    <p class="text-gray-600 text-lg max-w-2xl mx-auto">Informasi dan kegiatan terkini dari sekolah</p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($beritaTerbaru as $index => $berita)
                        <div class="group" data-aos="fade-up" data-aos-duration="800"
                            data-aos-delay="{{ $index * 100 }}">
                            <div
                                class="glass-effect rounded-2xl overflow-hidden shadow-lg group-hover:shadow-2xl transform group-hover:scale-105 transition-all duration-500">
                                <div class="relative overflow-hidden">
                                    <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}"
                                        class="h-48 w-full object-cover group-hover:scale-110 transition-transform duration-500">
                                    <div class="absolute top-4 left-4">
                                        <span
                                            class="bg-gradient-to-r from-emerald-500 to-teal-500 text-white px-3 py-1 rounded-full text-xs font-semibold">TERBARU</span>
                                    </div>
                                </div>
                                <div class="p-6">
                                    <h3
                                        class="text-lg font-bold text-gray-800 mb-3 group-hover:text-emerald-600 transition-colors">
                                        {{ $berita->judul }}</h3>
                                    <p class="text-gray-600 text-sm line-clamp-3 mb-4">{{ $berita->konten }}</p>
                                    <a href="#"
                                        class="inline-flex items-center text-emerald-600 font-semibold text-sm hover:text-emerald-700 transition-colors">
                                        <span>Baca selengkapnya</span>
                                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        {{-- Section Berita End --}}


        {{-- Section Testimoni Start --}}
        <section class="py-20 relative">
            <div class="absolute inset-0 bg-gradient-to-b from-white/50 to-emerald-50/50"></div>
            <div class="relative container mx-auto px-4 md:px-8 lg:px-16">
                <div class="text-center mb-16" data-aos="fade-down" data-aos-duration="1000">
                    <h2
                        class="text-4xl lg:text-5xl font-bold bg-gradient-to-r from-emerald-600 to-teal-600 bg-clip-text text-transparent mb-4">
                        Apa Kata Wali Murid
                    </h2>
                    <div class="w-24 h-1 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-full mx-auto mb-6">
                    </div>
                    <p class="text-gray-600 text-lg max-w-2xl mx-auto">Testimoni dari para wali murid tentang
                        pengalaman pendidikan di sekolah kami</p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($testimoni as $index => $testi)
                        <div class="group" data-aos="fade-up" data-aos-duration="800"
                            data-aos-delay="{{ $index * 100 }}">
                            <div
                                class="glass-effect rounded-2xl p-8 shadow-lg group-hover:shadow-2xl transform group-hover:scale-105 transition-all duration-500 relative">
                                <div class="absolute -top-4 left-8">
                                    <div
                                        class="w-8 h-8 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-full flex items-center justify-center">
                                        <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z" />
                                        </svg>
                                    </div>
                                </div>
                                <p class="italic text-gray-700 mb-6 leading-relaxed">"{{ $testi->pesan }}"</p>
                                <div class="border-t border-gray-200 pt-4">
                                    <div class="font-bold text-emerald-700 mb-1">— {{ $testi->nama }}</div>
                                    <p class="text-gray-600 text-sm italic">{{ $testi->status }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        {{-- Section Testimoni End --}}

    </main>
    {{-- Main End --}}


    {{-- Footer Start --}}
    <footer class="bg-gradient-to-br from-[#ECFAE5] via-[#DDF6D2] to-[#CAE8BD] text-[#537D5D]">
        <div class="max-w-7xl mx-auto px-6 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="space-y-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-12 h-12 bg-[#DDEB9D] rounded-lg flex items-center justify-center">
                            <svg class="w-8 h-8 text-green-700" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 3L1 9l4 2.18v6L12 21l7-3.82v-6l2-1.09V17h2V9L12 3zm6.82 6L12 12.72 5.18 9 12 5.28 18.82 9zM17 15.99l-5 2.73-5-2.73v-3.72L12 15l5-2.73v3.72z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold">SD Muhammadiyah Baubasran</h3>
                            <p class="text-sm opacity-90">Sekolah Dasar Unggulan</p>
                        </div>
                    </div>
                    <p class="opacity-90 leading-relaxed">
                        Mencerdaskan generasi bangsa dengan pendidikan berkualitas, berkarakter, dan berakhlak mulia
                        untuk masa depan yang gemilang.
                    </p>
                </div>

                <div class="space-y-4">
                    <h4 class="text-lg font-semibold border-b border-green-800 pb-2">Tautan Cepat</h4>
                    <ul class="space-y-3">
                        <li><a href="#"
                                class="opacity-90 hover:text-[#638C6D] flex items-center transition duration-200"><span
                                    class="w-2 h-2 bg-green-700 rounded-full mr-3"></span>Beranda</a></li>
                        <li><a href="#"
                                class="opacity-90 hover:text-[#638C6D] flex items-center transition duration-200"><span
                                    class="w-2 h-2 bg-green-700 rounded-full mr-3"></span>Profil Sekolah</a></li>
                        <li><a href="#"
                                class="opacity-90 hover:text-[#638C6D] flex items-center transition duration-200"><span
                                    class="w-2 h-2 bg-green-700 rounded-full mr-3"></span>Fasilitas</a></li>
                        <li><a href="#"
                                class="opacity-90 hover:text-[#638C6D] flex items-center transition duration-200"><span
                                    class="w-2 h-2 bg-green-700 rounded-full mr-3"></span>Kegiatan</a></li>
                        <li><a href="#"
                                class="opacity-90 hover:text-[#638C6D] flex items-center transition duration-200"><span
                                    class="w-2 h-2 bg-green-700 rounded-full mr-3"></span>PPDB</a></li>
                    </ul>
                </div>

                <div class="space-y-4">
                    <h4 class="text-lg font-semibold border-b border-green-800 pb-2">Kontak Kami</h4>
                    <ul class="space-y-3 text-sm">
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-green-700 mt-1" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-1.1 0-2-.9-2-2h4c0 1.1-.9 2-2 2zm6.36-6.64C16.8 10.8 14.53 10 12 10s-4.8.8-6.36 2.36C4.21 14.21 4 15.1 4 16v1h16v-1c0-.9-.21-1.79-.64-2.64z" />
                            </svg>
                            <span>Jl. Baubasran</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-green-700" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M6.62 10.79a15.91 15.91 0 006.59 6.59l2.2-2.2a1 1 0 011.05-.24 11.36 11.36 0 003.58.57 1 1 0 011 1v3.58a1 1 0 01-1 1C10.29 21 3 13.71 3 4a1 1 0 011-1h3.58a1 1 0 011 1 11.36 11.36 0 00.57 3.58 1 1 0 01-.24 1.05l-2.2 2.2z" />
                            </svg>
                            <span>(021) 1234-5678</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-green-700" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                            </svg>
                            <span>info@sdbaubasran.sch.id</span>
                        </li>
                    </ul>
                </div>
                <div class="space-y-4">
                    <h4 class="text-lg font-semibold border-b border-green-800 pb-2">Jam Operasional</h4>
                    <div class="grid gap-4">
                        <div class="bg-white/60 rounded-xl shadow-md p-4">
                            <p class="text-sm">Senin - Jumat</p>
                            <p class="font-semibold text-green-800 text-lg">07.00 - 15.00 WIB</p>
                            <div class="mt-2 text-xs text-[#537D5D]">Aktif selama jam sekolah</div>
                        </div>
                        <div class="bg-white/60 rounded-xl shadow-md p-4">
                            <p class="text-sm">Sabtu</p>
                            <p class="font-semibold text-green-800 text-lg">07.00 - 12.00 WIB</p>
                            <div class="mt-2 text-xs text-[#537D5D]">Aktivitas terbatas (ekstrakurikuler)</div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="border-t border-green-200 mt-12 pt-6 text-center text-sm opacity-80">
                © 2025 SD Muhammadiyah Baubasran. Seluruh hak cipta dilindungi.
            </div>
        </div>
    </footer>
    {{-- Footer End --}}

    <script src="https://unpkg.com/boxicons@2.1.3/dist/boxicons.js"></script>
    <script src="js/nav.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/slider.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>



</body>

</html>
