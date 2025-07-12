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
    {{-- Header --}}
    <div class="flex items-center gap-4 bg-[#06923E] px-6 py-4 shadow-sm">
        <div class="ml-2">
            <img src="../assets/logoBaru.png" alt="Logo SD" class="w-16 h-16" />
        </div>
        <div>
            <h1 class="text-xl font-semibold text-gray-100 ">SD MUHAMMADIYAH BAUSASRAN</h1>
            <p class="text-sm text-gray-300">Kec. Danurejan, Kota Yogyakarta, Daerah Istimewa Yogyakarta</p>
        </div>
    </div>
    {{-- Header End --}}

    {{-- Nav Start --}}
    <x-navbar />
    {{-- Nav End --}}

    {{-- Main --}}
    <div class="container mx-auto px-4 py-10 mt-14">
        <!-- Header Section -->
        <div class="text-center mb-12" data-aos="fade-up">
            <h1 class="text-4xl font-extrabold text-green-600 mb-3">GALERI SEKOLAH</h1>
            <div class="w-32 h-1 bg-gradient-to-r from-green-500 to-teal-500 mx-auto rounded-full"></div>
            <p class="text-gray-600 mt-4 text-lg">Dokumentasi kegiatan dan fasilitas sekolah</p>
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
                                    class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                </div>
                                <div class="absolute top-3 left-3">
                                    <span
                                        class="bg-green-500 text-white px-3 py-1 rounded-full text-xs font-semibold shadow-md">
                                        <i class="ri-image-line mr-1"></i>Galeri
                                    </span>
                                </div>
                            </div>
                            <div class="p-4">
                                <h3
                                    class="font-bold text-gray-800 text-center line-clamp-2 group-hover:text-green-600 transition-colors duration-300">
                                    {{ $galeriItem->judul }}
                                </h3>
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
                <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100" data-aos="fade-left"
                    data-aos-delay="100">
                    <h2 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
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
                <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100" data-aos="fade-left"
                    data-aos-delay="200">
                    <h2 class="text-xl font-bold text-gray-800 mb-4 text-center flex items-center justify-center">
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

                <!-- News Section -->
                <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100 max-h-[600px] overflow-y-auto"
                    data-aos="fade-left" data-aos-delay="300">
                    <h2 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
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
                                            <img src="{{ asset('storage/' . $item->gambar) }}"
                                                alt="{{ $item->judul }}"
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
                </div>
            </aside>
        </div>
    </div>
    {{-- Main End --}}

    {{-- Footer --}}
    <x-footer />
    {{-- Footer End --}}

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
