<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>Sejarah</title>
</head>

<body class="">

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

    <!-- Section -->
    <section class="py-16 bg-gradient-to-br from-sky-50 to-blue-100 ">
        <div class="max-w-5xl mx-auto px-4">
            <h1 class="text-5xl font-extrabold text-center text-blue-800 mb-16 relative" data-aos="fade-down">
                <span class="block text-2xl font-semibold text-blue-600 mb-2">Jejak Langkah</span>
                Sejarah & Kepemimpinan SD Baubasran
                <span
                    class="absolute bottom-[-20px] left-1/2 -translate-x-1/2 w-24 h-1.5 bg-blue-500 rounded-full"></span>
            </h1>

            <!-- Sambutan Kepala Sekolah Card -->
            <div class="bg-white/90 backdrop-blur-sm p-6 md:p-10 rounded-3xl shadow-2xl mb-20 flex flex-col items-center border border-blue-200/50 transform transition-all duration-500 hover:scale-[1.01] hover:shadow-3xl"
                data-aos="fade-up" data-aos-delay="200">

                <!-- Foto Kepala Sekolah -->
                <div class="w-full text-center mb-8">
                    <div class="relative inline-block w-64 h-64 md:w-80 md:h-80">
                        <img src="{{ asset('storage/' . $sambutan->foto) }}" alt="Foto Kepala Sekolah SD Baubasran"
                            class="w-full h-full rounded-xl shadow-lg object-cover border-4 border-blue-100 ring-4 ring-blue-50 ring-offset-2 mx-auto">
                    </div>
                    <div class="mt-4">
                        <p class="text-2xl font-bold text-blue-800">{{ $sambutan->nama }}</p>
                        <p class="text-blue-600 text-base mt-2">{{ $sambutan->jabatan }}</p>
                    </div>
                </div>

                <!-- Sambutan -->
                <div class="w-full">
                    <h2 class="text-3xl font-bold text-blue-800 mb-6 text-center relative">
                        Sambutan Kepala Sekolah
                        <span class="block w-16 h-1 bg-blue-500 mx-auto mt-2 rounded-full"></span>
                    </h2>

                    <div class="text-gray-700 leading-relaxed text-base md:text-lg space-y-4 text-justify">
                        <p class="italic text-blue-700 text-center">
                            "{{ $sambutan->motivasi }}"
                        </p>

                        <p class="text-center">
                            Assalamualaikum Warahmatullahi Wabarakatuh,
                        </p>

                        <p>
                            {{ $sambutan->sambutan }}
                        </p>

                        <p class="font-semibold text-center mt-6">
                            Wassalamualaikum Warahmatullahi Wabarakatuh.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Linimasa Sejarah -->
            <h2 class="text-4xl font-extrabold text-center text-blue-800 mb-12 relative" data-aos="fade-down"
                data-aos-delay="400">
                <span class="block text-2xl font-semibold text-blue-600 mb-2">Linimasa Perjalanan</span>
                Tonggak Sejarah SD Baubasran
                <span
                    class="absolute bottom-[-20px] left-1/2 -translate-x-1/2 w-24 h-1.5 bg-blue-500 rounded-full"></span>
            </h2>

            <!-- Timeline -->
            <div class="relative wrap overflow-hidden p-4 md:p-10 h-full">
                <!-- Garis timeline -->
                <div class="hidden md:block border-2-2 absolute border-opacity-20 border-blue-700 h-full border left-1/2 transform -translate-x-1/2"
                    data-aos="zoom-in"></div>

                @forelse ($linimasa as $index => $item)
                    <div class="mb-8 flex flex-col md:flex-row {{ $index % 2 == 0 ? '' : 'md:flex-row-reverse' }}"
                        data-aos="{{ $index % 2 == 0 ? 'fade-right' : 'fade-left' }}"
                        data-aos-delay="{{ 600 + $index * 200 }}">

                        <div class="md:w-5/12 w-full"></div>

                        <!-- Bulatan timeline -->
                        <div
                            class="z-20 flex items-center justify-center w-10 h-10 bg-blue-500 rounded-full shadow-xl mx-auto md:mx-0 relative md:absolute md:left-1/2 transform md:-translate-x-1/2">
                            <span class="text-white font-semibold text-lg">{{ $index + 1 }}</span>
                        </div>

                        <!-- Card timeline -->
                        <div
                            class="w-full md:w-5/12 bg-white/90 backdrop-blur-sm border border-blue-200/50 rounded-lg shadow-xl px-6 py-4 mt-6 md:mt-0 {{ $index % 2 == 0 ? 'md:ml-auto' : 'md:mr-auto' }}">
                            <h3 class="mb-3 font-bold text-gray-800 text-xl">{{ $item->judul }}</h3>
                            <img src="{{ asset('storage/' . $item->foto) }}" alt="{{ $item->judul }}"
                                class="w-full h-48 object-cover rounded-lg mb-4 shadow-sm">
                            <p class="text-sm leading-snug text-gray-700">
                                {{ $item->deskripsi }}
                            </p>
                        </div>
                    </div>
                @empty
                    <p class="text-center text-gray-600">Tidak ada data linimasa.</p>
                @endforelse
            </div>

            <!-- Tombol Kembali -->
            <div class="text-center mt-12">
                <a href="{{ url('/') }}"
                    class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-full transition duration-300 ease-in-out shadow-lg hover:shadow-xl">
                    Kembali ke Beranda
                </a>
            </div>
        </div>
    </section>
    <!-- Section End -->

    {{-- Footer --}}
    <x-footer />
    {{-- Footer end --}}

    <script src="{{ asset('js/nav.js') }}"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
</body>

</html>
