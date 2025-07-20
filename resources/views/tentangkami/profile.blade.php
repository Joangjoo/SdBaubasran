<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
</head>

<body class="bg-gradient-to-br from-emerald-50 via-green-50 to-teal-50 overflow-x-hidden">
    <x-header />



    {{-- Section Gambar --}}
    <section class="relative w-full h-[80vh] overflow-x-hidden">
        <div class="absolute inset-0 bg-black/40 z-10"></div>
        <div class="absolute inset-0 w-full h-full z-0">
            @if ($gambarHeader)
                <img src="{{ asset('storage/' . $gambarHeader->gambar) }}" alt="Header Halaman"
                    class="w-full h-full object-cover" />
            @else
                <img src="{{ asset('assets/default-header.jpg') }}" alt="Header Halaman Default"
                    class="w-full h-full object-cover" />
            @endif
        </div>



    </section>
    {{-- Section Gambar End --}}

    {{-- Nav --}}
    <x-navbar />
    {{-- Nav End --}}

    {{-- Main --}}
    <div class="relative bg-gradient-to-br from-blue-50 to-white py-12 px-4 sm:px-6 lg:px-8 overflow-x-hidden">
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div
                class="absolute top-20 left-10 w-40 h-40 bg-blue-200 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-float-slow">
            </div>
            <div
                class="absolute bottom-20 right-20 w-60 h-60 bg-sky-100 rounded-full mix-blend-multiply filter blur-xl opacity-15 animate-float-medium">
            </div>
        </div>
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col lg:grid lg:grid-cols-3 gap-8" data-aos="fade-up">
                <main class="lg:col-span-2 bg-white p-8 rounded-2xl shadow-xl border border-blue-50" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="flex flex-col md:flex-row gap-6 mb-8">
                        <div class="w-full md:w-1/3 flex justify-center">
                            <div
                                class="w-40 h-40 bg-blue-100 rounded-full border-4 border-blue-200 shadow-md flex items-center justify-center overflow-hidden">
                                <img src="assets/logoBaru.png" alt="School Logo"
                                    class="w-full h-full object-contain p-4">
                            </div>
                        </div>
                        <div class="w-full md:w-2/3">
                            <h1 class="text-3xl font-bold text-blue-800 mb-2">SD Muhammadiyah Bausasran</h1>
                            <div class="h-1.5 w-24 bg-gradient-to-r from-blue-400 to-sky-400 rounded-full mb-4"></div>
                            <p class="text-gray-600 mb-4">Terakreditasi A dengan kurikulum merdeka yang berfokus pada
                                pengembangan karakter siswa</p>
                            <div class="flex flex-wrap gap-2">
                                <span
                                    class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Swasta</span>
                                <span
                                    class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Akreditasi
                                    A</span>
                                <span
                                    class="bg-sky-100 text-sky-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Kurikulum
                                    Merdeka</span>
                            </div>
                        </div>
                    </div>
                    <div class="mb-8 rounded-xl overflow-hidden shadow-lg" data-aos="zoom-in">
                        <div class="relative w-full" style="padding-top: 56.25%;">
                            <iframe class="absolute top-0 left-0 w-full h-full"
                                src="https://www.youtube.com/embed/insd7oa41iM" frameborder="0"
                                allowfullscreen></iframe>
                        </div>

                        <div class="bg-blue-50 p-3 text-center">
                            <p class="text-sm text-blue-600 font-medium">Video Profil Sekolah</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        @foreach ($profilDetails as $detail)
                            <div class="bg-blue-50/50 p-4 rounded-lg border border-blue-100" data-aos="fade-up">
                                <h3 class="font-semibold text-blue-700 mb-1">{{ $detail->label }}</h3>
                                <p class="text-gray-600">{{ $detail->value }}</p>
                            </div>
                        @endforeach
                    </div>
                    <div class="bg-sky-50/50 p-6 rounded-xl border border-sky-100" data-aos="fade-up">
                        <h2 class="text-2xl font-bold text-blue-800 mb-4 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-blue-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                            Tentang Sekolah Kami
                        </h2>
                        <div class="prose prose-blue max-w-none text-gray-600">
                            <p>
                                SD Muhammadiyah Bausasran terletak sangat strategis di pusat kecamatan sehingga mudah
                                dijangkau oleh berbagai alat transportasi. Sekolah kami memiliki minat siswa yang tinggi
                                karena kualitas pendidikan yang unggul dan didukung oleh sarana prasarana yang memadai.
                            </p>
                            <p>
                                Dengan luas tanah 14.000 meter persegi, kami menyediakan lingkungan belajar yang nyaman
                                dan kondusif untuk perkembangan akademik dan karakter siswa. Kurikulum Merdeka yang kami
                                terapkan memungkinkan pengembangan potensi siswa secara optimal.
                            </p>
                        </div>
                    </div>
                    <div class="mt-8 bg-white p-6 rounded-xl border border-blue-100 shadow-sm" data-aos="fade-up">
                        <h2 class="text-xl font-bold text-blue-800 mb-4">Kepala Sekolah</h2>
                        <div class="flex flex-col md:flex-row gap-6 items-center">
                            <div
                                class="w-24 h-24 bg-blue-100 rounded-full border-4 border-blue-200 overflow-hidden shadow-md">
                                <img src="{{ asset('storage/' . $sambutan->foto) }}" alt="Kepala Sekolah"
                                    class="w-full h-full object-cover">
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-semibold text-gray-800">xxxxx</h3>
                                <p class="text-gray-600 text-sm mb-2">NIP: xxxxx</p>
                                <div class="flex flex-wrap gap-2">
                                    <span
                                        class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">PNS</span>
                                    <span
                                        class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">S1</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

                <!-- Sidebar -->
                <aside class="space-y-8 lg:col-span-1">
                    <!-- Contact Section -->
                    <div class="bg-white p-6 rounded-2xl shadow-xl border border-blue-50" data-aos="fade-left">
                        <h2 class="text-xl font-bold text-blue-800 mb-4 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            Kontak Kami
                        </h2>
                        <div class="space-y-4">
                            <div class="flex items-start gap-3 p-3 bg-blue-50/50 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mt-0.5 text-blue-500"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <div>
                                    <p class="font-medium text-blue-700">Alamat</p>
                                    <p class="text-sm text-gray-600">Jl. Ronodigdayan No.60, Bausasran, Kec. Danurejan,
                                        Kota Yogyakarta, 55211</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3 p-3 bg-blue-50/50 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mt-0.5 text-blue-500"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <div>
                                    <p class="font-medium text-blue-700">Email</p>
                                    <p class="text-sm text-gray-600">123@gmail.com</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3 p-3 bg-blue-50/50 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mt-0.5 text-blue-500"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                </svg>
                                <div>
                                    <p class="font-medium text-blue-700">Website</p>
                                    <p class="text-sm text-gray-600">123.sch.id</p>
                                </div>
                            </div>

                            <div class="pt-3">
                                <p class="font-medium text-blue-700 mb-2">Media Sosial</p>
                                <div class="flex justify-center gap-4">
                                    <a href="#" class="text-blue-600 hover:text-blue-800 transition-colors"
                                        aria-label="Facebook">
                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" />
                                        </svg>
                                    </a>
                                    <a href="#" class="text-pink-600 hover:text-pink-800 transition-colors"
                                        aria-label="Instagram">
                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
                                        </svg>
                                    </a>
                                    <a href="#" class="text-red-600 hover:text-red-800 transition-colors"
                                        aria-label="YouTube">
                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Calendar Section -->
                    <div class="bg-white p-6 rounded-2xl shadow-xl border border-blue-50" data-aos="fade-left"
                        data-aos-delay="100">
                        <h2 class="text-xl font-bold text-blue-800 mb-4 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            Kalender Akademik
                        </h2>
                        <div class="text-center mb-4">
                            <div class="flex justify-between items-center mb-2">
                                <button class="text-blue-500 hover:text-blue-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 19l-7-7 7-7" />
                                    </svg>
                                </button>
                                <h3 class="text-lg font-semibold text-blue-700">Juni 2025</h3>
                                <button class="text-blue-500 hover:text-blue-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                </button>
                            </div>
                            <div class="grid grid-cols-7 gap-1 text-xs font-medium">
                                <div class="py-1 text-blue-500">M</div>
                                <div class="py-1 text-blue-500">S</div>
                                <div class="py-1 text-blue-500">S</div>
                                <div class="py-1 text-blue-500">R</div>
                                <div class="py-1 text-blue-500">K</div>
                                <div class="py-1 text-blue-500">J</div>
                                <div class="py-1 text-blue-500">S</div>
                            </div>
                            <div class="grid grid-cols-7 gap-1 text-sm">
                                @for ($i = 1; $i <= 30; $i++)
                                    <div
                                        class="aspect-square flex items-center justify-center rounded-full
                                    @if ($i == 17) bg-blue-100 text-blue-800 font-bold border border-blue-200 @endif
                                    @if ($i == 12) bg-red-100 text-red-800 font-bold border border-red-200 @endif">
                                        {{ $i }}
                                    </div>
                                @endfor
                            </div>
                        </div>
                        <div class="space-y-2 mt-4">
                            <div class="flex items-center">
                                <div class="w-3 h-3 bg-blue-500 rounded-full mr-2"></div>
                                <span class="text-xs text-gray-600">Kegiatan Sekolah</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-3 h-3 bg-red-500 rounded-full mr-2"></div>
                                <span class="text-xs text-gray-600">Libur Nasional</span>
                            </div>
                        </div>
                    </div>

                    <!-- Popular News -->
                    <div class="bg-white p-6 rounded-2xl shadow-xl border border-blue-50" data-aos="fade-left"
                        data-aos-delay="200">
                        <h2 class="text-xl font-bold text-blue-800 mb-4 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                            </svg>
                            Berita Terpopuler
                        </h2>
                        <div class="space-y-4">
                            @foreach ($berita as $item)
                                <a href="#" class="group block">
                                    <div class="flex gap-3 p-2 rounded-lg hover:bg-blue-50 transition-colors">
                                        <div
                                            class="flex-shrink-0 w-16 h-16 rounded-lg overflow-hidden border border-blue-100">
                                            <img src="{{ asset('storage/' . $item->gambar) }}"
                                                alt="{{ $item->judul }}"
                                                class="w-full h-full object-cover group-hover:scale-105 transition-transform">
                                        </div>
                                        <div>
                                            <h3
                                                class="font-medium text-blue-800 group-hover:text-blue-600 line-clamp-2">
                                                {{ $item->judul }}</h3>
                                            <div class="flex items-center text-xs text-gray-500 mt-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                </svg>
                                                <span>{{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                        <div class="mt-4 text-center">
                            <a href="#"
                                class="text-sm text-blue-600 hover:text-blue-800 font-medium inline-flex items-center">
                                Lihat semua berita
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    {{-- Main End --}}

    {{-- Footer --}}
    <x-footer />
    {{-- Footer end --}}



    <script src="https://unpkg.com/boxicons@2.1.3/dist/boxicons.js"></script>
    <script src="js/kalender.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="{{ asset('js/nav.js') }}"></script>
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            offset: 50
        });
    </script>

</body>

</html>
