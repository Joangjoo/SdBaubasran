<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Sekolah</title>
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
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

            {{-- PPDB SD --}}
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

    <div class="max-w-7xl mx-auto px-4 py-8 grid grid-cols-1 md:grid-cols-4 gap-6">
        <aside class="space-y-6 md:col-span-1">
            <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100" data-aos="fade-right"
                data-aos-delay="100">
                <h2 class="text-xl font-bold mb-4 text-gray-800 flex items-center">
                    <i class="ri-contacts-line mr-2 text-green-600"></i>
                    KONTAK
                </h2>
                <div class="space-y-4 text-sm text-gray-600">
                    <div class="flex items-start space-x-3">
                        <i class="ri-home-3-fill text-green-600 mt-1"></i>
                        <div>
                            <p class="font-semibold text-gray-700">Alamat:</p>
                            <p>Jl. Ronodigdayan No.60, Bausasran, Kec. Danurejan, Kota Yogyakarta, 55211</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3">
                        <i class="ri-mail-fill text-green-600 mt-1"></i>
                        <div>
                            <p class="font-semibold text-gray-700">Email:</p>
                            <p>123@gmail.com</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3">
                        <i class="ri-global-line text-green-600 mt-1"></i>
                        <div>
                            <p class="font-semibold text-gray-700">Website:</p>
                            <p>123.sch.id</p>
                        </div>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-700 mb-2">Media Sosial:</p>
                        <div class="flex gap-3">
                            <a href="#" class="text-blue-600 hover:text-blue-800 transition-colors">
                                <i class="ri-facebook-fill text-xl"></i>
                            </a>
                            <a href="#" class="text-pink-600 hover:text-pink-800 transition-colors">
                                <i class="ri-instagram-fill text-xl"></i>
                            </a>
                            <a href="#" class="text-red-600 hover:text-red-800 transition-colors">
                                <i class="ri-youtube-fill text-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100" data-aos="fade-right"
                data-aos-delay="200">
                <h2 class="text-xl font-bold mb-4 text-center text-gray-800 flex items-center justify-center">
                    <i class="ri-calendar-line mr-2 text-green-600"></i>
                    KALENDER
                </h2>
                <p id="calendar-title" class="text-center font-semibold text-lg mb-4 text-green-600">Juni 2025</p>

                <div class="grid grid-cols-7 text-xs text-center font-bold mb-2">
                    <div class="bg-green-100 text-green-800 py-2 rounded-tl-lg">Min</div>
                    <div class="bg-green-100 text-green-800 py-2">Sen</div>
                    <div class="bg-green-100 text-green-800 py-2">Sel</div>
                    <div class="bg-green-100 text-green-800 py-2">Rab</div>
                    <div class="bg-green-100 text-green-800 py-2">Kam</div>
                    <div class="bg-green-100 text-green-800 py-2">Jum</div>
                    <div class="bg-green-100 text-green-800 py-2 rounded-tr-lg">Sab</div>
                </div>
                <div id="calendar-body"
                    class="grid grid-cols-7 text-xs text-center border border-gray-200 rounded-lg overflow-hidden">
                </div>
            </div>
        </aside>
        <main class="col-span-2 px-4 md:px-8">
            <div class="text-center mb-8" data-aos="fade-up">
                <h1 class="text-4xl font-bold text-green-600 mb-2">GALERI SEKOLAH</h1>
                <div class="w-24 h-1 bg-gradient-to-r from-green-400 to-blue-500 mx-auto rounded-full"></div>
                <p class="text-gray-600 mt-4">Dokumentasi kegiatan dan fasilitas sekolah</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                @foreach ($galeri as $index => $galeriItem)
                    <div class="group relative bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden transform hover:-translate-y-2"
                        data-aos="fade-up" data-aos-delay="{{ ($index % 6) * 100 + 100 }}">
                        <div class="relative overflow-hidden">
                            <img src="{{ asset('storage/' . $galeriItem->gambar) }}" alt="{{ $galeriItem->judul }}"
                                class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            </div>
                            <div class="absolute top-4 left-4">
                                <span
                                    class="bg-green-500 text-white px-3 py-1 rounded-full text-xs font-semibold shadow-lg">
                                    <i class="ri-image-line mr-1"></i>Galeri
                                </span>
                            </div>
                        </div>
                        <div class="p-5">
                            <h3
                                class="font-bold text-gray-800 mb-2 line-clamp-2 group-hover:text-green-600 transition-colors duration-300">
                                {{ $galeriItem->judul }}
                            </h3>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="flex justify-center" data-aos="fade-up" data-aos-delay="400">
                <div class="bg-white rounded-xl shadow-lg px-6 py-3">
                    {{ $galeri->links('paginationGaleri::tailwind') }}
                </div>
            </div>
        </main>

        <aside
            class="order-3 lg:col-span-1 bg-white p-6 rounded-xl shadow-lg border border-gray-100 max-h-[700px] overflow-y-auto"
            data-aos="fade-left" data-aos-delay="300">
            <h2 class="text-xl font-bold mb-4 text-gray-800 flex items-center">
                <i class="ri-newspaper-line mr-2 text-green-600"></i>
                BERITA TERPOPULER
            </h2>
            <div class="space-y-6">
                @foreach ($berita as $index => $item)
                    <div class="group cursor-pointer" data-aos="fade-left"
                        data-aos-delay="{{ min($index * 50, 300) }}">
                        <div
                            class="bg-gray-50 rounded-xl p-4 hover:bg-green-50 transition-all duration-300 border hover:border-green-200">
                            <h3
                                class="font-semibold text-gray-800 mb-3 group-hover:text-green-600 transition-colors duration-300 text-center leading-relaxed">
                                {{ $item->judul }}
                            </h3>
                            <div class="flex justify-center mb-3">
                                <div class="relative overflow-hidden rounded-lg shadow-md">
                                    <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}"
                                        class="w-24 h-24 object-cover group-hover:scale-105 transition-transform duration-300">
                                </div>
                            </div>
                            <div class="flex items-center justify-center text-xs text-gray-500 space-x-2">
                                <i class="ri-calendar-line text-green-600"></i>
                                <span>{{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </aside>
    </div>

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
    <script src="js/kalender.js"></script>
    <script src="js/nav.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            offset: window.innerWidth < 768 ? 5 : 50
        });

    </script>
</body>

</html>
