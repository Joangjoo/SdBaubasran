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

    <x-navbar />

    <section class="relative bg-gradient-to-r from-blue-600 to-sky-600 text-white py-28 overflow-hidden">
        <div class="absolute inset-0 opacity-20">
            <div
                class="absolute top-0 left-0 w-full h-full bg-[url('https://via.placeholder.com/1920x1080')] bg-cover bg-center">
            </div>
        </div>
        <div class="container mx-auto px-4 relative z-10 text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold mb-6">Galeri Video SD Baubasran</h1>
            <p class="text-xl md:text-2xl max-w-3xl mx-auto mb-8">Saksikan berbagai momen berharga dan kegiatan seru di
                sekolah kami</p>
            <div class="flex justify-center space-x-4">
                <a href="#video-gallery"
                    class="bg-white text-blue-600 px-8 py-3 rounded-full font-semibold hover:bg-blue-50 transition duration-300 shadow-lg">
                    Jelajahi Video
                </a>
                <a href="{{ route('galeri.index') }}"
                    class="bg-transparent border-2 border-white text-white px-8 py-3 rounded-full font-semibold hover:bg-white hover:text-blue-600 transition duration-300">
                    Lihat Galeri Foto
                </a>
            </div>
        </div>
    </section>


    <section class="bg-blue-50 py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="bg-white p-6 rounded-xl shadow-md text-center">
                    <div class="text-4xl font-bold text-blue-600 mb-2">5</div>
                    <p class="text-gray-600">Total Video</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md text-center">
                    <div class="text-4xl font-bold text-blue-600 mb-2">25K+</div>
                    <p class="text-gray-600">Total Tayangan</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md text-center">
                    <div class="text-4xl font-bold text-blue-600 mb-2">120+</div>
                    <p class="text-gray-600">Jam Konten</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md text-center">
                    <div class="text-4xl font-bold text-blue-600 mb-2">12</div>
                    <p class="text-gray-600">Kategori</p>
                </div>
            </div>
        </div>
    </section>

    <section id="video-gallery" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Koleksi Video Terbaru</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Temukan momen-momen berharga dari berbagai kegiatan di SD
                    Baubasran</p>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-400 to-sky-500 rounded-full mx-auto mt-6"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($videos as $video)
                    <div
                        class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                        <!-- Video Embed -->
                        <div class="aspect-w-16 aspect-h-9">
                            <iframe src="{{ $video->embed_url }}" class="w-full h-full" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                            </iframe>
                        </div>
                        <div class="p-6">
                            <h3 class="font-bold text-xl mb-2 text-gray-800">{{ $video->judul }}</h3>
                            <div class="flex items-center text-sm text-gray-500 mb-3">
                                <i class="ri-calendar-line mr-2"></i>
                                {{ $video->created_at->format('d M Y') }}
                                @if ($video->duration)
                                    <span class="mx-2">•</span>
                                    <i class="ri-time-line mr-2"></i>
                                    {{ $video->duration }}
                                @endif
                            </div>
                            @if ($video->deskripsi)
                                <p class="text-gray-700">{{ $video->deskripsi }}</p>
                            @endif
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-20">
                        <div class="w-32 h-32 mx-auto mb-6 text-gray-300">
                            <i class="ri-video-line text-8xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-600 mb-2">Belum ada video</h3>
                        <p class="text-gray-500 max-w-md mx-auto">Video kegiatan sekolah akan segera diunggah</p>
                    </div>
                @endforelse
            </div>

        </div>
    </section>




    <x-footer />



    <script>
        const videoCards = document.querySelectorAll('[data-video-url]');
        const videoModal = document.getElementById('videoModal');
        const modalVideoIframe = document.getElementById('modalVideoIframe');
        const modalVideoTitle = document.getElementById('modalVideoTitle');
        const modalVideoDate = document.getElementById('modalVideoDate');
        const modalVideoViews = document.getElementById('modalVideoViews');
        const modalVideoDesc = document.getElementById('modalVideoDesc');
        const closeVideoModal = document.getElementById('closeVideoModal');

        videoCards.forEach(card => {
            card.addEventListener('click', function(e) {
                e.preventDefault();

                const videoUrl = this.getAttribute('data-video-url');
                const title = this.getAttribute('data-title');
                const date = this.getAttribute('data-date');
                const views = this.getAttribute('data-views');
                const desc = this.getAttribute('data-desc');

                modalVideoIframe.src = videoUrl;
                modalVideoTitle.textContent = title;
                modalVideoDate.textContent = date;
                modalVideoViews.textContent = views + ' ditonton';
                modalVideoDesc.textContent = desc;

                videoModal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            });
        });

        closeVideoModal.addEventListener('click', function() {
            videoModal.classList.add('hidden');
            modalVideoIframe.src = '';
            document.body.style.overflow = '';
        });

        videoModal.addEventListener('click', function(e) {
            if (e.target === videoModal) {
                videoModal.classList.add('hidden');
                modalVideoIframe.src = '';
                document.body.style.overflow = '';
            }
        });
    </script>
    <script src="{{ asset('js/nav.js') }}"></script>
</body>

</html>
