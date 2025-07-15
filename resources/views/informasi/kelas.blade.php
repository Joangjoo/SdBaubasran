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
    <div class="flex items-center gap-4 bg-[#06923E] px-6 py-4 shadow-sm">
        <div class="ml-2">
            <img src="../assets/logoBaru.png" alt="Logo SD" class="w-16 h-16" />
        </div>
        <div>
            <h1 class="text-xl font-semibold text-gray-100 ">SD MUHAMMADIYAH BAUSASRAN</h1>
            <p class="text-sm text-gray-300">Kec. Danurejan, Kota Yogyakarta, Daerah Istimewa Yogyakarta</p>
        </div>
    </div>
    {{-- Header end --}}

    {{-- Nav Start --}}
    <x-navbar />
    {{-- Nav End --}}
    <div class="bg-gray-50 py-12">
        <div class="container mx-auto px-4">

            <!-- Header dan Filter -->
            <div class="text-center mb-10">
                <h1 class="text-4xl font-bold text-gray-800">Informasi Kelas</h1>
                <p class="text-gray-600 mt-2">Temukan informasi guru dan mata pelajaran untuk setiap kelas.</p>
            </div>

            <div class="mb-8 p-4 bg-white rounded-lg shadow-md">
                <form action="{{ route('kelas.index') }}" method="GET"
                    class="flex flex-col sm:flex-row items-center gap-4">
                    <label for="kelas" class="font-semibold text-gray-700">Pilih Kelas:</label>
                    <select name="kelas" id="kelas"
                        class="border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        <option value="">Semua Kelas</option>
                        @for ($i = 1; $i <= 6; $i++)
                            <option value="{{ $i }}" {{ $selectedKelas == $i ? 'selected' : '' }}>Kelas
                                {{ $i }}</option>
                        @endfor
                    </select>
                    <button type="submit"
                        class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">Tampilkan</button>
                    <a href="{{ route('kelas.index') }}"
                        class="px-4 py-2 bg-gray-600 text-white rounded-md hover:bg-gray-700 transition">Reset
                        Filter</a>
                </form>
            </div>

            <!-- Daftar Guru -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse ($guru as $g)
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden flex items-start p-4 space-x-4">
                        <img src="{{ asset('storage/' . $g->foto) }}" alt="Foto {{ $g->nama_lengkap }}"
                            class="w-24 h-24 rounded-full object-cover border-2 border-gray-200">
                        <div class="flex-1">
                            <h3 class="text-lg font-bold text-gray-900">{{ $g->nama_lengkap }}</h3>
                            <p class="text-sm text-gray-600">{{ $g->jabatan }}</p>
                            <div class="mt-2 border-t pt-2 space-y-1">
                                <p class="text-xs text-gray-800"><span class="font-semibold">Mengajar Kelas:</span>
                                    {{ $g->kelas_mengajar }}</p>
                                <p class="text-xs text-gray-800"><span class="font-semibold">Pelajaran:</span>
                                    {{ $g->mapel_mengajar }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center text-gray-500 py-10">
                        <p>Tidak ada data guru yang cocok dengan filter yang dipilih.</p>
                    </div>
                @endforelse
            </div>

        </div>
    </div>
    <script src="../js/nav.js"></script>
</body>

</html>
