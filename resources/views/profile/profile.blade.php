<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
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

            <li class="relative group">
                <a href="{{ url('/galeri') }}"
                    class="flex items-center hover:text-blue-600 transition-colors duration-200">
                    GALERI
                    <svg class="ml-1 w-3 h-3 transform transition-transform duration-200" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </a>
                <ul
                    class="absolute left-0 mt-2 w-40 bg-white shadow-lg rounded-md border opacity-0 group-hover:opacity-100 invisible group-hover:visible transform -translate-y-2 group-hover:translate-y-0 transition-all duration-200 z-50">
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 transition-colors duration-200 rounded-t-md">
                            Foto
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 transition-colors duration-200 rounded-b-md">
                            Video
                        </a>
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

        <div class="md:hidden flex justify-end w-full">
            <button id="menu-toggle" class="text-gray-700 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </nav>

    <div id="mobile-menu" class="hidden md:hidden bg-gray-100 w-[90%] mx-auto rounded-lg shadow-md mt-2">
        <ul class="flex flex-col space-y-2 p-4 text-sm font-medium text-gray-700">
            <li><a href="#"
                    class="block px-4 py-2 hover:bg-gray-200 rounded transition-colors duration-200">HOME</a></li>

            <li class="relative">
                <button type="button"
                    class="flex justify-between items-center w-full px-4 py-2 dropdown-trigger-mobile hover:bg-gray-200 rounded transition-colors duration-200"
                    data-dropdown="mobile-profil">
                    PROFIL
                    <svg class="w-3 h-3 transition-transform duration-200" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <ul id="mobile-profil" class="hidden flex-col ml-4 space-y-1 text-sm mt-2">
                    <li><a href="#"
                            class="block px-4 py-2 hover:text-blue-600 hover:bg-gray-200 rounded transition-colors duration-200">Visi
                            & Misi</a></li>
                    <li><a href="#"
                            class="block px-4 py-2 hover:text-blue-600 hover:bg-gray-200 rounded transition-colors duration-200">Sejarah</a>
                    </li>
                </ul>
            </li>

            <li class="relative">
                <button type="button"
                    class="flex justify-between items-center w-full px-4 py-2 dropdown-trigger-mobile hover:bg-gray-200 rounded transition-colors duration-200"
                    data-dropdown="mobile-galeri">
                    GALERI
                    <svg class="w-3 h-3 transition-transform duration-200" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <ul id="mobile-galeri" class="hidden flex-col ml-4 space-y-1 text-sm mt-2">
                    <li><a href="#"
                            class="block px-4 py-2 hover:text-blue-600 hover:bg-gray-200 rounded transition-colors duration-200">Foto</a>
                    </li>
                    <li><a href="#"
                            class="block px-4 py-2 hover:text-blue-600 hover:bg-gray-200 rounded transition-colors duration-200">Video</a>
                    </li>
                </ul>
            </li>

            <li class="relative">
                <button type="button"
                    class="flex justify-between items-center w-full px-4 py-2 dropdown-trigger-mobile hover:bg-gray-200 rounded transition-colors duration-200"
                    data-dropdown="mobile-informasi">
                    INFORMASI
                    <svg class="w-3 h-3 transition-transform duration-200" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <ul id="mobile-informasi" class="hidden flex-col ml-4 space-y-1 text-sm mt-2">
                    <li><a href="#"
                            class="block px-4 py-2 hover:text-blue-600 hover:bg-gray-200 rounded transition-colors duration-200">Berita</a>
                    </li>
                    <li><a href="#"
                            class="block px-4 py-2 hover:text-blue-600 hover:bg-gray-200 rounded transition-colors duration-200">Pengumuman</a>
                    </li>
                </ul>
            </li>

            <li><a href="#"
                    class="block px-4 py-2 hover:bg-gray-200 rounded transition-colors duration-200">PPDB SD</a></li>
        </ul>
    </div>


    <div class="flex justify-center items-center mt-8">
        <div class="bg-gradient-to-r from-green-400 to-[#83C331] px-12 py-4">
            <span class="text-white text-2xl ">PROFIL SEKOLAH</span>
        </div>
    </div>

    <div class="flex flex-col lg:grid lg:grid-cols-4 gap-4 px-4 py-6">

        <main class="order-1 lg:order-2 lg:col-span-2">
            <h1 class="text-2xl font-bold mb-4">Profil Sekolah</h1>
            <div class="mb-4">
                <iframe class="w-full aspect-video rounded" src="https://www.youtube.com/embed/insd7oa41iM"
                    allowfullscreen></iframe>
            </div>
            <div class="text-sm space-y-1">
                <p><strong>Nama Sekolah</strong> : SD Muhammadiyah Bausasran</p>
                <p><strong>Jenis Sekolah</strong> : NEGERI</p>
                <p><strong>NSS</strong> : xxxxxx</p>
                <p><strong>NPSN</strong> : 20403418</p>
                <p><strong>Tanggal Berdiri</strong> : 1977-09-01</p>
                <p><strong>Akreditasi</strong> : A</p>
                <p><strong>Izin Operasional</strong> : 2877/1.1828/DIY-16/77</p>
                <p><strong>Luas Tanah</strong> : 14.000 meter persegi</p>
                <p><strong>Kurikulum</strong> : KURIKULUM MERDEKA</p>
                <p><strong>Jumlah Guru & Staf</strong> : x</p>
                <p><strong>Jumlah Siswa</strong> : x</p>
                <p><strong>Jumlah Rombel</strong> : x</p>
                <p><strong>Jumlah Prestasi</strong> : 0</p>
                <p><strong>Slogan Sekolah</strong> : -</p>
                <p><strong>Kepsek</strong> : xxxxx</p>
                <p><strong>NIP</strong> : xxxxx</p>
                <p><strong>Status Kepegawaian</strong> : PNS</p>
                <p><strong>Pendidikan Terakhir</strong> : S1</p>
            </div>

            <div class="mt-6">
                <h1 class="text-2xl opacity-80 mb-2">Deskripsi Sekolah</h1>
                <span class="opacity-80">SD Muhammadiyah Baubasran terletak sangat strategis berada dipusat kecamatan
                    sehingga mudah dijangkau oleh alat transportasi, minat para siswa untuk sekolah di di SD
                    Muhammadiyah Baubasran sangatlah banyak, karena mutu kualitas pendidikannya yang mumpuni, disamping
                    itu juga didukung oleh sarana dan prasarana yang memadai</span>
            </div>
        </main>

        <aside class="order-2 lg:order-1 lg:col-span-1 space-y-4">
            <div class="bg-gray-100 p-4 rounded shadow">
                <h2 class="text-lg font-semibold mb-2">KONTAK</h2>
                <p><strong> <i class="ri-home-3-fill"></i> Alamat :</strong>
                    <br>Jl. Ronodigdayan No.60, Bausasran, Kec. Danurejan, Kota Yogyakarta, 55211
                </p>
                <p class="mt-2"><strong><i class="ri-mail-fill"></i> Email :</strong>
                    <br>123@gmail.com
                </p>
                <p class="mt-2">
                    <strong><i class="ri-global-line"></i> Website :</strong>
                    <br>123.sch.id
                </p>
                <p class="mt-2"><strong>Media Sosial :</strong></p>
                <ul class="text-sm list-none">
                    <li> <i class="ri-facebook-fill"></i> Facebook</li>
                    <li> <i class="ri-instagram-fill"></i> Instagram</li>
                    <li> <i class="ri-youtube-fill"></i> Youtube</li>
                </ul>
            </div>

            <div class="bg-gray-100 p-4 rounded shadow">
                <h2 class="text-lg font-semibold mb-2 text-center">KALENDER</h2>
                <p id="calendar-title" class="text-center font-semibold text-lg mb-2">April 2025</p>

                <div class="grid grid-cols-7 text-sm text-center font-medium">
                    <div class="bg-green-200 py-1">Mg</div>
                    <div class="bg-green-200 py-1">Sn</div>
                    <div class="bg-green-200 py-1">Sl</div>
                    <div class="bg-green-200 py-1">Rb</div>
                    <div class="bg-green-200 py-1">Km</div>
                    <div class="bg-green-200 py-1">Jm</div>
                    <div class="bg-green-200 py-1">Sb</div>
                </div>
                <div id="calendar-body" class="grid grid-cols-7 text-sm text-center mt-1"></div>
            </div>
        </aside>

        <aside class="order-3 lg:col-span-1 bg-gray-100 p-4 rounded shadow max-h-[700px] overflow-y-auto">
            <h2 class="text-lg font-semibold mb-2">BERITA TERPOPULER</h2>
            <div class="space-y-4 text-sm ">
                @foreach ($berita as $item)
                    <div>
                        <p class="font-medium mb-2 text-center">{{ $item->judul }}</p>
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('storage/' . $item->gambar) }}" alt="" class="w-1/2">
                        </div>
                        <p class="text-gray-500 text-xs mt-2 text-center">
                            Tanggal {{ \Carbon\Carbon::parse($item->tanggal)->format('d-m-Y \p\u\k\u\l H:i') }}
                        </p>
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

</body>

</html>
