<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visi & Misi - SD Muhammadiyah Bausasran</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0V4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>

<body class="font-sans antialiased overflow-x-hidden  ">

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


    <!-- Visi & Misi Section -->
    <section class="bg-gradient-to-r from-blue-50 to-sky-100 py-16 md:py-20 text-center relative overflow-hidden">
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div
                class="absolute top-20 left-1/4 w-40 h-40 bg-blue-200 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-float-slow">
            </div>
            <div
                class="absolute bottom-20 right-1/4 w-60 h-60 bg-sky-100 rounded-full mix-blend-multiply filter blur-xl opacity-15 animate-float-medium">
            </div>
        </div>

        <div class="container mx-auto px-4 md:px-8 relative z-10">
            <h1 class="text-4xl md:text-5xl font-bold text-blue-800 mb-4" data-aos="fade-down">
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-sky-500">
                    Visi & Misi Sekolah
                </span>
            </h1>
            <p class="text-xl md:text-2xl text-blue-700 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Landasan kami dalam membentuk generasi unggul yang berakhlak mulia dan berwawasan global
            </p>
        </div>
    </section>

    <!-- Main Content -->
    <main class="bg-gradient-to-br from-blue-50 to-sky-50 bg-opacity-70 py-12">
        <div class="container mx-auto px-4 md:px-8 lg:px-16">
            <div class="grid md:grid-cols-2 gap-10">
                <div class="bg-white/90 backdrop-blur-sm p-8 rounded-2xl shadow-xl border border-blue-100/50 transform transition-all duration-300 hover:scale-[1.02] hover:shadow-2xl group"
                    data-aos="zoom-in-right" data-aos-delay="200">
                    <div class="text-center mb-8">
                        <div
                            class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-blue-200 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </div>
                        <h2 class="text-2xl font-bold text-blue-800 mb-2">Visi Sekolah</h2>
                        <div class="w-20 h-1 bg-gradient-to-r from-blue-400 to-sky-400 mx-auto rounded-full mb-6"></div>
                    </div>

                    <div class="relative">
                        <svg class="absolute -top-8 -left-6 text-blue-100 w-16 h-16" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                        </svg>
                        <blockquote class="text-lg leading-relaxed text-gray-700 text-center px-6">
                            "{{ $visi->visi ?? 'Belum ada Visi yang ditetapkan.' }}"
                        </blockquote>
                        <svg class="absolute -bottom-8 -right-6 text-blue-100 w-16 h-16" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                        </svg>
                    </div>

                    <div class="mt-10 text-sm text-blue-500 text-center italic">
                        Panduan utama kami dalam setiap langkah pendidikan
                    </div>
                </div>

                <!-- Misi Card -->
                <div class="bg-white/90 backdrop-blur-sm p-8 rounded-2xl shadow-xl border border-blue-100/50 transform transition-all duration-300 hover:scale-[1.02] hover:shadow-2xl group"
                    data-aos="zoom-in-left" data-aos-delay="300">
                    <div class="text-center mb-8">
                        <div
                            class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-blue-200 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h2 class="text-2xl font-bold text-blue-800 mb-2">Misi Sekolah</h2>
                        <div class="w-20 h-1 bg-gradient-to-r from-blue-400 to-sky-400 mx-auto rounded-full mb-6"></div>
                    </div>

                    <ul class="space-y-4">
                        @forelse ($misis as $itemMisi)
                            <li class="flex items-start" data-aos="fade-up"
                                data-aos-delay="{{ $loop->index * 50 + 400 }}">
                                <div class="flex-shrink-0 mt-1 mr-3">
                                    <div
                                        class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center text-blue-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                                <p class="text-gray-700">{{ $itemMisi->misi }}</p>
                            </li>
                        @empty
                            <li class="flex items-start" data-aos="fade-up" data-aos-delay="400">
                                <div class="flex-shrink-0 mt-1 mr-3">
                                    <div
                                        class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center text-blue-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                                <p class="text-gray-700">Belum ada poin misi yang ditetapkan.</p>
                            </li>
                        @endforelse
                    </ul>

                    <div class="mt-8 text-sm text-blue-500 text-center italic">
                        Langkah strategis untuk mewujudkan visi kami
                    </div>
                </div>
            </div>
        </div>
    </main>


    {{-- Footer --}}
    <x-footer />
    {{-- Footer end --}}

    <script src="{{ asset('js/nav.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
