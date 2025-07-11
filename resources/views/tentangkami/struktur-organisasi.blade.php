<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <title>Struktur Organisasi</title>
</head>

<body>
    <div class="flex items-center gap-4 bg-[#06923E] px-6 py-4 shadow-sm">
        <div class="ml-2">
            <img src="../assets/logoBaru.png" alt="Logo SD" class="w-16 h-16" />
        </div>
        <div>
            <h1 class="text-xl font-semibold text-gray-100 ">SD MUHAMMADIYAH BAUSASRAN</h1>
            <p class="text-sm text-gray-300">Kec. Danurejan, Kota Yogyakarta, Daerah Istimewa Yogyakarta</p>
        </div>
    </div>

    {{-- Section Selamat Datang Start --}}
    <section class="relative w-full h-[90vh] overflow-hidden">
        <div class="swiper hero-swiper absolute inset-0 w-full h-full z-0 ">
            <div class="swiper-wrapper">
                @foreach ($slider as $slide)
                    <div class="swiper-slide">
                        <img src="{{ asset('storage/' . $slide->gambar) }}" alt="Slide {{ $loop->iteration }}"
                            class="w-full h-full object-cover" />
                    </div>
                @endforeach
            </div>
        </div>
        
    </section>
    {{-- Section Selamat Datang End --}}

    {{-- Nav Start --}}
    <nav id="navbar"
        class="fixed top-24 z-30 right-0 left-0 flex items-center justify-between bg-gray-100 px-6 py-3 w-[90%] rounded-lg shadow-md mx-auto mt-4 transition-all duration-500">
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
                            class="block px-4 py-2 hover:bg-gray-100 transition-colors duration-200 rounded-t-md">Visi
                            &
                            Misi</a></li>
                    <li><a href="{{ route('tentangkami.sejarah') }}"
                            class="block px-4 py-2 hover:bg-gray-100 transition-colors duration-200 rounded-b-md">Sejarah</a>
                    </li>
                    <li><a href="{{ route('struktur.organisasi') }}"
                            class="block px-4 py-2 hover:bg-gray-100 transition-colors duration-200 rounded-b-md">Struktur Organisasi</a>
                    </li>
                    <li><a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 transition-colors duration-200 rounded-b-md">GTK</a>
                    </li>
                    <li><a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 transition-colors duration-200 rounded-b-md">Fasilitas</a>
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

    <section class="relative py-20 overflow-hidden">
    <!-- Floating Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-1/4 left-1/4 w-72 h-72 bg-green-100 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse"></div>
        <div class="absolute top-3/4 right-1/4 w-96 h-96 bg-emerald-100 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse animation-delay-2000"></div>
        <div class="absolute bottom-1/4 left-1/3 w-80 h-80 bg-teal-100 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse animation-delay-4000"></div>
    </div>

    <!-- Grid Pattern Overlay -->
    <div class="absolute inset-0 opacity-5">
        <div class="w-full h-full" style="background-image: radial-gradient(circle at 1px 1px, #e5e7eb 1px, transparent 0); background-size: 20px 20px;"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <!-- Header Section -->
        <div class="text-center mb-16 animate-fade-in-up">
            <div class="inline-block mb-4">
                <div class="w-20 h-1 bg-gradient-to-r from-emerald-400 to-green-600 rounded-full mx-auto mb-6"></div>
            </div>
            <h1 class="text-5xl md:text-6xl font-bold text-gray-800 mb-4 tracking-tight">
                <span class="bg-gradient-to-r from-green-600 to-emerald-800 bg-clip-text text-transparent">
                    Struktur Organisasi
                </span>
            </h1>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto leading-relaxed">
                Mengenal Tim Hebat di Balik Kesuksesan SD Baubasran
            </p>
            <div class="mt-8 flex justify-center">
                <div class="w-32 h-1 bg-gradient-to-r from-transparent via-gray-400 to-transparent rounded-full opacity-30"></div>
            </div>
        </div>

        <!-- Organization Chart -->
        <div class="max-w-7xl mx-auto">
            @forelse ($strukturs as $index => $struktur)
                @php
                    $isKepala = stripos($struktur->jabatan, 'kepala sekolah') !== false;
                @endphp

                @if ($isKepala)
                    <!-- Kepala Sekolah (Top Center) -->
                    <div class="flex justify-center mb-12">
                        <div class="group relative">
                            <!-- Connection Lines to Wakil -->
                            <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0.5 h-12 bg-gradient-to-b from-emerald-500 to-transparent"></div>
                            <div class="absolute top-full left-1/2 transform -translate-x-1/2 translate-y-12 w-60 h-0.5 bg-gradient-to-r from-emerald-500 to-transparent"></div>
                            <div class="absolute top-full left-1/2 transform -translate-x-1/2 -translate-x-32 translate-y-12 w-0.5 h-12 bg-gradient-to-b from-emerald-500 to-transparent"></div>
                            <div class="absolute top-full left-1/2 transform -translate-x-1/2 translate-x-32 translate-y-12 w-0.5 h-12 bg-gradient-to-b from-emerald-500 to-transparent"></div>

                            <!-- Card -->
                            <div class="bg-gradient-to-br from-emerald-600 to-green-700 rounded-3xl p-8 shadow-2xl transform hover:scale-105 transition-all duration-500 hover:shadow-emerald-500/25 border border-emerald-300/20 backdrop-blur-sm">
                                <div class="text-center">
                                    <!-- Crown Icon -->
                                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                                        <div class="w-8 h-8 bg-yellow-400 rounded-full flex items-center justify-center shadow-lg">
                                            <svg class="w-4 h-4 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z" />
                                            </svg>
                                        </div>
                                    </div>

                                    <!-- Photo -->
                                    <div class="relative mb-6">
                                        <div class="w-32 h-32 mx-auto rounded-full overflow-hidden border-4 border-white shadow-xl group-hover:shadow-2xl transition-all duration-300">
                                            <img src="{{ asset('storage/' . $struktur->foto) }}" alt="Foto {{ $struktur->nama_lengkap }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                        </div>
                                        <div class="absolute inset-0 rounded-full border-2 border-white opacity-0 group-hover:opacity-100 animate-ping"></div>
                                    </div>

                                    <!-- Info -->
                                    <h3 class="text-2xl font-bold text-white mb-2">{{ $struktur->nama_lengkap }}</h3>
                                    <p class="text-emerald-100 font-semibold text-lg mb-2">{{ $struktur->jabatan }}</p>
                                    @if ($struktur->periode_jabatan && $struktur->periode_jabatan !== 'N/A')
                                        <p class="text-emerald-200 text-sm">Periode: {{ $struktur->periode_jabatan }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @empty
                <!-- Optional: bisa tambahkan pesan jika tidak ada data kepala sekolah -->
            @endforelse

            <!-- Kepala TU dan Bendahara -->
            <div class="flex justify-center mb-12">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl">
                    @php
                        $kepalaTu = null;
                        $bendahara = null;
                        
                        foreach ($strukturs as $struktur) {
                            if (stripos($struktur->jabatan, 'kepala tu') !== false || stripos($struktur->jabatan, 'tata usaha') !== false) {
                                $kepalaTu = $struktur;
                            } elseif (stripos($struktur->jabatan, 'bendahara') !== false) {
                                $bendahara = $struktur;
                            }
                        }
                    @endphp

                    <!-- Kepala TU (Left) -->
                    <div class="group relative">
                        <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0.5 h-12 bg-gradient-to-b from-teal-500 to-transparent"></div>
                        <div class="bg-gradient-to-br from-teal-500 to-teal-600 rounded-2xl p-6 shadow-xl transform hover:scale-105 transition-all duration-500 hover:shadow-teal-500/25 border border-teal-400/20 backdrop-blur-sm">
                            <div class="text-center">
                                <div class="absolute -top-3 left-1/2 transform -translate-x-1/2">
                                    <div class="w-6 h-6 bg-teal-300 rounded-full flex items-center justify-center shadow-lg">
                                        <svg class="w-3 h-3 text-teal-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                </div>

                                <div class="relative mb-4">
                                    <div class="w-24 h-24 mx-auto rounded-full overflow-hidden border-3 border-white shadow-lg group-hover:shadow-xl transition-all duration-300">
                                        @if($kepalaTu)
                                            <img src="{{ asset('storage/' . $kepalaTu->foto) }}" alt="Foto {{ $kepalaTu->nama_lengkap }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                        @else
                                            <div class="w-full h-full bg-teal-400 flex items-center justify-center text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                                </svg>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <h3 class="text-xl font-bold text-white mb-2">
                                    {{ $kepalaTu ? $kepalaTu->nama_lengkap : 'Kepala TU' }}</h3>
                                <p class="text-teal-100 font-semibold mb-1">
                                    {{ $kepalaTu ? $kepalaTu->jabatan : 'Kepala Tata Usaha' }}</p>
                                @if ($kepalaTu && $kepalaTu->periode_jabatan && $kepalaTu->periode_jabatan !== 'N/A')
                                    <p class="text-teal-200 text-sm">Periode: {{ $kepalaTu->periode_jabatan }}</p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- Bendahara (Right) -->
                    <div class="group relative">
                        <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0.5 h-12 bg-gradient-to-b from-cyan-500 to-transparent"></div>
                        <div class="bg-gradient-to-br from-cyan-500 to-cyan-600 rounded-2xl p-6 shadow-xl transform hover:scale-105 transition-all duration-500 hover:shadow-cyan-500/25 border border-cyan-400/20 backdrop-blur-sm">
                            <div class="text-center">
                                <div class="absolute -top-3 left-1/2 transform -translate-x-1/2">
                                    <div class="w-6 h-6 bg-cyan-300 rounded-full flex items-center justify-center shadow-lg">
                                        <svg class="w-3 h-3 text-cyan-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z" />
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>

                                <div class="relative mb-4">
                                    <div class="w-24 h-24 mx-auto rounded-full overflow-hidden border-3 border-white shadow-lg group-hover:shadow-xl transition-all duration-300">
                                        @if($bendahara)
                                            <img src="{{ asset('storage/' . $bendahara->foto) }}" alt="Foto {{ $bendahara->nama_lengkap }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                        @else
                                            <div class="w-full h-full bg-cyan-400 flex items-center justify-center text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <h3 class="text-xl font-bold text-white mb-2">
                                    {{ $bendahara ? $bendahara->nama_lengkap : 'Bendahara' }}</h3>
                                <p class="text-cyan-100 font-semibold mb-1">
                                    {{ $bendahara ? $bendahara->jabatan : 'Bendahara' }}</p>
                                @if ($bendahara && $bendahara->periode_jabatan && $bendahara->periode_jabatan !== 'N/A')
                                    <p class="text-cyan-200 text-sm">Periode: {{ $bendahara->periode_jabatan }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Staff dan Guru -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">
                @forelse ($strukturs as $struktur)
                    @if (stripos($struktur->jabatan, 'kepala sekolah') === false && 
                         stripos($struktur->jabatan, 'kepala tu') === false && 
                         stripos($struktur->jabatan, 'tata usaha') === false &&
                         stripos($struktur->jabatan, 'bendahara') === false)
                        <div class="group relative">
                            <div class="bg-gradient-to-br from-green-400 to-green-500 rounded-xl p-6 shadow-lg transform hover:scale-105 transition-all duration-500 hover:shadow-green-500/25 border border-green-300/20 backdrop-blur-sm h-full">
                                <div class="text-center">
                                    <div class="absolute -top-2 left-1/2 transform -translate-x-1/2">
                                        <div class="w-4 h-4 bg-green-300 rounded-full shadow-lg"></div>
                                    </div>

                                    <div class="relative mb-4">
                                        <div class="w-20 h-20 mx-auto rounded-full overflow-hidden border-2 border-white shadow-lg group-hover:shadow-xl transition-all duration-300">
                                            <img src="{{ asset('storage/' . $struktur->foto) }}" alt="Foto {{ $struktur->nama_lengkap }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                        </div>
                                    </div>

                                    <h3 class="text-lg font-bold text-white mb-2">{{ $struktur->nama_lengkap }}</h3>
                                    <p class="text-green-100 font-semibold text-sm mb-1">{{ $struktur->jabatan }}</p>
                                    @if ($struktur->periode_jabatan && $struktur->periode_jabatan !== 'N/A')
                                        <p class="text-green-200 text-xs">Periode: {{ $struktur->periode_jabatan }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endif
                @empty
                    <!-- Empty State -->
                    <div class="col-span-full text-center py-20 animate-fade-in-up">
                        <div class="w-32 h-32 mx-auto mb-8 opacity-30">
                            <svg class="w-full h-full text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Data Belum Tersedia</h3>
                        <p class="text-gray-600 max-w-md mx-auto">
                            Struktur organisasi sedang dalam proses pembaruan. Silakan kembali lagi nanti.
                        </p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</section>

<!-- Custom CSS untuk animasi -->
<style>
    @keyframes fade-in-up {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in-up {
        animation: fade-in-up 0.6s ease-out forwards;
    }

    .animation-delay-2000 {
        animation-delay: 2s;
    }

    .animation-delay-4000 {
        animation-delay: 4s;
    }

    /* Hover effects */
    .group:hover .animate-ping {
        animation: ping 1s cubic-bezier(0, 0, 0.2, 1) infinite;
    }

    /* Smooth scrolling */
    html {
        scroll-behavior: smooth;
    }
</style>

    <!-- JavaScript untuk animasi dengan Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.0/axios.min.js"></script>
    <script>
        // Intersection Observer untuk animasi saat scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in-up');
                }
            });
        }, observerOptions);

        // Observe semua elemen yang akan dianimasi
        document.addEventListener('DOMContentLoaded', function() {
            const elements = document.querySelectorAll('.group');
            elements.forEach(el => observer.observe(el));

            // Animasi sequential untuk cards
            const cards = document.querySelectorAll('.group');
            cards.forEach((card, index) => {
                card.style.animationDelay = `${index * 0.1}s`;
            });
        });

        // Fungsi untuk load data dengan Axios (contoh)
        async function loadStrukturData() {
            try {
                const response = await axios.get('/api/struktur-organisasi');
                // Handle response data
                console.log('Data loaded:', response.data);
            } catch (error) {
                console.error('Error loading data:', error);
            }
        }

        // Parallax effect untuk background
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const shapes = document.querySelectorAll(
                '.absolute.top-1\\/4, .absolute.top-3\\/4, .absolute.bottom-1\\/4');

            shapes.forEach((shape, index) => {
                const speed = 0.5 + (index * 0.1);
                shape.style.transform = `translateY(${scrolled * speed}px)`;
            });
        });
    </script>

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

    <script src="../js/nav.js"></script>
</body>



</html>
