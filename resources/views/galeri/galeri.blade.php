<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <title>Document</title>
</head>

<body>
    <div class="flex items-center gap-4 bg-white px-6 py-4 shadow-sm">
        <div class="ml-2">
            <img src="assets/sd.png" alt="Logo SD" class="w-16 h-16" />
        </div>
        <div>
            <h1 class="text-xl font-semibold text-gray-800">SD MUHAMMADIYAH BAUSASRAN</h1>
            <p class="text-sm text-gray-600">Kec. Danurejan, Kota Yogyakarta, Daerah Istimewa Yogyakarta</p>
        </div>
    </div>

    <nav class="flex items-center justify-between bg-gray-100 px-6 py-3 w-[90%] rounded-lg shadow-md mx-auto mt-4">
        <ul class="hidden md:flex items-center space-x-6 text-sm font-medium text-gray-700">
            <li><a href="#" class="hover:text-blue-600 transition-colors duration-200">HOME</a></li>

            <li class="relative">
                <button type="button"
                    class="flex items-center hover:text-blue-600 transition-colors duration-200 dropdown-trigger"
                    data-dropdown="profil">
                    PROFIL
                    <svg class="ml-1 w-3 h-3 transform transition-transform duration-200" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <ul id="profil"
                    class="absolute left-0 mt-2 w-40 bg-white shadow-lg rounded-md border opacity-0 invisible transform -translate-y-2 transition-all duration-200 z-50">
                    <li><a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 transition-colors duration-200 rounded-t-md">Visi &
                            Misi</a></li>
                    <li><a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 transition-colors duration-200 rounded-b-md">Sejarah</a>
                    </li>
                </ul>
            </li>

            <li class="relative">
                <button type="button"
                    class="flex items-center hover:text-blue-600 transition-colors duration-200 dropdown-trigger"
                    data-dropdown="galeri">
                    GALERI
                    <svg class="ml-1 w-3 h-3 transform transition-transform duration-200" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <ul id="galeri"
                    class="absolute left-0 mt-2 w-40 bg-white shadow-lg rounded-md border opacity-0 invisible transform -translate-y-2 transition-all duration-200 z-50">
                    <li><a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 transition-colors duration-200 rounded-t-md">Foto</a>
                    </li>
                    <li><a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 transition-colors duration-200 rounded-b-md">Video</a>
                    </li>
                </ul>
            </li>

            <li class="relative">
                <button type="button"
                    class="flex items-center hover:text-blue-600 transition-colors duration-200 dropdown-trigger"
                    data-dropdown="informasi">
                    INFORMASI
                    <svg class="ml-1 w-3 h-3 transform transition-transform duration-200" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <ul id="informasi"
                    class="absolute left-0 mt-2 w-40 bg-white shadow-lg rounded-md border opacity-0 invisible transform -translate-y-2 transition-all duration-200 z-50">
                    <li><a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 transition-colors duration-200 rounded-t-md">Berita</a>
                    </li>
                    <li><a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 transition-colors duration-200 rounded-b-md">Pengumuman</a>
                    </li>
                </ul>
            </li>

            <li><a href="#" class="hover:text-blue-600 transition-colors duration-200">PPDB SD</a></li>
        </ul>
        <div class="hidden md:block">
            <div>
                <img src="assets/bgsearch.png" alt="" class="mt-1 h-12">
            </div>
        </div>

        <div class="md:hidden flex justify-end w-full">
            <button id="menu-toggle" class="text-gray-700 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto px-4 py-8 grid grid-cols-1 md:grid-cols-4 gap-6">
        <!-- Sidebar Kiri -->
        <aside class="space-y-6 md:col-span-1">
            <!-- Kontak -->
            <div class="text-sm space-y-1">
                <h2 class="text-lg font-semibold border-b pb-1">KONTAK</h2>
                <p>Alamat:</p>
                <p>Jl. Bausasran No.48, Kec. Danurejan, Kota Yogyakarta, Daerah Istimewa Yogyakarta</p>
                <p>Telp: (0274) 555555</p>
                <p>Email: sdmuhbausasran@email.sch.id</p>
                <div>
                    <p>Media Sosial:</p>
                    <ul class="list-disc pl-5 text-blue-600">
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">YouTube</a></li>
                    </ul>
                </div>
            </div>

            <!-- Kalender -->
            <div>
                <h2 class="text-lg font-semibold border-b pb-1 mb-2">KALENDER</h2>
                <div class="text-sm text-center">
                    <p class="font-semibold">April 2025</p>
                    <div class="grid grid-cols-7 gap-1 mt-2 text-xs">
                        <div>Sen</div>
                        <div>Sel</div>
                        <div>Rab</div>
                        <div>Kam</div>
                        <div>Jum</div>
                        <div>Sab</div>
                        <div>Min</div>
                        <!-- Hari: tanda hari aktif dengan bg-green-200 -->
                        <div class="text-gray-400">31</div>
                        <div>1</div>
                        <div>2</div>
                        <div class="bg-green-200 rounded">3</div>
                        <div>4</div>
                        <div>5</div>
                        <div>6</div>
                        <div>7</div>
                        <div>8</div>
                        <div>9</div>
                        <div>10</div>
                        <div>11</div>
                        <div>12</div>
                        <div>13</div>
                        <div>14</div>
                        <div>15</div>
                        <div>16</div>
                        <div>17</div>
                        <div>18</div>
                        <div>19</div>
                        <div>20</div>
                        <div>21</div>
                        <div>22</div>
                        <div>23</div>
                        <div>24</div>
                        <div>25</div>
                        <div>26</div>
                        <div>27</div>
                        <div>28</div>
                        <div>29</div>
                        <div>30</div>
                        <div class="text-gray-400">1</div>
                        <div class="text-gray-400">2</div>
                        <div class="text-gray-400">3</div>
                        <div class="text-gray-400">4</div>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Konten Galeri -->
        <main class="col-span-2 px-4 md:px-8">
            <h1 class="text-3xl font-bold text-center text-green-600 mb-6 border-b pb-2">GALERI</h1>

            <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
                @foreach ($galeri as $galeriItem)
                    <div
                        class="bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden">
                        <img src="{{ asset('storage/' . $galeriItem->gambar) }}" alt="{{ $galeriItem->judul }}"
                            class="w-full h-56 object-cover object-center rounded-t-xl" />
                        <div class="p-3 text-center">
                            <p class="text-sm font-medium text-gray-800 truncate">{{ $galeriItem->judul }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            
            <div class="mt-8 flex justify-center space-x-2 text-sm">
                {{ $galeri->links('pagination::tailwind') }}
            </div>
        </main>


        <aside class="space-y-4 md:col-span-1">
            <div>
                <h2 class="text-lg font-semibold border-b pb-1">BERITA TERPOPULER</h2>
                <ul class="space-y-2 text-sm mt-2">
                    <li>
                        <a href="#" class="block text-blue-600 hover:underline">Kegiatan Outbond</a>
                    </li>
                    <li>
                        <a href="#" class="block text-blue-600 hover:underline">JAMBORE</a>
                    </li>
                    <li>
                        <a href="#" class="block text-blue-600 hover:underline">Peringatan HUT RI</a>
                    </li>
                    <li>
                        <a href="#" class="block text-blue-600 hover:underline">Hari Guru</a>
                    </li>
                    <li>
                        <a href="#" class="block text-blue-600 hover:underline">KARNAVAL PAHLAWAN</a>
                    </li>
                    <li>
                        <a href="#" class="block text-blue-600 hover:underline">Tari Tradisional</a>
                    </li>
                </ul>
            </div>
        </aside>
    </div>

    <script src="https://unpkg.com/boxicons@2.1.3/dist/boxicons.js"></script>
    <script src="js/kalender.js"></script>
    <script src="js/nav.js"></script>
</body>

</html>
