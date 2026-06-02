<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Peminjaman</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

</head>

<body class="bg-[#F7F7F7] font-sans">

<div class="flex min-h-screen">

    <!-- SIDEBAR -->
    <aside class="w-[270px] bg-gradient-to-b from-[#E7B06F] to-[#D99652] text-white flex flex-col">

        <!-- LOGO -->
        <div class="flex justify-center pt-10 pb-12">
            <img src="{{ asset('image/logo1.png') }}"
                 alt="logo"
                 class="w-[150px]">
        </div>

        <!-- MENU -->
        <div class="px-5 flex flex-col gap-3">

            <a href="#"
               class="flex items-center gap-4 px-5 py-4 rounded-2xl hover:bg-white/10 transition">

                <i class="fa-solid fa-table-cells-large text-[20px]"></i>

                <span class="text-[18px] font-medium">
                    Dashboard
                </span>
            </a>

            <a href="#"
               class="flex items-center gap-4 px-5 py-4 rounded-2xl hover:bg-white/10 transition">

                <i class="fa-solid fa-book-open text-[20px]"></i>

                <span class="text-[18px] font-medium">
                    Katalog Buku
                </span>
            </a>

            <a href="#"
               class="flex items-center gap-4 px-5 py-4 rounded-2xl hover:bg-white/10 transition">

                <i class="fa-solid fa-bookmark text-[20px]"></i>

                <span class="text-[18px] font-medium">
                    Peminjaman
                </span>
            </a>

            <!-- ACTIVE -->
            <a href="#"
               class="flex items-center gap-4 px-5 py-4 rounded-2xl bg-[#CC8B48]">

                <i class="fa-solid fa-clock-rotate-left text-[20px]"></i>

                <span class="text-[18px] font-semibold">
                    Riwayat
                </span>
            </a>

            <a href="#"
               class="flex items-center gap-4 px-5 py-4 rounded-2xl hover:bg-white/10 transition">

                <i class="fa-regular fa-user text-[20px]"></i>

                <span class="text-[18px] font-medium">
                    Profil
                </span>
            </a>

            <a href="#"
               class="flex items-center gap-4 px-5 py-4 rounded-2xl hover:bg-white/10 transition">

                <i class="fa-solid fa-arrow-right-from-bracket text-[20px]"></i>

                <span class="text-[18px] font-medium">
                    Logout
                </span>
            </a>

        </div>

    </aside>

    <!-- MAIN -->
    <main class="flex-1">

        <!-- TOPBAR -->
        <div class="bg-white border-b border-gray-200 px-10 py-5 flex justify-between items-center">

            <!-- SEARCH -->
            <div class="relative w-[520px]">

                <i class="fa-solid fa-magnifying-glass absolute left-5 top-1/2 -translate-y-1/2 text-gray-400"></i>

                <input type="text"
                       placeholder="Cari buku, penulis, kategori..."
                       class="w-full bg-[#F5F5F5] rounded-full py-4 pl-14 pr-5 outline-none text-gray-700">

            </div>

            <!-- RIGHT -->
            <div class="flex items-center gap-8">

                <!-- NOTIF -->
                <div class="relative">

                    <i class="fa-regular fa-bell text-[26px] text-gray-700"></i>

                    <div class="absolute -top-2 -right-2 bg-orange-400 text-white text-[11px] w-5 h-5 rounded-full flex items-center justify-center">
                        3
                    </div>

                </div>

                <!-- PROFILE -->
                <div class="flex items-center gap-3">

                    <div class="w-11 h-11 rounded-full bg-gray-200 overflow-hidden">
                        <img src="https://ui-avatars.com/api/?name=Diah+Ayu"
                             class="w-full h-full object-cover">
                    </div>

                    <div class="flex items-center gap-2">
                        <span class="font-medium text-gray-700">
                            Diah Ayu
                        </span>

                        <i class="fa-solid fa-chevron-down text-[13px] text-gray-500"></i>
                    </div>

                </div>

            </div>

        </div>

        <!-- CONTENT -->
        <div class="px-10 py-8">

            <!-- TITLE -->
            <div>

                <h1 class="text-[48px] font-bold text-gray-900">
                    Riwayat Peminjaman
                </h1>

                <p class="text-gray-500 text-[20px] mt-2">
                    Lihat riwayat peminjaman buku yang telah Anda kembalikan.
                </p>

            </div>

            <!-- FILTER -->
            <div class="flex justify-between items-center mt-8">

                <div class="flex gap-5">

                    <!-- SEARCH -->
                    <div class="relative">

                        <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>

                        <input type="text"
                               placeholder="Search buku..."
                               class="w-[260px] bg-white border border-gray-200 rounded-xl py-4 pl-12 pr-4 outline-none">

                    </div>

                    <!-- STATUS -->
                    <select class="w-[220px] bg-white border border-gray-200 rounded-xl px-5 outline-none text-gray-700">
                        <option>Status: Semua</option>
                    </select>

                    <!-- SORT -->
                    <select class="w-[220px] bg-white border border-gray-200 rounded-xl px-5 outline-none text-gray-700">
                        <option>Urutkan: Terbaru</option>
                    </select>

                </div>

                <!-- BUTTON -->
                <button class="border border-[#E0A260] text-[#D69450] px-6 py-4 rounded-xl flex items-center gap-3 font-medium hover:bg-orange-50">

                    <i class="fa-regular fa-calendar"></i>

                    Filter Tanggal

                </button>

            </div>

            <!-- STATISTIC -->
            <div class="grid grid-cols-3 gap-6 mt-8">

                <!-- CARD -->
                <div class="bg-[#E4A867] rounded-3xl px-7 py-6 text-white">

                    <div class="w-14 h-14 bg-white rounded-full flex items-center justify-center mb-5">

                        <i class="fa-solid fa-book-open text-[#D7944F] text-[22px]"></i>

                    </div>

                    <h3 class="text-[22px] font-medium">
                        Total Peminjaman
                    </h3>

                    <h1 class="text-[60px] font-bold leading-none mt-3">
                        14
                    </h1>

                    <p class="text-[20px] mt-3">
                        buku
                    </p>

                </div>

                <!-- CARD -->
                <div class="bg-[#E4A867] rounded-3xl px-7 py-6 text-white">

                    <div class="w-14 h-14 bg-white rounded-full flex items-center justify-center mb-5">

                        <i class="fa-regular fa-circle-check text-[#D7944F] text-[22px]"></i>

                    </div>

                    <h3 class="text-[22px] font-medium">
                        Selesai (Dikembalikan)
                    </h3>

                    <h1 class="text-[60px] font-bold leading-none mt-3">
                        12
                    </h1>

                    <p class="text-[20px] mt-3">
                        buku
                    </p>

                </div>

                <!-- CARD -->
                <div class="bg-[#E4A867] rounded-3xl px-7 py-6 text-white">

                    <div class="w-14 h-14 bg-white rounded-full flex items-center justify-center mb-5">

                        <i class="fa-solid fa-clock-rotate-left text-[#D7944F] text-[22px]"></i>

                    </div>

                    <h3 class="text-[22px] font-medium">
                        Terlambat
                    </h3>

                    <h1 class="text-[60px] font-bold leading-none mt-3">
                        2
                    </h1>

                    <p class="text-[20px] mt-3">
                        buku
                    </p>

                </div>

            </div>

            <!-- TABLE -->
            <div class="bg-white rounded-3xl border border-gray-200 mt-10 overflow-hidden">

                <!-- TABLE HEADER -->
                <div class="grid grid-cols-5 px-8 py-6 border-b font-semibold text-gray-800">

                    <div>Buku</div>
                    <div>Tanggal Pinjam</div>
                    <div>Tanggal Kembali</div>
                    <div>Status</div>
                    <div class="text-center">Aksi</div>

                </div>

                <!-- ROW -->
                <div class="grid grid-cols-5 items-center px-8 py-6 border-b">

                    <!-- BOOK -->
                    <div class="flex gap-4">

                        <div class="w-[70px] h-[90px] rounded-xl bg-gray-100 flex items-center justify-center">

                            <i class="fa-regular fa-image text-gray-300 text-3xl"></i>

                        </div>

                        <div>

                            <h3 class="font-semibold text-[19px]">
                                Design Thinking
                            </h3>

                            <p class="text-gray-500 mt-1">
                                Tim Brown
                            </p>

                            <span class="inline-block mt-2 bg-orange-100 text-orange-500 px-3 py-1 rounded-full text-sm">
                                Teknologi
                            </span>

                        </div>

                    </div>

                    <!-- PINJAM -->
                    <div>

                        <p class="font-medium">
                            10 Apr 2026
                        </p>

                        <span class="text-gray-500 text-sm">
                            09:30 WIB
                        </span>

                    </div>

                    <!-- KEMBALI -->
                    <div>

                        <p class="font-medium">
                            20 Apr 2026
                        </p>

                        <span class="text-gray-500 text-sm">
                            10:15 WIB
                        </span>

                    </div>

                    <!-- STATUS -->
                    <div>

                        <span class="bg-green-100 text-green-600 px-4 py-2 rounded-full text-sm font-medium">
                            Dikembalikan
                        </span>

                    </div>

                    <!-- AKSI -->
                    <div class="flex justify-center">

                        <button class="border border-gray-300 px-6 py-3 rounded-xl flex items-center gap-3 hover:bg-gray-50">

                            <i class="fa-regular fa-eye"></i>

                            Detail

                        </button>

                    </div>

                </div>

                <!-- ROW -->
                <div class="grid grid-cols-5 items-center px-8 py-6 border-b">

                    <div class="flex gap-4">

                        <div class="w-[70px] h-[90px] rounded-xl bg-gray-100 flex items-center justify-center">

                            <i class="fa-regular fa-image text-gray-300 text-3xl"></i>

                        </div>

                        <div>

                            <h3 class="font-semibold text-[19px]">
                                Artificial Intelligence
                            </h3>

                            <p class="text-gray-500 mt-1">
                                Stuart Russell
                            </p>

                            <span class="inline-block mt-2 bg-orange-100 text-orange-500 px-3 py-1 rounded-full text-sm">
                                Teknologi
                            </span>

                        </div>

                    </div>

                    <div>

                        <p class="font-medium">
                            01 Mar 2026
                        </p>

                        <span class="text-gray-500 text-sm">
                            13:10 WIB
                        </span>

                    </div>

                    <div>

                        <p class="font-medium">
                            18 Mar 2026
                        </p>

                        <span class="text-gray-500 text-sm">
                            13:55 WIB
                        </span>

                    </div>

                    <div>

                        <span class="bg-red-100 text-red-500 px-4 py-2 rounded-full text-sm font-medium">
                            Terlambat
                        </span>

                    </div>

                    <div class="flex justify-center">

                        <button class="border border-gray-300 px-6 py-3 rounded-xl flex items-center gap-3 hover:bg-gray-50">

                            <i class="fa-regular fa-eye"></i>

                            Detail

                        </button>

                    </div>

                </div>

                <!-- FOOTER -->
                <div class="flex justify-between items-center px-8 py-5">

                    <p class="text-gray-500">
                        Menampilkan 1 - 5 dari 14 data
                    </p>

                    <!-- PAGINATION -->
                    <div class="flex items-center gap-3">

                        <button class="border border-gray-200 px-4 py-2 rounded-lg text-gray-500">
                            Previous
                        </button>

                        <button class="bg-[#D99652] text-white px-4 py-2 rounded-lg">
                            1
                        </button>

                        <button class="border border-gray-200 px-4 py-2 rounded-lg">
                            2
                        </button>

                        <button class="border border-gray-200 px-4 py-2 rounded-lg">
                            3
                        </button>

                        <button class="border border-gray-200 px-4 py-2 rounded-lg text-gray-500">
                            Next
                        </button>

                    </div>

                </div>

            </div>

            <!-- FOOTER -->
            <div class="text-center text-gray-400 mt-10 pb-6">
                © 2026 AIU Library. All rights reserved.
            </div>

        </div>

    </main>

</div>

</body>
</html>