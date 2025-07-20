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

<body class="bg-gradient-to-br from-blue-50 via-sky-50 to-blue-100 overflow-x-hidden">
    <x-header/>


    {{-- Section Gambar --}}
    <section class="relative w-full h-[80vh] overflow-hidden">
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

    {{-- Nav Start --}}
    <x-navbar />
    {{-- Nav End --}}

    

    {{-- Main Content --}}
    <div class="container mx-auto px-4 py-10 mt-8">
        <!-- Header Section -->
        <div class="text-center mb-12" data-aos="fade-up">
            <h1 class="text-4xl font-extrabold text-blue-700 mb-3">GALERI SEKOLAH</h1>
            <div class="w-32 h-1 bg-gradient-to-r from-blue-500 to-sky-500 mx-auto rounded-full"></div>
            <p class="text-gray-600 mt-4 text-lg">Dokumentasi kegiatan dan fasilitas sekolah</p>
        </div>

        <!-- Gallery Stats Section -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-12">
            <div class="bg-white p-6 rounded-xl shadow-md text-center" data-aos="fade-up">
                <div class="text-4xl font-bold text-blue-600 mb-2">1,200+</div>
                <p class="text-gray-600">Foto</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-md text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="text-4xl font-bold text-blue-600 mb-2">50+</div>
                <p class="text-gray-600">Acara</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-md text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="text-4xl font-bold text-blue-600 mb-2">12</div>
                <p class="text-gray-600">Ekstrakurikuler</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-md text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="text-4xl font-bold text-blue-600 mb-2">24</div>
                <p class="text-gray-600">Fasilitas</p>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Gallery Section -->
            <main class="lg:w-2/3">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                    @foreach ($galeri as $index => $galeriItem)
                        <div class="group relative bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden"
                            data-aos="fade-up" data-aos-delay="{{ ($index % 6) * 100 + 100 }}">
                            <div class="relative overflow-hidden">
                                <img src="{{ asset('storage/' . $galeriItem->gambar) }}"
                                    alt="{{ $galeriItem->judul }}"
                                    class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-105">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                                    <p class="text-white text-sm">{{ $galeriItem->deskripsi }}</p>
                                </div>
                                <div class="absolute top-3 left-3">
                                    <span
                                        class="bg-blue-500 text-white px-3 py-1 rounded-full text-xs font-semibold shadow-md">
                                        <i class="ri-image-line mr-1"></i>{{ $galeriItem->kategori }}
                                    </span>
                                </div>
                                <div class="absolute top-3 right-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <button class="bg-white/90 text-blue-600 p-2 rounded-full shadow-md hover:bg-white transition">
                                        <i class="ri-fullscreen-line"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="p-4">
                                <h3 class="font-bold text-gray-800 text-center line-clamp-2 group-hover:text-blue-600 transition-colors duration-300">
                                    {{ $galeriItem->judul }}
                                </h3>
                                <p class="text-center text-sm text-gray-500 mt-2">
                                    <i class="ri-calendar-line mr-1"></i>{{ \Carbon\Carbon::parse($galeriItem->tanggal)->format('d M Y') }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="flex justify-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="bg-white rounded-xl shadow-md px-6 py-3">
                        {{ $galeri->links('paginationGaleri::tailwind') }}
                    </div>
                </div>
            </main>

            <!-- Sidebar -->
            <aside class="lg:w-1/3 space-y-8">

                <!-- Contact Section -->
                <div class="bg-white p-6 rounded-xl shadow-lg border border-blue-100" data-aos="fade-left"
                    data-aos-delay="100">
                    <h2 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                        <i class="ri-contacts-line mr-2 text-blue-600"></i>
                        KONTAK
                    </h2>
                    <div class="space-y-4 text-sm text-gray-600">
                        <div class="flex items-start space-x-3">
                            <i class="ri-home-3-fill text-blue-600 mt-1"></i>
                            <div>
                                <p class="font-semibold text-gray-700">Alamat:</p>
                                <p>Jl. Ronodigdayan No.60, Bausasran, Kec. Danurejan, Kota Yogyakarta, 55211</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class="ri-mail-fill text-blue-600 mt-1"></i>
                            <div>
                                <p class="font-semibold text-gray-700">Email:</p>
                                <p>123@gmail.com</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class="ri-global-line text-blue-600 mt-1"></i>
                            <div>
                                <p class="font-semibold text-gray-700">Website:</p>
                                <p>123.sch.id</p>
                            </div>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-700 mb-2">Media Sosial:</p>
                            <div class="flex gap-4">
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

                <!-- Calendar Section -->
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
            </aside>
        </div>
    </div>

    <!-- Photo Gallery Modal -->
    <div id="galleryModal" class="fixed inset-0 bg-black/90 z-50 hidden items-center justify-center p-4">
        <div class="relative max-w-5xl w-full">
            <button id="closeModal" class="absolute -top-12 right-0 text-white text-3xl hover:text-blue-300 transition">&times;</button>
            <img id="modalImage" src="" alt="" class="w-full max-h-[80vh] object-contain">
            <div class="text-white mt-4 text-center">
                <h3 id="modalTitle" class="text-2xl font-bold"></h3>
                <p id="modalDate" class="text-blue-200"></p>
                <p id="modalDesc" class="mt-2"></p>
            </div>
        </div>
    </div>


    {{-- Footer --}}
    <x-footer />
    {{-- Footer End --}}

    <script src="https://unpkg.com/boxicons@2.1.3/dist/boxicons.js"></script>
    <script src="../js/kalender.js"></script>
    <script src="{{ asset('js/nav.js') }}"></script>
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
