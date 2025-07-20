<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>PPDB</title>
</head>

<body>
    <x-header />
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
    <x-navbar />
    <section class="bg-gradient-to-br from-blue-50 to-sky-50 py-16">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="text-center mb-16" data-aos="fade-down" data-aos-duration="800">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-sky-600">
                        Penerimaan Peserta Didik Baru
                    </span>
                </h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                    Proses pendaftaran siswa baru SD Muhammadiyah Condongcatur Tahun Ajaran 2024/2025
                </p>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-400 to-sky-500 rounded-full mx-auto mt-6"
                    data-aos="fade-up" data-aos-delay="300"></div>
            </div>
            <div class="relative">
                {{-- Garis Tengah (Hanya di Desktop) --}}
                <div class="hidden md:block absolute left-1/2 h-full w-1 bg-gradient-to-b from-blue-200 to-sky-200 transform -translate-x-1/2"
                    data-aos="fade" data-aos-delay="400"></div>

                <div class="space-y-12 md:space-y-16">

                    {{-- Loop untuk setiap tahap pendaftaran dari database --}}
                    @foreach ($alurPpdbs as $tahap)
                        @php
                            $poinList = preg_split('/\\r\\n|\\r|\\n/', $tahap->poin);
                            $colors = [
                                'blue' => ['bg' => 'bg-blue-600', 'text' => 'text-blue-500'],
                                'green' => ['bg' => 'bg-green-600', 'text' => 'text-green-500'],
                                'yellow' => ['bg' => 'bg-yellow-600', 'text' => 'text-yellow-500'],
                                'red' => ['bg' => 'bg-red-600', 'text' => 'text-red-500'],
                            ];
                            $color = $colors[$tahap->warna] ?? $colors['blue'];
                        @endphp

                        <div class="relative flex flex-col md:flex-row items-center">

                            {{-- Kontainer Kartu (Kiri atau Kanan) --}}
                            <div class="flex-1 flex mb-6 md:mb-0
                                {{ $loop->odd ? 'md:order-1 md:justify-end md:pr-8' : 'md:order-3 md:justify-start md:pl-8' }}"
                                data-aos="{{ $loop->odd ? 'fade-right' : 'fade-left' }}" data-aos-delay="100">

                                {{-- Kartu Konten --}}
                                <div
                                    class="bg-white p-8 rounded-2xl shadow-lg border border-blue-100 hover:shadow-xl transition-all duration-300 w-full md:max-w-md">
                                    <h3 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                                        <span
                                            class="w-8 h-8 {{ $color['bg'] }} text-white rounded-full flex items-center justify-center mr-3">{{ $tahap->urutan }}</span>
                                        {{ $tahap->judul }}
                                    </h3>
                                    <ul class="space-y-3 text-gray-600">
                                        @foreach ($poinList as $poin)
                                            @if (trim($poin))
                                                <li class="flex items-start"
                                                    data-aos="{{ $loop->parent->odd ? 'fade-right' : 'fade-left' }}"
                                                    data-aos-delay="{{ $loop->index * 50 + 150 }}">
                                                    <svg class="w-5 h-5 {{ $color['text'] }} mt-0.5 mr-2 flex-shrink-0"
                                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>
                                                    <span>{{ trim($poin) }}</span>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            {{-- Ikon Tengah --}}
                            <div class="w-16 h-16 {{ $color['bg'] }} rounded-full flex items-center justify-center text-white font-bold text-xl mb-4 md:mb-0
                                md:order-2
                                relative z-10 shadow-lg"
                                data-aos="zoom-in" data-aos-delay="300">
                                <span class="text-2xl">{{ $tahap->urutan }}</span>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
            <div class="text-center mt-16" data-aos="fade-up" data-aos-delay="200">
                <a href="https://wa.me/6281227577914?text=Assalamualaikum%2C%20saya%20tertarik%20untuk%20mendaftar%20PPDB%20di%20SD%20Muhammadiyah%20Bausasran.%20Mohon%20informasinya."
                    target="_blank"
                    class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-sky-500 to-blue-600 text-white font-bold text-lg rounded-full hover:from-sky-600 hover:to-blue-700 transition duration-300 shadow-lg hover:shadow-xl group relative overflow-hidden transform hover:scale-105">
                    <span
                        class="absolute -inset-1 bg-sky-400/30 rounded-full opacity-0 group-hover:opacity-100 group-hover:animate-ping"></span>
                    <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path
                            d="M16.6,14.2l-1.5-0.8c-0.4-0.2-1-0.1-1.3,0.2L12.5,15c-1.6-2.9-4.1-5.3-7-7l1.3-1.3c0.3-0.3,0.4-0.9,0.2-1.3l-0.8-1.5c-0.2-0.5-0.8-0.8-1.3-0.6l-1.5,0.4C2.6,3.1,2,3.7,2,4.4c0,6.4,5.2,11.6,11.6,11.6c0.7,0,1.3-0.6,1.5-1.1l0.4-1.5C15.7,15,15.4,14.4,14.9,14.2z M12,0C5.4,0,0,5.4,0,12s5.4,12,12,12s12-5.4,12-12S18.6,0,12,0z M12,21.6c-5.3,0-9.6-4.3-9.6-9.6S6.7,2.4,12,2.4s9.6,4.3,9.6,9.6S17.3,21.6,12,21.6z" />
                    </svg>

                    <span class="relative z-10">Daftar Sekarang via WhatsApp</span>
                    <span
                        class="absolute inset-0 bg-gradient-to-r from-blue-700/20 to-sky-600/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                </a>

                <p class="mt-4 text-sm text-blue-700/80">Atau kunjungi sekolah untuk pendaftaran langsung.</p>
            </div>
        </div>
    </section>
    <x-footer />

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true,
                offset: 120
            });
        });
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="../js/nav.js"></script>
</body>

</html>
