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

<body class="font-sans antialiased overflow-x-hidden bg-gradient-to-br from-emerald-50 via-green-50 to-teal-50 ">

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
    <section class="bg-gradient-to-r from-green-50 to-green-100 py-16 md:py-20 text-center shadow-inner">
        <div class="container mx-auto px-4 md:px-8">
            <h1 class="text-4xl md:text-5xl font-extrabold text-green-800 mb-4" data-aos="fade-down">
                Visi dan Misi Sekolah
            </h1>
            <p class="text-xl md:text-2xl text-green-700 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Fondasi kami dalam membentuk generasi unggul, berakhlak mulia, dan berwawasan masa depan.
            </p>
        </div>
    </section>
    {{-- Section End --}}

    {{-- Main Content --}}
    <main class="container mx-auto px-4 md:px-8 lg:px-16 py-12">
        <div class="grid md:grid-cols-2 gap-10">
            <div class="bg-white p-8 rounded-xl shadow-lg transform transition-transform duration-300 hover:scale-[1.02] hover:shadow-2xl"
                data-aos="zoom-in-right" data-aos-delay="200">
                <h2 class="text-3xl font-bold text-green-700 mb-4 text-center">
                    <i class="fas fa-eye mr-2"></i> Visi Sekolah
                </h2>
                <div class="block w-20 h-1 bg-green-500 mx-auto my-3 mb-10 rounded-sm"></div>

                <p class="text-lg leading-relaxed text-gray-700 text-center mb-4">
                    {{ '"' . ($visi->visi ?? 'Belum ada Visi yang ditetapkan.') . '"' }}
                </p>
                <div class="mt-6 text-sm text-gray-500 text-center">
                    Sebuah pandangan jauh ke depan yang menginspirasi langkah kami.
                </div>
            </div>

            <div class="bg-white p-8 rounded-xl shadow-lg transform transition-transform duration-300 hover:scale-[1.02] hover:shadow-2xl"
                data-aos="zoom-in-left" data-aos-delay="300">
                <h2 class="text-3xl font-bold text-green-700 mb-4 text-center">
                    <i class="fas fa-rocket mr-2"></i> Misi Sekolah
                </h2>
                <div class="block w-20 h-1 bg-green-500 mx-auto my-3 mb-10 rounded-sm"></div>
                <ul class="list-none p-0 text-lg leading-relaxed space-y-3">
                    @forelse ($misis as $itemMisi)
                        <li class="relative pl-7 mb-3 text-gray-700" data-aos="fade-up" data-aos-delay="400">
                            <span class="absolute left-0 top-0.5 text-green-500 font-bold text-xl">•</span>
                            {{ $itemMisi->misi }}
                        </li>
                    @empty
                        <li class="relative pl-7 mb-3 text-gray-700" data-aos="fade-up" data-aos-delay="400">
                            <span class="absolute left-0 top-0.5 text-green-500 font-bold text-xl">•</span>
                            Belum ada poin misi yang ditetapkan.
                        </li>
                    @endforelse
                </ul>
                <div class="mt-6 text-sm text-gray-500 text-center" data-aos="fade-up" data-aos-delay="500">
                    Langkah-langkah konkret kami untuk mencapai visi tersebut.
                </div>
            </div>
        </div>
    </main>
    {{-- Main End --}}


    {{-- Footer --}}
    <x-footer />
    {{-- Footer end --}}

    <script src="../js/nav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
