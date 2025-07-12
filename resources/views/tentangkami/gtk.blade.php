<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="./css/gtk.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <title>Struktur Organisasi</title>

</head>

<body>
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

    {{-- Section Gambar --}}
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
    {{-- Section Gambar End --}}

    {{-- Nav Start --}}
    <x-navbar />
    {{-- Nav End --}}

    {{-- Section  --}}
    <section class="relative py-20 overflow-hidden">
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-20 left-10 w-32 h-32 bg-green-200 rounded-full opacity-20 animate-float"></div>
            <div class="absolute top-40 right-20 w-24 h-24 bg-green-300 rounded-full opacity-30 animate-float-delay">
            </div>
            <div
                class="absolute bottom-20 left-1/3 w-40 h-40 bg-green-100 rounded-full opacity-15 animate-float-delay-2">
            </div>
            <div class="absolute top-60 right-1/4 w-16 h-16 bg-emerald-200 rounded-full opacity-25 animate-float"></div>
        </div>
        <div class="absolute inset-0 opacity-5">
            <div class="w-full h-full"
                style="background-image: radial-gradient(circle at 1px 1px, #10b981 1px, transparent 0); background-size: 30px 30px;">
            </div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-16 animate-fade-in-up">
                <div
                    class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-green-500 to-emerald-600 rounded-full mb-6 shadow-lg">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
                <h1 class="text-5xl md:text-6xl font-bold text-gray-800 mb-6 tracking-tight">
                    <span class="bg-gradient-to-r from-green-600 to-emerald-700 bg-clip-text text-transparent">
                        Tim Pendidik
                    </span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-600 max-w-3xl mx-auto leading-relaxed mb-8">
                    Pendidik berdedikasi yang membentuk masa depan di SD Bausasran
                </p>
                <div class="flex justify-center items-center space-x-4 mb-12">
                    <div class="w-16 h-1 bg-gradient-to-r from-transparent to-green-400 rounded-full"></div>
                    <div class="w-8 h-8 bg-gradient-to-br from-green-400 to-emerald-500 rounded-full shadow-lg"></div>
                    <div class="w-16 h-1 bg-gradient-to-l from-transparent to-green-400 rounded-full"></div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto">
                    <div class="glass-effect rounded-2xl p-6 text-center hover-scale">
                        <div class="text-3xl font-bold text-green-600 mb-2">25+</div>
                        <div class="text-gray-600 font-medium">Guru Berpengalaman</div>
                    </div>
                    <div class="glass-effect rounded-2xl p-6 text-center hover-scale">
                        <div class="text-3xl font-bold text-green-600 mb-2">10+</div>
                        <div class="text-gray-600 font-medium">Tahun Pengalaman</div>
                    </div>
                    <div class="glass-effect rounded-2xl p-6 text-center hover-scale">
                        <div class="text-3xl font-bold text-green-600 mb-2">100%</div>
                        <div class="text-gray-600 font-medium">Dedikasi Penuh</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">
                    Kenali <span class="text-green-600">Tenaga Pendidik Kami</span>
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Profesional penuh semangat yang berkomitmen membimbing generasi muda dan menciptakan prestasi
                    akademik
                </p>
                <div class="w-24 h-1 bg-gradient-to-r from-green-400 to-emerald-500 rounded-full mx-auto mt-6"></div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-8">
                @forelse ($gtk as $index => $guru)
                    <div class="group relative">
                        <div
                            class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-green-100 hover:border-green-300">
                            <div class="relative mb-6">
                                <div
                                    class="w-24 h-24 mx-auto rounded-full overflow-hidden border-4 border-green-100 group-hover:border-green-300 transition-all duration-300 shadow-md">
                                    <img src="{{ asset('storage/' . $guru->foto) }}"
                                        alt="Foto {{ $guru->nama_lengkap }}"
                                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                </div>
                                <div
                                    class="absolute bottom-0 right-1/2 transform translate-x-6 translate-y-1 w-6 h-6 bg-green-500 rounded-full border-2 border-white shadow-lg">
                                    <div class="w-2 h-2 bg-white rounded-full mx-auto mt-1"></div>
                                </div>
                            </div>
                            <div class="text-center">
                                <h3
                                    class="text-lg font-bold text-gray-800 mb-2 group-hover:text-green-600 transition-colors duration-300">
                                    {{ $guru->nama_lengkap }}
                                </h3>

                                @if ($guru->periode_jabatan && $guru->periode_jabatan !== 'N/A')
                                    <p class="text-sm text-gray-500 mb-3">
                                        Periode: {{ $guru->periode_jabatan }}
                                    </p>
                                @endif
                                <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                </div>
                            </div>
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300 -z-10">
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-20">
                        <div class="w-32 h-32 mx-auto mb-8 opacity-30">
                            <svg class="w-full h-full text-gray-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-600 mb-4">Data Belum Tersedia</h3>
                        <p class="text-gray-500 max-w-md mx-auto">
                            Informasi tim pendidik sedang dalam proses pembaruan. Silakan kembali lagi nanti.
                        </p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    {{-- Section End --}}

    {{-- Footer --}}
    <x-footer />
    {{-- Footer End --}}

    <script src="../js/nav.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.0/axios.min.js"></script>
    <script src="../js/struktur.js"></script>
</body>



</html>
