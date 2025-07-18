<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>PPDB</title>
</head>

<body>
    <x-header />
    <x-navbar />
    <section class="bg-gradient-to-br from-blue-50 to-sky-50 py-16">
    <div class="container mx-auto px-4 max-w-6xl">
        <!-- Header Section with AOS -->
        <div class="text-center mb-16" data-aos="fade-down" data-aos-duration="800">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4" data-aos="fade-up" data-aos-delay="100">
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-sky-600">
                    Penerimaan Peserta Didik Baru
                </span>
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                Proses pendaftaran siswa baru SD Muhammadiyah Condongcatur Tahun Ajaran 2024/2025
            </p>
            <div class="w-24 h-1 bg-gradient-to-r from-blue-400 to-sky-500 rounded-full mx-auto mt-6"
                data-aos="fade-up" data-aos-delay="300"></div>
        </div>

        <!-- Timeline Section -->
        <div class="relative">
            <!-- Timeline Line -->
            <div class="hidden md:block absolute left-1/2 h-full w-1 bg-gradient-to-b from-blue-200 to-sky-200 transform -translate-x-1/2"
                data-aos="fade" data-aos-delay="400"></div>

            <!-- Timeline Items -->
            <div class="space-y-12 md:space-y-16">
                <!-- Tahap 1 -->
                <div class="relative flex flex-col md:flex-row items-center">
                    <div class="flex-1 md:pr-12 mb-6 md:mb-0 order-2 md:order-1" data-aos="fade-right" data-aos-delay="100">
                        <div class="bg-white p-8 rounded-2xl shadow-lg border border-blue-100 hover:shadow-xl transition-all duration-300">
                            <h3 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                                <span class="w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center mr-3">1</span>
                                Persiapan dan Pendaftaran Awal
                            </h3>
                            <ul class="space-y-3 text-gray-600">
                                <li class="flex items-start" data-aos="fade-right" data-aos-delay="150">
                                    <svg class="w-5 h-5 text-blue-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>Memenuhi Syarat Usia: Minimal 6 tahun per 1 Juli tahun pelajaran berlangsung</span>
                                </li>
                                <li class="flex items-start" data-aos="fade-right" data-aos-delay="200">
                                    <svg class="w-5 h-5 text-blue-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>Membeli Formulir: Datang ke Bagian Keuangan SD Muhammadiyah Condongcatur</span>
                                </li>
                                <li class="flex items-start" data-aos="fade-right" data-aos-delay="250">
                                    <svg class="w-5 h-5 text-blue-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>Menitipkan Dokumen: Fotokopi Akta Kelahiran, KK, dan nomor telepon ke Tata Usaha (Senin-Jumat jam kerja)</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold text-xl mb-4 md:mb-0 order-1 md:order-2 relative z-10 shadow-lg" data-aos="zoom-in" data-aos-delay="300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                    </div>
                </div>

                <!-- Tahap 2 -->
                <div class="relative flex flex-col md:flex-row items-center">
                    <div class="flex-1 md:pl-12 mb-6 md:mb-0" data-aos="fade-left" data-aos-delay="100">
                        <div class="bg-white p-8 rounded-2xl shadow-lg border border-blue-100 hover:shadow-xl transition-all duration-300">
                            <h3 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                                <span class="w-8 h-8 bg-green-600 text-white rounded-full flex items-center justify-center mr-3">2</span>
                                Pengisian dan Pengembalian Formulir
                            </h3>
                            <ul class="space-y-3 text-gray-600">
                                <li class="flex items-start" data-aos="fade-left" data-aos-delay="150">
                                    <svg class="w-5 h-5 text-green-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>Mengambil Formulir: Di bagian keuangan setelah pembelian</span>
                                </li>
                                <li class="flex items-start" data-aos="fade-left" data-aos-delay="200">
                                    <svg class="w-5 h-5 text-green-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>Mengisi Formulir: Lengkapi biodata dan riwayat, siapkan dokumen pendukung (foto, akta lahir, KK, surat keterangan TK)</span>
                                </li>
                                <li class="flex items-start" data-aos="fade-left" data-aos-delay="250">
                                    <svg class="w-5 h-5 text-green-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>Mengembalikan Formulir: Kembalikan ke bagian administrasi dan dapatkan jadwal tes unjuk kreativitas</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="w-16 h-16 bg-green-600 rounded-full flex items-center justify-center text-white font-bold text-xl mb-4 md:mb-0 order-1 md:order-2 relative z-10 shadow-lg" data-aos="zoom-in" data-aos-delay="300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                    </div>
                </div>

                <!-- Tahap 3 -->
                <div class="relative flex flex-col md:flex-row items-center">
                    <div class="flex-1 md:pr-12 mb-6 md:mb-0 order-2 md:order-1" data-aos="fade-right" data-aos-delay="100">
                        <div class="bg-white p-8 rounded-2xl shadow-lg border border-blue-100 hover:shadow-xl transition-all duration-300">
                            <h3 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                                <span class="w-8 h-8 bg-yellow-600 text-white rounded-full flex items-center justify-center mr-3">3</span>
                                Tes dan Seleksi
                            </h3>
                            <ul class="space-y-3 text-gray-600">
                                <li class="flex items-start" data-aos="fade-right" data-aos-delay="150">
                                    <svg class="w-5 h-5 text-yellow-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>Unjuk Kreativitas: Calon siswa mengikuti tes sesuai jadwal (November-Desember)</span>
                                </li>
                                <li class="flex items-start" data-aos="fade-right" data-aos-delay="200">
                                    <svg class="w-5 h-5 text-yellow-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>Wawancara: Untuk calon wali murid</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="w-16 h-16 bg-yellow-600 rounded-full flex items-center justify-center text-white font-bold text-xl mb-4 md:mb-0 order-1 md:order-2 relative z-10 shadow-lg" data-aos="zoom-in" data-aos-delay="300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>

                <!-- Tahap 4 -->
                <div class="relative flex flex-col md:flex-row items-center">
                    <div class="flex-1 md:pl-12 mb-6 md:mb-0" data-aos="fade-left" data-aos-delay="100">
                        <div class="bg-white p-8 rounded-2xl shadow-lg border border-blue-100 hover:shadow-xl transition-all duration-300">
                            <h3 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                                <span class="w-8 h-8 bg-red-600 text-white rounded-full flex items-center justify-center mr-3">4</span>
                                Pengumuman dan Registrasi Ulang
                            </h3>
                            <ul class="space-y-3 text-gray-600">
                                <li class="flex items-start" data-aos="fade-left" data-aos-delay="150">
                                    <svg class="w-5 h-5 text-red-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>Pengumuman: Tunggu hasil seleksi penerimaan siswa baru</span>
                                </li>
                                <li class="flex items-start" data-aos="fade-left" data-aos-delay="200">
                                    <svg class="w-5 h-5 text-red-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>Registrasi: Jika lulus, lakukan proses registrasi ulang untuk resmi menjadi siswa</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="w-16 h-16 bg-red-600 rounded-full flex items-center justify-center text-white font-bold text-xl mb-4 md:mb-0 order-1 md:order-2 relative z-10 shadow-lg" data-aos="zoom-in" data-aos-delay="300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <x-footer />

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true,
                offset: 120
            });
        });
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="../js/nav.js"></script>
</body>

</html>
