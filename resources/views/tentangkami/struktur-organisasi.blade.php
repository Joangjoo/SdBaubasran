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

    {{-- Nav Start --}}
    <x-navbar />
    {{-- Nav End --}}

    <!-- Struktur Organisasi Section -->
    <section class="relative py-20 overflow-hidden bg-gradient-to-br from-blue-50 to-sky-50">
        <!-- Sky Background Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div
                class="absolute top-1/4 left-1/4 w-72 h-72 bg-sky-200 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse">
            </div>
            <div
                class="absolute top-3/4 right-1/4 w-96 h-96 bg-blue-100 rounded-full mix-blend-multiply filter blur-xl opacity-15 animate-pulse animation-delay-2000">
            </div>
        </div>

        <!-- Container -->
        <div class="container mx-auto px-4 relative z-10">
            <!-- Header -->
            <div class="text-center mb-16">
                <h1 class="text-5xl md:text-6xl font-bold mb-4 tracking-tight">
                    <span class="bg-gradient-to-r from-sky-600 to-blue-800 bg-clip-text text-transparent">
                        Struktur Organisasi
                    </span>
                </h1>
                <p class="text-xl text-blue-700 max-w-2xl mx-auto">
                    Mengenal Tim Hebat di Balik Kesuksesan Sekolah
                </p>
                <div class="mt-8 flex justify-center">
                    <div class="w-32 h-1 bg-gradient-to-r from-blue-300 to-sky-300 rounded-full"></div>
                </div>
            </div>

            <!-- Dual Principals Section -->
            <div class="flex flex-wrap justify-center gap-8 mb-16">
                @php
                    $kepalaSekolah = $strukturs->filter(function ($item) {
                        return stripos($item->jabatan, 'kepala sekolah') !== false;
                    });
                @endphp

                @foreach ($kepalaSekolah as $kepala)
                    <div class="group relative w-full md:w-auto flex-1 min-w-[300px] max-w-md">
                        <!-- Principal Card -->
                        <div
                            class="bg-gradient-to-br from-sky-500 to-blue-600 rounded-2xl p-8 shadow-xl border border-white/20 transform transition-all duration-300 hover:scale-[1.02] hover:shadow-2xl">
                            <div class="text-center">
                                <!-- Crown Badge -->
                                <div
                                    class="absolute -top-4 left-1/2 transform -translate-x-1/2 w-10 h-10 bg-yellow-300 rounded-full flex items-center justify-center shadow-md">
                                    <svg class="w-5 h-5 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </div>

                                <!-- Photo -->
                                <div
                                    class="w-32 h-32 mx-auto rounded-full border-4 border-white/80 shadow-lg overflow-hidden mb-6">
                                    <img src="{{ asset('storage/' . $kepala->foto) }}" alt="{{ $kepala->nama_lengkap }}"
                                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                                </div>

                                <!-- Info -->
                                <h3 class="text-2xl font-bold text-white mb-2">{{ $kepala->nama_lengkap }}</h3>
                                <p class="text-sky-100 font-medium mb-3">{{ $kepala->jabatan }}</p>
                                @if ($kepala->periode_jabatan)
                                    <p class="text-blue-200 text-sm">Periode: {{ $kepala->periode_jabatan }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Staff Section -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach ($strukturs as $struktur)
                    @unless (stripos($struktur->jabatan, 'kepala sekolah') !== false)
                        <div class="group">
                            <div
                                class="bg-gradient-to-br from-blue-400 to-sky-500 rounded-xl p-6 shadow-lg border border-white/20 hover:shadow-xl transition-all duration-300 h-full">
                                <div class="text-center">
                                    <!-- Photo -->
                                    <div
                                        class="w-20 h-20 mx-auto rounded-full border-3 border-white/80 shadow-md overflow-hidden mb-4">
                                        <img src="{{ asset('storage/' . $struktur->foto) }}"
                                            alt="{{ $struktur->nama_lengkap }}"
                                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                    </div>

                                    <!-- Info -->
                                    <h3 class="text-lg font-bold text-white mb-1">{{ $struktur->nama_lengkap }}</h3>
                                    <p class="text-blue-100 text-sm mb-2">{{ $struktur->jabatan }}</p>
                                    @if ($struktur->periode_jabatan)
                                        <p class="text-sky-200 text-xs">Periode: {{ $struktur->periode_jabatan }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endunless
                @endforeach
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <x-footer />
    {{-- Footer End --}}

    <script src="{{ asset('js/nav.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.0/axios.min.js"></script>
    <script src="../js/struktur.js"></script>
</body>



</html>
