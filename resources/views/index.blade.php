<html>

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
</head>


<body>
    <div class="bg-slate-900">
        <header class="absolute inset-x-0 top-0 z-50">
            <nav aria-label="Global" class="flex items-center justify-between p-2 lg:px-8">
                <div class="flex lg:flex-1">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">Your Company</span>
                        <img src="{{ asset('uploads/logo.png') }}" alt="logo" class="h-25 w-auto" />
                    </a>
                </div>
                <div class="flex lg:hidden">
                    <button type="button" command="show-modal" commandfor="mobile-menu" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-200">
                        <span class="sr-only">Open main menu</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
                            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                <div class="hidden lg:flex lg:gap-x-12">
                    <a href="#" class="text-sm/6 font-semibold text-white hover:text-green-300">Beranda</a>
                    <a href="#" class="text-sm/6 font-semibold text-white hover:text-green-300">Berita</a>
                    <a href="#" class="text-sm/6 font-semibold text-white hover:text-green-300">Galeri</a>
                    <a href="#" class="text-sm/6 font-semibold text-white hover:text-green-300">Bumdes</a>
                </div>
                <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                    <a href="#" class="text-sm/6 font-semibold text-white mr-3">Masuk</a>
                </div>
            </nav>
            <el-dialog>
                <dialog id="mobile-menu" class="backdrop:bg-black lg:hidden">
                    <div tabindex="0" class="fixed inset-0 focus:outline-none">
                        <el-dialog-panel class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-black p-6 sm:max-w-sm sm:ring-1 sm:ring-gray-100/10">
                            <div class="flex items-center justify-between">
                                <a href="#" class="-m-1.5 p-1.5">
                                    <span class="sr-only">Your Company</span>
                                    <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="" class="h-8 w-auto" />
                                </a>
                                <button type="button" command="close" commandfor="mobile-menu" class="-m-2.5 rounded-md p-2.5 text-gray-200">
                                    <span class="sr-only">Close menu</span>
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
                                        <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                            <div class="mt-6 flow-root">
                                <div class="-my-6 divide-y divide-white/10">
                                    <div class="space-y-2 py-6">
                                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white hover:bg-white/5">Product</a>
                                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white hover:bg-white/5">Features</a>
                                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white hover:bg-white/5">Marketplace</a>
                                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white hover:bg-white/5">Company</a>
                                    </div>
                                    <div class="py-6">
                                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-white hover:bg-white/5">Log in</a>
                                    </div>
                                </div>
                            </div>
                        </el-dialog-panel>
                    </div>
                </dialog>
            </el-dialog>
        </header>

        <div class="relative isolate overflow-hidden bg-gray-900">
            <!-- Gambar background -->
            <div class="absolute inset-0 -z-10">
                <img src="{{ asset('uploads/carousel.jpg') }}"
                    alt="Desa Pojokrejo"
                    class="h-full w-full object-cover object-center">
                <!-- Overlay gelap biar teks tetap jelas -->
                <div class="absolute inset-0 bg-black/60"></div>
            </div>

            <!-- Konten di atas gambar -->
            <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56 px-6 lg:px-8">
                <div class="text-center">
                    <h1 class="text-5xl font-bold tracking-tight text-white sm:text-5xl">
                        Selamat Datang Di Desa Pojokrejo
                    </h1>
                    <p class="mt-8 text-lg font-medium text-gray-200 sm:text-xl">
                        menjalin hubungan baik antar masyarakat seluruh desa, gotong royong,
                        berkompromi demi misi pemberdayaan desa berkelanjutan
                    </p>
                    <div class="mt-10 flex items-center justify-center gap-x-6">
                        <a href="/profil-desa" class="rounded-md bg-green-600 px-6 py-3 text-base font-semibold text-white hover:bg-green-500">
                            Profil Desa
                        </a>
                        <a href="/berita" class="text-base font-semibold text-white hover:text-green-300">
                            Lapor
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="bg-gray-400 py-15 sm:py-20">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">

            <!-- Judul Section – lebih eye-catching -->
            <div class="mx-auto max-w-2xl lg:text-center">
                <p class="text-sm font-semibold tracking-widest text-gray-800 uppercase">
                    Informasi dan Layanan
                </p>
            </div>

            <!-- Grid 6 item – lebih hidup dengan hover & shadow -->
            <div class="mx-auto mt-16 sm:mt-20 lg:mt-24">
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">

                    <!-- Item 1 -->
                    <div class="group relative overflow-hidden rounded-2xl bg-white p-8 shadow-lg ring-1 ring-gray-200 transition-all hover:shadow-2xl hover:-translate-y-2">
                        <div class="absolute inset-0 bg-gradient-to-br from-green-500 to-emerald-600 opacity-0 group-hover:opacity-10 transition-opacity"></div>
                        <div class="relative flex items-start gap-5">
                            <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-green-500 to-emerald-600 shadow-md">
                                <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12h6m-6-4h6m-6 8h6M5 7h14a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V9a2 2 0 012-2z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">Pengajuan Surat Online</h3>
                                <p class="mt-2 text-gray-600">
                                    Domisili, usaha, tidak mampu, SKCK — ajukan dari rumah, selesai dalam hitungan menit.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="group relative overflow-hidden rounded-2xl bg-white p-8 shadow-lg ring-1 ring-gray-200 transition-all hover:shadow-2xl hover:-translate-y-2">
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-500 to-cyan-600 opacity-0 group-hover:opacity-10 transition-opacity"></div>
                        <div class="relative flex items-start gap-5">
                            <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-blue-500 to-cyan-600 shadow-md">
                                <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">Data Kependudukan</h3>
                                <p class="mt-2 text-gray-600">
                                    Statistik penduduk real-time: jumlah warga, jenis kelamin, agama, dan pekerjaan.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="group relative overflow-hidden rounded-2xl bg-white p-8 shadow-lg ring-1 ring-gray-200 transition-all hover:shadow-2xl hover:-translate-y-2">
                        <div class="absolute inset-0 bg-gradient-to-br from-amber-500 to-orange-600 opacity-0 group-hover:opacity-10 transition-opacity"></div>
                        <div class="relative flex items-start gap-5">
                            <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-amber-500 to-orange-600 shadow-md">
                                <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">Potensi Desa & UMKM</h3>
                                <p class="mt-2 text-gray-600">
                                    Wisata alam, produk unggulan, kerajinan tangan, dan peluang usaha warga desa.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div class="group relative overflow-hidden rounded-2xl bg-white p-8 shadow-lg ring-1 ring-gray-200 transition-all hover:shadow-2xl hover:-translate-y-2">
                        <div class="absolute inset-0 bg-gradient-to-br from-purple-500 to-pink-600 opacity-0 group-hover:opacity-10 transition-opacity"></div>
                        <div class="relative flex items-start gap-5">
                            <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-purple-500 to-pink-600 shadow-md">
                                <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">Transparansi APBDes</h3>
                                <p class="mt-2 text-gray-600">
                                    Lihat rincian anggaran, realisasi, dan laporan keuangan desa setiap tahunnya.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Item 5 -->
                    <div class="group relative overflow-hidden rounded-2xl bg-white p-8 shadow-lg ring-1 ring-gray-200 transition-all hover:shadow-2xl hover:-translate-y-2">
                        <div class="absolute inset-0 bg-gradient-to-br from-teal-500 to-cyan-600 opacity-0 group-hover:opacity-10 transition-opacity"></div>
                        <div class="relative flex items-start gap-5">
                            <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-teal-500 to-cyan-600 shadow-md">
                                <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10l5 5v11a2 2 0 01-2 2z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">Berita & Pengumuman</h3>
                                <p class="mt-2 text-gray-600">
                                    Update kegiatan, pengumuman resmi, dan berita terbaru dari pemerintah desa.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Item 6 -->
                    <div class="group relative overflow-hidden rounded-2xl bg-white p-8 shadow-lg ring-1 ring-gray-200 transition-all hover:shadow-2xl hover:-translate-y-2">
                        <div class="absolute inset-0 bg-gradient-to-br from-rose-500 to-pink-600 opacity-0 group-hover:opacity-10 transition-opacity"></div>
                        <div class="relative flex items-start gap-5">
                            <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-rose-500 to-pink-600 shadow-md">
                                <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">Galeri Kegiatan</h3>
                                <p class="mt-2 text-gray-600">
                                    Foto & video gotong royong, hari besar, dan seluruh kegiatan masyarakat desa.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</body>

</html>