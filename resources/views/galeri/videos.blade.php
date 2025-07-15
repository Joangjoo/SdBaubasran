<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Video</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="flex items-center gap-4 bg-[#06923E] px-6 py-4 shadow-sm">
        <div class="ml-2">
            <img src="../assets/logoBaru.png" alt="Logo SD" class="w-16 h-16" />
        </div>
        <div>
            <h1 class="text-xl font-semibold text-gray-100 ">SD MUHAMMADIYAH BAUSASRAN</h1>
            <p class="text-sm text-gray-300">Kec. Danurejan, Kota Yogyakarta, Daerah Istimewa Yogyakarta</p>
        </div>
    </div>
    <x-navbar/>

    <div class="bg-gray-100">
        <div class="container mx-auto px-4 py-16">
            <div class="text-center mb-12">
                <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 tracking-tight">Galeri Video</h1>
                <p class="mt-4 text-lg text-gray-600">Saksikan berbagai momen dan kegiatan seru di SD Baubasran.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($videos as $video)
                    @if ($video->embed_url) {{-- Hanya tampilkan jika ID video valid --}}
                        <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                            {{-- Responsive Video Wrapper --}}
                            <div class="aspect-w-16 aspect-h-9">
                                <iframe src="{{ $video->embed_url }}" 
                                        frameborder="0" 
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                        allowfullscreen
                                        class="w-full h-full">
                                </iframe>
                            </div>
                            <div class="p-6">
                                <h3 class="font-bold text-xl mb-2 text-gray-800">{{ $video->judul }}</h3>
                                @if($video->deskripsi)
                                    <p class="text-gray-700 text-base">
                                        {{ $video->deskripsi }}
                                    </p>
                                @endif
                            </div>
                        </div>
                    @endif
                @empty
                    <div class="col-span-full text-center text-gray-500 py-10">
                        <p>Belum ada video yang diunggah.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>

    <x-footer />
    <script src="../js/nav.js"></script>
</body>
</html>