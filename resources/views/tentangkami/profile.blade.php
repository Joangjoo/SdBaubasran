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
    {{-- Header --}}
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

    {{-- Nav --}}
    <x-navbar />
    {{-- Nav End--}}

    {{-- Section Gambar --}}
    <section class="relative w-full h-[80vh] overflow-hidden">
        <div class="absolute inset-0 bg-black/40 z-10"></div>
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
    {{-- Section Gambar End --}}


    <div class="container mx-auto px-4 mt-12">
        <div class="flex justify-center items-center mt-10">
            <div class="bg-gradient-to-r from-green-600 to-teal-500 px-16 py-6 rounded-xl shadow-xl">
                <span class="text-white text-3xl font-extrabold tracking-tight">PROFIL SEKOLAH</span>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex flex-col lg:grid lg:grid-cols-3 gap-8 py-10" data-aos="fade-up" data-aos-delay="100">
            <!-- Main Profile Section -->
            <main class="lg:col-span-2 bg-white p-8 rounded-2xl shadow-lg border border-gray-100" data-aos="fade-up" data-aos-delay="200">
                <h1 class="text-3xl font-extrabold text-gray-800 mb-6" data-aos="fade-up" data-aos-delay="250">Profil Sekolah</h1>
                <div class="mb-6" data-aos="zoom-in" data-aos-delay="300">
                    <iframe class="w-full aspect-video rounded-lg shadow-md" src="https://www.youtube.com/embed/insd7oa41iM" allowfullscreen></iframe>
                </div>
                <div class="text-base text-gray-700 space-y-3" data-aos="fade-up" data-aos-delay="350">
                    @php $delay = 400; @endphp
                    @foreach ([
                        'Nama Sekolah' => 'SD Muhammadiyah Bausasran',
                        'Jenis Sekolah' => 'NEGERI',
                        'NSS' => 'xxxxxx',
                        'NPSN' => '20403418',
                        'Tanggal Berdiri' => '1977-09-01',
                        'Akreditasi' => 'A',
                        'Izin Operasional' => '2877/1.1828/DIY-16/77',
                        'Luas Tanah' => '14.000 meter persegi',
                        'Kurikulum' => 'KURIKULUM MERDEKA',
                        'Jumlah Guru & Staf' => 'x',
                        'Jumlah Siswa' => 'x',
                        'Jumlah Rombel' => 'x',
                        'Jumlah Prestasi' => '0',
                        'Slogan Sekolah' => '-',
                        'Kepsek' => 'xxxxx',
                        'NIP' => 'xxxxx',
                        'Status Kepegawaian' => 'PNS',
                        'Pendidikan Terakhir' => 'S1',
                    ] as $label => $value)
                        <p class="flex items-center" data-aos="fade-up" data-aos-delay="{{ $delay += 30 }}">
                            <span class="font-semibold text-gray-800 w-40">{{ $label }}</span>
                            <span class="text-gray-600">: {{ $value }}</span>
                        </p>
                    @endforeach
                </div>

                <div class="mt-8" data-aos="fade-up" data-aos-delay="{{ $delay += 50 }}">
                    <h1 class="text-2xl font-bold text-gray-800 mb-4">Deskripsi Sekolah</h1>
                    <p class="text-gray-600 leading-relaxed text-justify">
                        SD Muhammadiyah Bausasran terletak sangat strategis berada di pusat kecamatan sehingga mudah
                        dijangkau oleh alat transportasi. Minat para siswa untuk sekolah di SD Muhammadiyah Bausasran
                        sangatlah banyak, karena mutu kualitas pendidikannya yang mumpuni. Disamping itu juga didukung oleh
                        sarana dan prasarana yang memadai.
                    </p>
                </div>
            </main>

            <!-- Sidebar -->
            <aside class="space-y-8 lg:col-span-1">
                <!-- Contact Section -->
                <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-100" data-aos="fade-right" data-aos-delay="100">
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
                                <a href="#" class="text-blue-600 hover:text-green-800 transition-colors">
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
                <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-100" data-aos="fade-right" data-aos-delay="200">
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
                    <div id="calendar-body" class="grid grid-cols-7 text-xs text-center border border-gray-200 rounded-lg overflow-hidden">
                    </div>
                </div>

                <!-- News Section -->
                <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-100 max-h-[700px] overflow-y-auto" data-aos="fade-right" data-aos-delay="300">
                    <h2 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                        <i class="ri-newspaper-line mr-2 text-green-600"></i>
                        BERITA TERPOPULER
                    </h2>
                    <div class="space-y-6">
                        @foreach ($berita as $index => $item)
                            <div class="group cursor-pointer" data-aos="fade-right" data-aos-delay="{{ $index * 100 + 400 }}">
                                <div class="bg-gray-50 rounded-xl p-4 hover:bg-green-50 transition-all duration-300 border hover:border-green-200">
                                    <h3 class="font-semibold text-gray-800 mb-3 group-hover:text-green-600 transition-colors duration-300 text-center leading-relaxed">
                                        {{ $item->judul }}
                                    </h3>
                                    <div class="flex justify-center mb-3">
                                        <div class="relative overflow-hidden rounded-lg shadow-md">
                                            <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" class="w-24 h-24 object-cover group-hover:scale-105 transition-transform duration-300">
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-center text-xs text-gray-500 space-x-2">
                                        <i class="ri-calendar-line text-green-600"></i>
                                        <span>{{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}</span>
                                        <span>•</span>
                                        <i class="ri-time-line text-green-600"></i>
                                        <span>{{ \Carbon\Carbon::parse($item->tanggal)->format('H:i') }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </aside>
        </div>
    </div>

    {{-- Footer --}}
    <x-footer />
    {{-- Footer end --}}



    <script src="https://unpkg.com/boxicons@2.1.3/dist/boxicons.js"></script>
    <script src="js/kalender.js"></script>
    <script src="js/nav.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
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
