<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <title>Home</title>
    <link rel="stylesheet" href="css/slider.css">

</head>

<body>
    <div class="flex items-center gap-4 bg-white px-6 py-4 shadow-sm">
        <div class="ml-2">
            <img src="assets/sd.png" alt="Logo SD" class="w-16 h-16" />
        </div>
        <div>
            <h1 class="text-xl font-semibold text-gray-800">SD MUHAMMADIYAH BAUSASRAN</h1>
            <p class="text-sm text-gray-600">Kec. Danurejan, Kota Yogyakarta, Daerah Istimewa Yogyakarta</p>
        </div>
    </div>

    <nav class="flex items-center justify-between bg-gray-100 px-6 py-3 w-[90%] rounded-lg shadow-md mx-auto mt-4">
        <ul class="hidden md:flex items-center space-x-6 text-sm font-medium text-gray-700">
            <li><a href="#" class="hover:text-blue-600 transition-colors duration-200">HOME</a></li>

            <li class="relative">
                
                <button type="button"
                    class="flex items-center hover:text-blue-600 transition-colors duration-200 dropdown-trigger"
                    data-dropdown="profil">
                    PROFIL
                    <svg class="ml-1 w-3 h-3 transform transition-transform duration-200" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <ul id="profil"
                    class="absolute left-0 mt-2 w-40 bg-white shadow-lg rounded-md border opacity-0 invisible transform -translate-y-2 transition-all duration-200 z-50">
                    <li><a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 transition-colors duration-200 rounded-t-md">Visi &
                            Misi</a></li>
                    <li><a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 transition-colors duration-200 rounded-b-md">Sejarah</a>
                    </li>
                </ul>
            </li>

            <li class="relative">
                <button type="button"
                    class="flex items-center hover:text-blue-600 transition-colors duration-200 dropdown-trigger"
                    data-dropdown="galeri">
                    GALERI
                    <svg class="ml-1 w-3 h-3 transform transition-transform duration-200" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <ul id="galeri"
                    class="absolute left-0 mt-2 w-40 bg-white shadow-lg rounded-md border opacity-0 invisible transform -translate-y-2 transition-all duration-200 z-50">
                    <li><a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 transition-colors duration-200 rounded-t-md">Foto</a>
                    </li>
                    <li><a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 transition-colors duration-200 rounded-b-md">Video</a>
                    </li>
                </ul>
            </li>

            <li class="relative">
                <button type="button"
                    class="flex items-center hover:text-blue-600 transition-colors duration-200 dropdown-trigger"
                    data-dropdown="informasi">
                    INFORMASI
                    <svg class="ml-1 w-3 h-3 transform transition-transform duration-200" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <ul id="informasi"
                    class="absolute left-0 mt-2 w-40 bg-white shadow-lg rounded-md border opacity-0 invisible transform -translate-y-2 transition-all duration-200 z-50">
                    <li><a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 transition-colors duration-200 rounded-t-md">Berita</a>
                    </li>
                    <li><a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 transition-colors duration-200 rounded-b-md">Pengumuman</a>
                    </li>
                </ul>
            </li>

            <li><a href="#" class="hover:text-blue-600 transition-colors duration-200">PPDB SD</a></li>
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

    <main class="py-10 space-y-20 bg-gray-50">

        <!-- Section Selamat Datang - tetap tanpa background -->
        <section class="text-center px-4 md:px-8 lg:px-16">
            <h1 class="text-3xl md:text-5xl font-bold text-green-700 mb-4">Selamat Datang di SD Muhammadiyah Bausasran
            </h1>
            <p class="text-gray-700 max-w-2xl mx-auto text-lg">Sekolah unggulan dengan pendidikan berbasis akhlak mulia,
                prestasi, dan teknologi.</p>
            <img src="assets/gedung.png" alt="Gedung Sekolah"
                class="mt-8 rounded-xl shadow-md w-full max-w-4xl mx-auto object-cover h-64 md:h-96">
        </section>

        <!-- Section Tentang Kami - background hijau muda full width -->
        <section class="bg-green-50 w-full py-12">
            <div class="px-4 md:px-8 lg:px-16">
                <div class="grid md:grid-cols-2 gap-8 items-center">
                    <img src="assets/tentang.png" alt="Tentang Sekolah"
                        class="rounded-lg shadow-md w-full object-cover h-64">
                    <div>
                        <h2 class="text-2xl font-semibold text-green-700 mb-4">Sekilas Tentang Kami</h2>
                        <p class="text-gray-700 leading-relaxed">
                            SD Muhammadiyah Bausasran adalah sekolah dasar berbasis nilai-nilai Islam, berlokasi di
                            pusat kota Yogyakarta.
                            Kami berkomitmen memberikan pendidikan berkualitas yang mencetak generasi cerdas, berakhlak,
                            dan berdaya saing tinggi.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Ekstrakurikuler - background putih full width -->
        <section class="bg-white w-full py-12 shadow-sm">
            <div class="px-4 md:px-8 lg:px-16">
                <h2 class="text-2xl font-semibold text-center text-green-700 mb-6">Ekstrakurikuler Unggulan</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                    @foreach ($ekstra as $ekskul)
                        <div class="bg-gray-50 p-4 rounded-lg shadow hover:shadow-md transition">
                            <img src="{{ asset('storage/' . $ekskul->gambar) }}" alt="{{ $ekskul->nama }}"
                                class="h-36 w-full object-cover rounded-md mb-2">
                            <p class="font-medium">{{ $ekskul->nama }}</p>
                            <p class="font-normal">{{ $ekskul->deskripsi }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Section Galeri - background hijau muda full width -->
        <section class="bg-green-50 w-full py-12">
            <div class="px-4 md:px-8 lg:px-16 w-3/4 mx-auto">
                <h2 class="text-2xl font-semibold text-center text-green-700 mb-6">Galeri Terbaru</h2>

                <div class="swiper-container galeri-swiper relative">
                    <div class="swiper-wrapper">
                        @foreach ($galeriTerbaru as $galeri)
                            <div class="swiper-slide">
                                <div
                                    class="rounded-lg overflow-hidden shadow-lg transform transition-transform duration-300 hover:scale-105">
                                    <img src="{{ asset('storage/' . $galeri->gambar) }}" alt="{{ $galeri->judul }}"
                                        class="w-full h-64 object-cover">
                                    <div class="p-4 text-center text-sm font-medium text-gray-700 bg-white">
                                        {{ $galeri->judul }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="swiper-pagination mt-4"></div>

                </div>

                <div class="flex justify-center items-center mt-8 space-x-4">
                    <div class="swiper-button-prev custom-swiper-button-prev static"></div>
                    <a href="#"
                        class="text-green-700 font-medium hover:underline inline-flex items-center space-x-2">
                        Lihat Semua Galeri &rarr;
                    </a>
                    <div class="swiper-button-next custom-swiper-button-next static"></div>
                </div>
            </div>
        </section>

        <!-- Section Berita - background putih full width -->
        <section class="bg-white w-full py-12 shadow-sm">
            <div class="px-4 md:px-8 lg:px-16">
                <h2 class="text-2xl font-semibold text-center text-green-700 mb-6">Berita Terbaru</h2>
                <div class="grid md:grid-cols-3 gap-6">
                    @foreach ($beritaTerbaru as $berita)
                        <div class="bg-gray-50 rounded-lg shadow hover:shadow-md transition overflow-hidden">
                            <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}"
                                class="h-40 w-full object-cover">
                            <div class="p-4">
                                <h3 class="text-lg font-bold text-gray-800">{{ $berita->judul }}</h3>
                                <p class="text-sm text-gray-600 mt-1 line-clamp-3">{{ $berita->konten }}</p>
                                <a href=""
                                    class="text-green-600 text-sm font-medium mt-2 inline-block hover:underline">Baca
                                    selengkapnya</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Section Testimoni - background hijau muda full width -->
        <section class="bg-green-50 w-full py-12">
            <div class="px-4 md:px-8 lg:px-16">
                <h2 class="text-2xl font-semibold text-center text-green-700 mb-6">Apa Kata Wali Murid</h2>
                <div class="grid md:grid-cols-3 gap-6">
                    @foreach ($testimoni as $testi)
                        <div class="bg-white rounded-lg shadow p-4">
                            <p class="italic text-gray-700">"{{ $testi->pesan }}"</p>
                            <div class="mt-2 text-sm font-medium text-green-700">— {{ $testi->nama }}</div>
                            <p class="italic text-gray-700">"{{ $testi->status }}"</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

    </main>

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

    <script src="https://unpkg.com/boxicons@2.1.3/dist/boxicons.js"></script>
    <script src="js/nav.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/slider.js"></script>


</body>

</html>
