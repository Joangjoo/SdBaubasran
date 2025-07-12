<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="./css/stuktur.css">
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
        <!-- Floating Background Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div
                class="absolute top-1/4 left-1/4 w-72 h-72 bg-green-100 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse">
            </div>
            <div
                class="absolute top-3/4 right-1/4 w-96 h-96 bg-emerald-100 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse animation-delay-2000">
            </div>
            <div
                class="absolute bottom-1/4 left-1/3 w-80 h-80 bg-teal-100 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse animation-delay-4000">
            </div>
        </div>

        <!-- Grid Pattern Overlay -->
        <div class="absolute inset-0 opacity-5">
            <div class="w-full h-full"
                style="background-image: radial-gradient(circle at 1px 1px, #e5e7eb 1px, transparent 0); background-size: 20px 20px;">
            </div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <!-- Header Section -->
            <div class="text-center mb-16 animate-fade-in-up">
                <div class="inline-block mb-4">
                    <div class="w-20 h-1 bg-gradient-to-r from-emerald-400 to-green-600 rounded-full mx-auto mb-6">
                    </div>
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
                    <div
                        class="w-32 h-1 bg-gradient-to-r from-transparent via-gray-400 to-transparent rounded-full opacity-30">
                    </div>
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
                                <div
                                    class="absolute top-full left-1/2 transform -translate-x-1/2 w-0.5 h-12 bg-gradient-to-b from-emerald-500 to-transparent">
                                </div>
                                <div
                                    class="absolute top-full left-1/2 transform -translate-x-1/2 translate-y-12 w-60 h-0.5 bg-gradient-to-r from-emerald-500 to-transparent">
                                </div>
                                <div
                                    class="absolute top-full left-1/2 transform -translate-x-1/2 -translate-x-32 translate-y-12 w-0.5 h-12 bg-gradient-to-b from-emerald-500 to-transparent">
                                </div>
                                <div
                                    class="absolute top-full left-1/2 transform -translate-x-1/2 translate-x-32 translate-y-12 w-0.5 h-12 bg-gradient-to-b from-emerald-500 to-transparent">
                                </div>

                                <!-- Card -->
                                <div
                                    class="bg-gradient-to-br from-emerald-600 to-green-700 rounded-3xl p-8 shadow-2xl transform hover:scale-105 transition-all duration-500 hover:shadow-emerald-500/25 border border-emerald-300/20 backdrop-blur-sm">
                                    <div class="text-center">
                                        <!-- Crown Icon -->
                                        <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                                            <div
                                                class="w-8 h-8 bg-yellow-400 rounded-full flex items-center justify-center shadow-lg">
                                                <svg class="w-4 h-4 text-yellow-600" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z" />
                                                </svg>
                                            </div>
                                        </div>

                                        <!-- Photo -->
                                        <div class="relative mb-6">
                                            <div
                                                class="w-32 h-32 mx-auto rounded-full overflow-hidden border-4 border-white shadow-xl group-hover:shadow-2xl transition-all duration-300">
                                                <img src="{{ asset('storage/' . $struktur->foto) }}"
                                                    alt="Foto {{ $struktur->nama_lengkap }}"
                                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                            </div>
                                            <div
                                                class="absolute inset-0 rounded-full border-2 border-white opacity-0 group-hover:opacity-100 animate-ping">
                                            </div>
                                        </div>

                                        <!-- Info -->
                                        <h3 class="text-2xl font-bold text-white mb-2">{{ $struktur->nama_lengkap }}
                                        </h3>
                                        <p class="text-emerald-100 font-semibold text-lg mb-2">{{ $struktur->jabatan }}
                                        </p>
                                        @if ($struktur->periode_jabatan && $struktur->periode_jabatan !== 'N/A')
                                            <p class="text-emerald-200 text-sm">Periode:
                                                {{ $struktur->periode_jabatan }}</p>
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
                                if (
                                    stripos($struktur->jabatan, 'kepala tu') !== false ||
                                    stripos($struktur->jabatan, 'tata usaha') !== false
                                ) {
                                    $kepalaTu = $struktur;
                                } elseif (stripos($struktur->jabatan, 'bendahara') !== false) {
                                    $bendahara = $struktur;
                                }
                            }
                        @endphp

                        <!-- Kepala TU (Left) -->
                        <div class="group relative">
                            <div
                                class="absolute top-full left-1/2 transform -translate-x-1/2 w-0.5 h-12 bg-gradient-to-b from-teal-500 to-transparent">
                            </div>
                            <div
                                class="bg-gradient-to-br from-teal-500 to-teal-600 rounded-2xl p-6 shadow-xl transform hover:scale-105 transition-all duration-500 hover:shadow-teal-500/25 border border-teal-400/20 backdrop-blur-sm">
                                <div class="text-center">
                                    <div class="absolute -top-3 left-1/2 transform -translate-x-1/2">
                                        <div
                                            class="w-6 h-6 bg-teal-300 rounded-full flex items-center justify-center shadow-lg">
                                            <svg class="w-3 h-3 text-teal-600" fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                        </div>
                                    </div>

                                    <div class="relative mb-4">
                                        <div
                                            class="w-24 h-24 mx-auto rounded-full overflow-hidden border-3 border-white shadow-lg group-hover:shadow-xl transition-all duration-300">
                                            @if ($kepalaTu)
                                                <img src="{{ asset('storage/' . $kepalaTu->foto) }}"
                                                    alt="Foto {{ $kepalaTu->nama_lengkap }}"
                                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                            @else
                                                <div
                                                    class="w-full h-full bg-teal-400 flex items-center justify-center text-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="1"
                                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
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
                            <div
                                class="absolute top-full left-1/2 transform -translate-x-1/2 w-0.5 h-12 bg-gradient-to-b from-cyan-500 to-transparent">
                            </div>
                            <div
                                class="bg-gradient-to-br from-cyan-500 to-cyan-600 rounded-2xl p-6 shadow-xl transform hover:scale-105 transition-all duration-500 hover:shadow-cyan-500/25 border border-cyan-400/20 backdrop-blur-sm">
                                <div class="text-center">
                                    <div class="absolute -top-3 left-1/2 transform -translate-x-1/2">
                                        <div
                                            class="w-6 h-6 bg-cyan-300 rounded-full flex items-center justify-center shadow-lg">
                                            <svg class="w-3 h-3 text-cyan-600" fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z" />
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </div>

                                    <div class="relative mb-4">
                                        <div
                                            class="w-24 h-24 mx-auto rounded-full overflow-hidden border-3 border-white shadow-lg group-hover:shadow-xl transition-all duration-300">
                                            @if ($bendahara)
                                                <img src="{{ asset('storage/' . $bendahara->foto) }}"
                                                    alt="Foto {{ $bendahara->nama_lengkap }}"
                                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                            @else
                                                <div
                                                    class="w-full h-full bg-cyan-400 flex items-center justify-center text-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="1"
                                                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
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
                                        <p class="text-cyan-200 text-sm">Periode: {{ $bendahara->periode_jabatan }}
                                        </p>
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
                                <div
                                    class="bg-gradient-to-br from-green-400 to-green-500 rounded-xl p-6 shadow-lg transform hover:scale-105 transition-all duration-500 hover:shadow-green-500/25 border border-green-300/20 backdrop-blur-sm h-full">
                                    <div class="text-center">
                                        <div class="absolute -top-2 left-1/2 transform -translate-x-1/2">
                                            <div class="w-4 h-4 bg-green-300 rounded-full shadow-lg"></div>
                                        </div>

                                        <div class="relative mb-4">
                                            <div
                                                class="w-20 h-20 mx-auto rounded-full overflow-hidden border-2 border-white shadow-lg group-hover:shadow-xl transition-all duration-300">
                                                <img src="{{ asset('storage/' . $struktur->foto) }}"
                                                    alt="Foto {{ $struktur->nama_lengkap }}"
                                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                            </div>
                                        </div>

                                        <h3 class="text-lg font-bold text-white mb-2">{{ $struktur->nama_lengkap }}
                                        </h3>
                                        <p class="text-green-100 font-semibold text-sm mb-1">{{ $struktur->jabatan }}
                                        </p>
                                        @if ($struktur->periode_jabatan && $struktur->periode_jabatan !== 'N/A')
                                            <p class="text-green-200 text-xs">Periode:
                                                {{ $struktur->periode_jabatan }}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endif
                    @empty
                        <!-- Empty State -->
                        <div class="col-span-full text-center py-20 animate-fade-in-up">
                            <div class="w-32 h-32 mx-auto mb-8 opacity-30">
                                <svg class="w-full h-full text-gray-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
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
    {{-- Section End --}}

    {{-- Footer --}}
    <x-footer/>
    {{-- Footer End --}}
    
    <script src="../js/nav.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.0/axios.min.js"></script>
    <script src="../js/struktur.js"></script>
</body>



</html>
