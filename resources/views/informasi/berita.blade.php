<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Berita</title>
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
    {{-- Header end --}}

    {{-- Nav Start --}}
    <x-navbar />
    {{-- Nav End --}}

    {{-- Hero Section --}}
    <section class="relative py-24 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-green-50/50 via-transparent to-emerald-50/30"></div>
        <div class="absolute top-20 left-10 w-72 h-72 bg-green-200/30 rounded-full blur-3xl animate-pulse-slow"></div>
        <div
            class="absolute bottom-20 right-10 w-96 h-96 bg-emerald-200/20 rounded-full blur-3xl animate-pulse-slow delay-1000">
        </div>
        <div
            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-gradient-to-r from-green-100/40 to-emerald-100/40 rounded-full blur-2xl">
        </div>

        <div class="relative container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
            <div class="text-center mb-20" data-aos="fade-up" data-aos-duration="800">
                <div
                    class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-green-500 via-green-600 to-emerald-600 rounded-3xl mb-8 shadow-xl shadow-green-500/25 animate-float">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                    </svg>
                </div>
                <h2 class="text-6xl font-bold text-gray-900 mb-6 tracking-tight">
                    Berita <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-green-600 via-green-700 to-emerald-600">Terbaru</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed mb-8">
                    Ikuti perkembangan terkini dan informasi penting dari SD Muhammadiyah Bausasran
                </p>
                <div class="flex items-center justify-center gap-2">
                    <div class="w-8 h-1 bg-gradient-to-r from-transparent via-green-500 to-transparent rounded-full">
                    </div>
                    <div class="w-16 h-1 bg-gradient-to-r from-green-500 to-emerald-500 rounded-full"></div>
                    <div class="w-8 h-1 bg-gradient-to-r from-transparent via-emerald-500 to-transparent rounded-full">
                    </div>
                </div>
            </div>

            @forelse ($berita as $key => $item)
                @if ($key === 0)
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">
                        <div class="lg:col-span-2" data-aos="fade-right" data-aos-duration="1000">
                            <article
                                class="group bg-white/70 backdrop-blur-lg rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 border border-white/20 h-full">
                                <div class="relative overflow-hidden">
                                    @if ($item->gambar)
                                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}"
                                            class="w-full h-80 object-cover group-hover:scale-110 transition-transform duration-700">
                                    @else
                                        <div
                                            class="w-full h-80 bg-gradient-to-br from-green-100 to-emerald-100 flex items-center justify-center">
                                            <svg class="w-16 h-16 text-green-400" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                                    d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                                            </svg>
                                        </div>
                                    @endif
                                    <div
                                        class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent">
                                    </div>
                                    <div class="absolute top-6 left-6">
                                        <span
                                            class="inline-flex items-center px-4 py-2 rounded-full text-sm font-semibold bg-gradient-to-r from-green-500 to-emerald-500 text-white shadow-lg backdrop-blur-sm">
                                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" />
                                            </svg>
                                            Berita Utama
                                        </span>
                                    </div>
                                    <div class="absolute bottom-6 left-6 right-6">
                                        <div class="flex items-center text-white/80 text-sm mb-3">
                                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" />
                                            </svg>
                                            {{ $item->created_at->diffForHumans() }}
                                        </div>
                                    </div>
                                </div>
                                <div class="p-8">
                                    <h3
                                        class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-green-700 transition-colors duration-300 leading-tight">
                                        {{ $item->judul }}
                                    </h3>
                                    <p class="text-gray-600 leading-relaxed mb-6">
                                        {{ \Illuminate\Support\Str::limit(strip_tags($item->konten), 150, '...') }}
                                    </p>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex items-center text-sm text-gray-500">
                                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                                    <path fill-rule="evenodd"
                                                        d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" />
                                                </svg>
                                                {{-- {{ rand(500, 2000) }} views --}}
                                            </div>
                                            <div class="flex items-center text-sm text-gray-500">
                                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" />
                                                </svg>
                                                {{-- {{ rand(20, 150) }} likes --}}
                                            </div>
                                        </div>
                                        <a href="#"
                                            class="inline-flex items-center px-6 py-3 text-sm font-semibold text-white bg-gradient-to-r from-green-600 to-emerald-600 rounded-xl hover:from-green-700 hover:to-emerald-700 transition-all duration-300 shadow-lg hover:shadow-xl group-hover:shadow-green-500/25">
                                            Baca Selengkapnya
                                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                @endif
            @empty
                <div class="text-center py-16" data-aos="fade-up">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-gray-100 rounded-full mb-4">
                        <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Belum ada berita</h3>
                    <p class="text-gray-500">Berita terbaru akan ditampilkan di sini.</p>
                </div>
            @endforelse

            @if (count($berita) > 1)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($berita->skip(1) as $key => $item)
                        <article
                            class="group bg-white/60 backdrop-blur-lg rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-500 hover:-translate-y-1 border border-white/20"
                            data-aos="fade-up" data-aos-duration="1000" data-aos-delay="{{ ($key + 1) * 100 }}">
                            <div class="relative overflow-hidden">
                                @if ($item->gambar)
                                    <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}"
                                        class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-700">
                                @else
                                    <div
                                        class="w-full h-48 bg-gradient-to-br from-green-100 to-emerald-100 flex items-center justify-center">
                                        <svg class="w-12 h-12 text-green-400" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                                d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                                        </svg>
                                    </div>
                                @endif
                                <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                                <div class="absolute top-4 left-4">
                                    <span
                                        class="px-3 py-1 text-xs font-medium bg-green-500/90 text-white rounded-full backdrop-blur-sm">
                                        Berita
                                    </span>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center text-gray-500 text-sm mb-3">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" />
                                    </svg>
                                    {{ $item->created_at->diffForHumans() }}
                                </div>
                                <h3
                                    class="text-lg font-bold text-gray-900 mb-3 group-hover:text-green-700 transition-colors duration-300 leading-tight">
                                    {{ $item->judul }}
                                </h3>
                                <p class="text-gray-600 text-sm leading-relaxed mb-4">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($item->konten), 100, '...') }}
                                </p>
                                <a href="#"
                                    class="text-green-600 hover:text-green-700 font-semibold text-sm flex items-center group-hover:translate-x-1 transition-transform">
                                    Baca lebih lanjut
                                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                        </article>
                    @endforeach
                </div>
            @endif
    </section>
    {{-- Hero Section end --}}

    {{-- Footer --}}
    <x-footer />
    {{-- Footer end --}}

    <script src="../js/nav.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>

</body>

</html>
