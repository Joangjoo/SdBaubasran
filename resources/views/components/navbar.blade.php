<nav id="navbar" class="fixed top-24 z-50 inset-x-0 mx-auto w-[95%] max-w-7xl bg-[#FF6F00] backdrop-blur-md rounded-xl shadow-lg px-6 py-3 transition-all duration-300 text-white">
    <div class="flex items-center justify-between">
        <ul class="hidden lg:flex items-center space-x-8 text-sm font-semibold pt-1 pb-1">
            <li>
                <a href="{{ route('home') }}" class="relative px-2 py-1 hover:text-blue-600 transition-colors duration-300 group">
                    HOME
                    <span class="absolute bottom-0 left-0 w-full h-0.5 bg-blue-600 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span>
                </a>
            </li>
            <li class="relative">
                <button type="button" class="flex items-center px-2 py-1 hover:text-blue-600 transition-colors duration-300 dropdown-trigger group" data-dropdown="profil">
                    TENTANG KAMI
                    <svg class="ml-2 w-4 h-4 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <ul id="profil" class="absolute left-0 mt-3 w-48 bg-white shadow-xl rounded-lg border border-gray-100 opacity-0 invisible transform scale-y-90 transition-all duration-300 z-50">
                    <li><a href="{{ route('tentangkami.index') }}" class="block px-4 py-2 text-gray-700 hover:bg-emerald-50 hover:text-blue-600 transition-colors duration-200 rounded-t-lg">Profile</a></li>
                    <li><a href="{{ route('tentangkami.visiMisi') }}" class="block px-4 py-2 text-gray-700 hover:bg-emerald-50 hover:text-blue-600 transition-colors duration-200">Visi & Misi</a></li>
                    <li><a href="{{ route('tentangkami.sejarah') }}" class="block px-4 py-2 text-gray-700 hover:bg-emerald-50 hover:text-blue-600 transition-colors duration-200">Sejarah</a></li>
                    <li><a href="{{ route('struktur.organisasi') }}" class="block px-4 py-2 text-gray-700 hover:bg-emerald-50 hover:text-blue-600 transition-colors duration-200">Struktur Organisasi</a></li>
                    <li><a href="{{ route('struktur.gtk') }}" class="block px-4 py-2 text-gray-700 hover:bg-emerald-50 hover:text-blue-600 transition-colors duration-200">GTK</a></li>
                    <li><a href="{{route('tentangkami.fasilitas')}}" class="block px-4 py-2 text-gray-700 hover:bg-emerald-50 hover:text-blue-600 transition-colors duration-200">Fasilitas</a></li>
                    <li><a href="{{ route('tentangkami.ekstra') }}" class="block px-4 py-2 text-gray-700 hover:bg-emerald-50 hover:text-blue-600 transition-colors duration-200 rounded-b-lg">Ekstrakurikuler</a></li>
                </ul>
            </li>
            <li class="relative">
                <button type="button" class="flex items-center px-2 py-1 hover:text-blue-600 transition-colors duration-300 dropdown-trigger group" data-dropdown="galeri">
                    DOKUMENTASI
                    <svg class="ml-2 w-4 h-4 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <ul id="galeri" class="absolute left-0 mt-3 w-48 bg-white shadow-xl rounded-lg border border-gray-100 opacity-0 invisible transform scale-y-90 transition-all duration-300 z-50">
                    <li><a href="{{ route('galeri.index') }}" class="block px-4 py-2 text-gray-700 hover:bg-emerald-50 hover:text-blue-600 transition-colors duration-200 rounded-t-lg">Galeri</a></li>
                    <li><a href="{{ route('videos.index') }}" class="block px-4 py-2 text-gray-700 hover:bg-emerald-50 hover:text-blue-600 transition-colors duration-200 rounded-b-lg">Video</a></li>
                </ul>
            </li>
            <li class="relative">
                <button type="button" class="flex items-center px-2 py-1 hover:text-blue-600 transition-colors duration-300 dropdown-trigger group" data-dropdown="informasi">
                    INFORMASI
                    <svg class="ml-2 w-4 h-4 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <ul id="informasi" class="absolute left-0 mt-3 w-48 bg-white shadow-xl rounded-lg border border-gray-100 opacity-0 invisible transform scale-y-90 transition-all duration-300 z-50">
                    <li><a href="{{ route('informasi.berita') }}" class="block px-4 py-2 text-gray-700 hover:bg-emerald-50 hover:text-blue-600 transition-colors duration-200 rounded-t-lg">Berita</a></li>
                    <li><a href="{{ route('kelas.index') }}" class="block px-4 py-2 text-gray-700 hover:bg-emerald-50 hover:text-blue-600 transition-colors duration-200 rounded-b-lg">Kelas</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ route('ppdb.ppdb') }}" class="relative px-2 py-1 hover:text-blue-600 transition-colors duration-300 group">
                    PPDB SD
                    <span class="absolute bottom-0 left-0 w-full h-0.5 bg-blue-600 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span>
                </a>
            </li>
        </ul>

        <!-- Mobile Menu Toggle -->
        <div class="lg:hidden flex items-center">
            <button id="menu-toggle" class="text-white focus:outline-none p-2 hover:bg-white/20 rounded-full transition-colors duration-200">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                    <path id="menu-icon" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>
</nav>

<!-- Mobile Menu -->
<div id="mobile-menu" class="fixed inset-0 bg-white z-[100] hidden flex-col opacity-0 translate-x-full transition-all duration-300 ease-in-out">
    <div class="flex items-center justify-between px-6 py-4 shadow-md border-b bg-[#FF6F00]">
        <span class="text-white font-bold">MENU</span>
        <button id="menu-close" class="text-white hover:text-white transition">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <path d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Menu Items -->
    <div class="flex-1 overflow-y-auto p-6 space-y-2 text-gray-800 font-medium text-base">
        <a href="{{ route('home') }}" class="block px-4 py-3 rounded-md hover:bg-orange-50 hover:text-[#FF6F00] transition-all duration-300">Beranda</a>
        <div>
            <button class="w-full flex justify-between items-center px-4 py-3 rounded-md hover:bg-orange-50 hover:text-[#FF6F00] transition-all duration-300 dropdown-mobile-btn" data-dropdown="tentang">
                Tentang Kami
                <svg class="w-4 h-4 transform transition-transform duration-300" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <ul id="tentang" class="dropdown-mobile-menu hidden mt-2 pl-6 space-y-1 text-sm text-gray-600 transition-all duration-300 max-h-0 overflow-hidden">
                <li><a href="{{ route('tentangkami.index') }}" class="block py-2 hover:text-[#FF6F00] transition-colors duration-200">Profil</a></li>
                <li><a href="{{ route('tentangkami.visiMisi') }}" class="block py-2 hover:text-[#FF6F00] transition-colors duration-200">Visi & Misi</a></li>
                <li><a href="{{ route('tentangkami.sejarah') }}" class="block py-2 hover:text-[#FF6F00] transition-colors duration-200">Sejarah</a></li>
                <li><a href="{{ route('struktur.organisasi') }}" class="block py-2 hover:text-[#FF6F00] transition-colors duration-200">Struktur Organisasi</a></li>
                <li><a href="{{ route('struktur.gtk') }}" class="block py-2 hover:text-[#FF6F00] transition-colors duration-200">GTK</a></li>
            </ul>
        </div>
        <div>
            <button class="w-full flex justify-between items-center px-4 py-3 rounded-md hover:bg-orange-50 hover:text-[#FF6F00] transition-all duration-300 dropdown-mobile-btn" data-dropdown="dokumentasi">
                Dokumentasi
                <svg class="w-4 h-4 transform transition-transform duration-300" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <ul id="dokumentasi" class="dropdown-mobile-menu hidden mt-2 pl-6 space-y-1 text-sm text-gray-600 transition-all duration-300 max-h-0 overflow-hidden">
                <li><a href="{{ route('galeri.index') }}" class="block py-2 hover:text-[#FF6F00] transition-colors duration-200">Galeri</a></li>
                <li><a href="{{ route('videos.index') }}" class="block py-2 hover:text-[#FF6F00] transition-colors duration-200">Video</a></li>
            </ul>
        </div>
        <div>
            <button class="w-full flex justify-between items-center px-4 py-3 rounded-md hover:bg-orange-50 hover:text-[#FF6F00] transition-all duration-300 dropdown-mobile-btn" data-dropdown="informasi-mobile">
                Informasi
                <svg class="w-4 h-4 transform transition-transform duration-300" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <ul id="informasi-mobile" class="dropdown-mobile-menu hidden mt-2 pl-6 space-y-1 text-sm text-gray-600 transition-all duration-300 max-h-0 overflow-hidden">
                <li><a href="{{ route('informasi.berita') }}" class="block py-2 hover:text-[#FF6F00] transition-colors duration-200">Berita</a></li>
                <li><a href="{{ route('kelas.index') }}" class="block py-2 hover:text-[#FF6F00] transition-colors duration-200">Kelas</a></li>
            </ul>
        </div>
        <a href="{{ route('ppdb.ppdb') }}" class="block px-4 py-3 rounded-md hover:bg-orange-50 hover:text-[#FF6F00] transition-all duration-300">PPDB SD</a>
    </div>
</div>
