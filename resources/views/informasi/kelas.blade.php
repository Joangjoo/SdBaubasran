<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Kelas</title>
</head>

<body>
    {{-- Header --}}
    <x-header />
    {{-- Header end --}}

    {{-- Nav Start --}}
    <x-navbar />
    {{-- Nav End --}}

    <section class="relative w-full h-[90vh] overflow-hidden">
        <div class="swiper hero-swiper absolute inset-0 w-full h-full z-0 ">
            <div class="swiper-wrapper">
                @foreach ($gambar as $slide)
                    <div class="swiper-slide">
                        <img src="{{ asset('storage/' . $slide->gambar) }}" alt="Slide {{ $loop->iteration }}"
                            class="w-full h-full object-cover" />
                    </div>
                @endforeach
            </div>
        </div>

    </section>

    <div class="bg-gradient-to-br from-blue-50 to-sky-50 py-12">
        <div class="container mx-auto px-4">
            <div class="text-center mb-10" data-aos="fade-up">
                <h1 class="text-4xl font-bold text-gray-800 mb-2">Informasi Kelas</h1>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-400 to-sky-500 rounded-full mx-auto mb-4"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">Temukan informasi guru dan mata pelajaran untuk setiap kelas
                </p>
            </div>

            <div class="mb-8 p-6 bg-white rounded-xl shadow-lg backdrop-blur-sm bg-opacity-80" data-aos="fade-up"
                data-aos-delay="100">
                <form action="{{ route('kelas.index') }}" method="GET"
                    class="flex flex-col sm:flex-row items-center gap-4">
                    <!-- Kelas Select Input -->
                    <div class="relative flex-1 w-full">
                        <label for="kelas" class="block text-sm font-medium text-gray-700 mb-1">Pilih Kelas</label>
                        <div class="relative">
                            <select name="kelas" id="kelas"
                                class="appearance-none w-full pl-4 pr-10 py-3 border border-gray-300 rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white text-gray-700 transition-all duration-200 hover:border-gray-400">
                                <option value="">Semua Kelas</option>
                                @for ($i = 1; $i <= 6; $i++)
                                    <option value="{{ $i }}" {{ $selectedKelas == $i ? 'selected' : '' }}>
                                        Kelas {{ $i }}</option>
                                @endfor
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-3 w-full sm:w-auto mt-2 sm:mt-7">
                        <button type="submit"
                            class="flex-1 px-6 py-3 bg-gradient-to-r from-blue-600 to-sky-600 hover:from-blue-700 hover:to-sky-700 text-white font-medium rounded-xl shadow-lg hover:shadow-xl transition-all duration-200 transform hover:-translate-y-0.5 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                            <span class="flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd" />
                                </svg>
                                Tampilkan
                            </span>
                        </button>
                        <a href="{{ route('kelas.index') }}"
                            class="flex-1 px-6 py-3 bg-gradient-to-r from-gray-600 to-gray-700 hover:from-gray-700 hover:to-gray-800 text-white font-medium rounded-xl shadow-lg hover:shadow-xl transition-all duration-200 transform hover:-translate-y-0.5 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50 text-center">
                            <span class="flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z"
                                        clip-rule="evenodd" />
                                </svg>
                                Reset
                            </span>
                        </a>
                    </div>
                </form>
            </div>

            <!-- Daftar Guru -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse ($guru as $g)
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1"
                        data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 + 200 }}">
                        <div class="flex items-start p-6 space-x-4">
                            <div class="relative">
                                <img src="{{ asset('storage/' . $g->foto) }}" alt="Foto {{ $g->nama_lengkap }}"
                                    class="w-20 h-20 rounded-full object-cover border-2 border-blue-100 shadow-md">
                                <div
                                    class="absolute -bottom-1 -right-1 w-6 h-6 bg-blue-500 rounded-full border-2 border-white">
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-gray-900 group-hover:text-blue-600 transition-colors">
                                    {{ $g->nama_lengkap }}</h3>
                                <p class="text-sm text-blue-600">{{ $g->jabatan }}</p>
                                <div class="mt-3 border-t border-gray-100 pt-3 space-y-2">
                                    <div class="flex items-start">
                                        <svg class="w-4 h-4 text-blue-500 mt-0.5 mr-2" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                        </svg>
                                        <p class="text-sm text-gray-700"><span class="font-medium">Mengajar
                                                Kelas:</span> {{ $g->kelas_mengajar }}</p>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="w-4 h-4 text-blue-500 mt-0.5 mr-2" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                        <p class="text-sm text-gray-700"><span class="font-medium">Pelajaran:</span>
                                            {{ $g->mapel_mengajar }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-16" data-aos="fade-up">
                        <div class="w-20 h-20 mx-auto mb-4 bg-blue-100 rounded-full flex items-center justify-center">
                            <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-700 mb-2">Tidak ada data guru</h3>
                        <p class="text-gray-500">Tidak ada data guru yang cocok dengan filter yang dipilih</p>
                    </div>
                @endforelse
            </div>

        </div>
    </div>

    <x-footer />
    <script src="../js/nav.js"></script>
</body>

</html>
