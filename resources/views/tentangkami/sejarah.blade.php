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

    {{-- Nav --}}
    <x-navbar />
    {{-- Nav End--}}

    {{-- Section --}}
    <section class="py-16 bg-gradient-to-br from-green-50 to-indigo-100">
        <div class="max-w-5xl mx-auto px-4">
            <h1 class="text-5xl font-extrabold text-center text-green-700 mb-16 relative" data-aos="fade-down">
                <span class="block text-2xl font-semibold text-green-600 mb-2">Jejak Langkah</span>
                Sejarah & Kepemimpinan SD Baubasran
                <span
                    class="absolute bottom-[-20px] left-1/2 -translate-x-1/2 w-24 h-1.5 bg-green-500 rounded-full"></span>
            </h1>
            <div class="bg-white p-10 rounded-3xl shadow-2xl mb-20 flex flex-col md:flex-row items-center gap-10 border border-green-200 transform transition-transform duration-500 hover:scale-[1.01] hover:shadow-3xl"
                data-aos="fade-up" data-aos-delay="200">
                <div class="flex-shrink-0 w-full md:w-1/3 max-w-xs md:max-w-none">
                    <img src="{{ asset('storage/' . $sambutan->foto) }}" alt="Foto Kepala Sekolah SD Baubasran"
                        class="w-full h-auto rounded-xl shadow-lg object-cover border-4 border-green-100 ring-4 ring-green-50 ring-offset-2">
                    <p class="text-center text-xl font-bold text-green-800 mt-4">{{ $sambutan->nama }}</p>
                    <p class="text-center text-green-600 text-sm">{{ $sambutan->jabatan }}</p>
                </div>
                <div class="flex-grow md:w-2/3 text-center md:text-left">
                    <h2 class="text-3xl font-bold text-green-800 mb-6 relative">
                        Sambutan Kepala Sekolah
                        <span
                            class="block w-16 h-1 bg-green-500 absolute left-1/2 md:left-0 -translate-x-1/2 md:translate-x-0 bottom-[-8px] rounded-full"></span>
                    </h2>
                    <p class="text-gray-700 leading-relaxed text-base mb-4 italic">
                        {{ $sambutan->motivasi }}
                    </p>
                    <p class="text-gray-700 leading-relaxed text-base mb-4">
                        Assalamualaikum Warahmatullahi Wabarakatuh,
                    </p>
                    <p class="text-gray-700 leading-relaxed text-base mb-4">
                        {{ $sambutan->sambutan }}
                    </p>

                    <p class="text-gray-700 leading-relaxed text-base font-semibold mt-6">
                        Wassalamualaikum Warahmatullahi Wabarakatuh.
                    </p>
                </div>
            </div>
            <h2 class="text-4xl font-extrabold text-center text-green-800 mb-12 relative" data-aos="fade-down"
                data-aos-delay="400">
                <span class="block text-2xl font-semibold text-green-600 mb-2">Linimasa Perjalanan</span>
                Tonggak Sejarah SD Baubasran
                <span
                    class="absolute bottom-[-20px] left-1/2 -translate-x-1/2 w-24 h-1.5 bg-green-500 rounded-full"></span>
            </h2>

            <div class="relative wrap overflow-hidden p-4 md:p-10 h-full">
                <div class="hidden md:block border-2-2 absolute border-opacity-20 border-green-700 h-full border left-1/2 transform -translate-x-1/2"
                    data-aos="zoom-in" ></div>

                @forelse ($linimasa as $index => $item)
                    <div class="mb-8 flex flex-col md:flex-row {{ $index % 2 == 0 ? '' : 'md:flex-row-reverse' }}"
                        data-aos="{{ $index % 2 == 0 ? 'fade-right' : 'fade-left' }}"
                        data-aos-delay="{{ 600 + $index * 200 }}">


                        <div class="md:w-5/12 w-full"></div>


                        <div
                            class="z-20 flex items-center justify-center w-10 h-10 bg-green-500 rounded-full shadow-xl mx-auto md:mx-0 relative md:absolute md:left-1/2 transform md:-translate-x-1/2">
                            <span class="text-white font-semibold text-lg">{{ $index + 1 }}</span>
                        </div>


                        <div
                            class="w-full md:w-5/12 bg-white border border-green-200 rounded-lg shadow-xl px-6 py-4 mt-6 md:mt-0 {{ $index % 2 == 0 ? 'md:ml-auto' : 'md:mr-auto' }}">
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


            <div class="text-center mt-12">
                <a href="{{ url('/') }}"
                    class="inline-block bg-green-600 text-white px-8 py-3 rounded-full
                          hover:bg-green-700 transition duration-300 ease-in-out">
                    Kembali ke Beranda
                </a>
            </div>
        </div>
    </section>
    {{-- Section End --}}

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
