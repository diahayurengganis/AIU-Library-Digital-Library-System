<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman Buku</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

    <style>
        *{
            font-family: 'Poppins', sans-serif;
        }

        body{
            background: #f7f7f7;
        }
    </style>
</head>

<body>

<div class="flex min-h-screen">

    <!-- SIDEBAR -->
    <aside class="w-[280px] bg-[#d9a15a] flex flex-col justify-between">

        <div>

            <!-- LOGO -->
            <div class="flex justify-center pt-12 pb-14">
                <img src="image/logo1.png" class="w-[150px]">
            </div>

            <!-- MENU -->
            <div class="px-4 space-y-4">

                <a href="#"
                    class="flex items-center gap-4 text-white px-5 py-4 rounded-2xl font-medium text-[18px] hover:bg-[#cf9550] duration-300">

                    <i class="fa-solid fa-table-cells-large text-[22px]"></i>
                    Dashboard
                </a>

                <a href="#"
                    class="flex items-center gap-4 text-white px-5 py-4 rounded-2xl font-medium text-[18px] hover:bg-[#cf9550] duration-300">

                    <i class="fa-solid fa-book-open text-[22px]"></i>
                    Katalog Buku
                </a>

                <!-- ACTIVE -->
                <a href="#"
                    class="flex items-center gap-4 bg-[#cf9550] text-white px-5 py-4 rounded-2xl font-semibold text-[18px]">

                    <i class="fa-regular fa-bookmark text-[22px]"></i>
                    Peminjaman
                </a>

                <a href="#"
                    class="flex items-center gap-4 text-white px-5 py-4 rounded-2xl font-medium text-[18px] hover:bg-[#cf9550] duration-300">

                    <i class="fa-regular fa-clock text-[22px]"></i>
                    Riwayat
                </a>

                <a href="#"
                    class="flex items-center gap-4 text-white px-5 py-4 rounded-2xl font-medium text-[18px] hover:bg-[#cf9550] duration-300">

                    <i class="fa-regular fa-user text-[22px]"></i>
                    Profil
                </a>

            </div>

        </div>

        <!-- LOGOUT -->
        <div class="px-4 pb-10">

            <a href="#"
                class="flex items-center gap-4 text-white px-5 py-4 rounded-2xl font-medium text-[18px] hover:bg-[#cf9550] duration-300">

                <i class="fa-solid fa-right-from-bracket text-[22px]"></i>
                Logout
            </a>

        </div>

    </aside>

    <!-- MAIN -->
    <main class="flex-1">

        <!-- TOPBAR -->
        <div class="h-[90px] bg-white border-b flex items-center justify-between px-10">

            <!-- SEARCH -->
            <div class="relative w-[500px]">

                <i class="fa-solid fa-magnifying-glass absolute left-6 top-1/2 -translate-y-1/2 text-[28px]"></i>

                <input
                    type="text"
                    placeholder="Cari buku, penulis, kategori..."
                    class="w-full h-[48px] bg-[#f3f3f3] rounded-full pl-16 pr-5 outline-none text-[17px]"
                >

            </div>

            <!-- RIGHT -->
            <div class="flex items-center gap-8">

                <!-- NOTIF -->
                <div class="relative">

                    <i class="fa-regular fa-bell text-[30px]"></i>

                    <div class="absolute -top-2 -right-2 w-6 h-6 rounded-full bg-[#d68d36] text-white text-[12px] font-semibold flex items-center justify-center">
                        3
                    </div>

                </div>

                <!-- USER -->
                <div class="flex items-center gap-4">

                    <img
                        src="https://cdn-icons-png.flaticon.com/512/847/847969.png"
                        class="w-[52px] h-[52px]"
                    >

                    <div class="flex items-center gap-2">
                        <span class="text-[18px] font-medium">
                            Diah Ayu
                        </span>

                        <i class="fa-solid fa-chevron-down text-[14px]"></i>
                    </div>

                </div>

            </div>

        </div>

        <!-- CONTENT -->
        <div class="p-10">

            <!-- TITLE -->
            <h1 class="text-[50px] font-bold leading-tight">
                Peminjaman Buku
            </h1>

            <p class="text-[24px] text-gray-600 mt-2">
                Kelola buku yang sedang dipinjam dan lihat status pengembalian.
            </p>

            <!-- FILTER -->
            <div class="flex justify-between items-center mt-8">

                <div class="flex gap-4">

                    <!-- SEARCH -->
                    <div class="relative">

                        <i class="fa-solid fa-magnifying-glass absolute left-5 top-1/2 -translate-y-1/2 text-[22px] text-gray-500"></i>

                        <input
                            type="text"
                            placeholder="Search buku..."
                            class="w-[280px] h-[50px] border rounded-xl pl-14 pr-4 outline-none text-[15px]"
                        >
                    </div>

                    <!-- STATUS -->
                    <select class="w-[230px] h-[50px] border rounded-xl px-5 outline-none text-[15px]">
                        <option>Status: Semua</option>
                    </select>

                    <!-- SORT -->
                    <select class="w-[230px] h-[50px] border rounded-xl px-5 outline-none text-[15px]">
                        <option>Urutkan: Terbaru</option>
                    </select>

                </div>

                <!-- BUTTON -->
                <button class="h-[50px] px-7 border border-[#d68d36] text-[#d68d36] rounded-xl font-semibold text-[16px] hover:bg-[#fff8ef] duration-300">

                    <i class="fa-regular fa-calendar mr-2"></i>
                    Riwayat Peminjaman

                </button>

            </div>

            <!-- STATS -->
            <div class="grid grid-cols-3 gap-6 mt-8">

                <!-- CARD -->
                <div class="bg-[#d9a15a] rounded-2xl p-8 text-white">

                    <div class="flex items-center gap-5">

                        <div class="w-[70px] h-[70px] rounded-full bg-white flex items-center justify-center">
                            <i class="fa-solid fa-book-open text-[#d9a15a] text-[30px]"></i>
                        </div>

                        <div>
                            <h3 class="text-[20px] font-medium">
                                Sedang Dipinjam
                            </h3>
                        </div>

                    </div>

                    <div class="text-center mt-5">
                        <h1 class="text-[60px] font-bold leading-none">
                            2
                        </h1>

                        <p class="text-[22px] mt-2">
                            buku
                        </p>
                    </div>

                </div>

                <!-- CARD -->
                <div class="bg-[#d9a15a] rounded-2xl p-8 text-white">

                    <div class="flex items-center gap-5">

                        <div class="w-[70px] h-[70px] rounded-full bg-white flex items-center justify-center">
                            <i class="fa-solid fa-clock-rotate-left text-[#d9a15a] text-[30px]"></i>
                        </div>

                        <div>
                            <h3 class="text-[20px] font-medium">
                                Hampir Jatuh Tempo
                            </h3>
                        </div>

                    </div>

                    <div class="text-center mt-5">
                        <h1 class="text-[60px] font-bold leading-none">
                            1
                        </h1>

                        <p class="text-[22px] mt-2">
                            buku
                        </p>
                    </div>

                </div>

                <!-- CARD -->
                <div class="bg-[#d9a15a] rounded-2xl p-8 text-white">

                    <div class="flex items-center gap-5">

                        <div class="w-[70px] h-[70px] rounded-full bg-white flex items-center justify-center">
                            <i class="fa-regular fa-circle-check text-[#d9a15a] text-[30px]"></i>
                        </div>

                        <div>
                            <h3 class="text-[20px] font-medium">
                                Sudah Dikembalikan
                            </h3>
                        </div>

                    </div>

                    <div class="text-center mt-5">
                        <h1 class="text-[60px] font-bold leading-none">
                            12
                        </h1>

                        <p class="text-[22px] mt-2">
                            buku
                        </p>
                    </div>

                </div>

            </div>

            <!-- ALERT -->
            <div class="bg-[#fff8eb] border border-[#edd6a8] rounded-2xl p-6 flex justify-between items-center mt-8">

                <div class="flex items-center gap-5">

                    <i class="fa-regular fa-bell text-[#d68d36] text-[35px]"></i>

                    <p class="text-[22px] text-gray-700">
                        Peringat: 1 buku akan jatuh tempo dalam 2 hari.
                    </p>

                </div>

                <button class="border border-[#d68d36] text-[#d68d36] px-6 py-3 rounded-xl font-semibold hover:bg-[#fff3dd] duration-300">
                    Lihat Detail
                </button>

            </div>

            <!-- TABLE -->
            <div class="bg-white border rounded-2xl p-6 mt-8">

                <!-- HEADER -->
                <div class="grid grid-cols-5 pb-5 border-b font-semibold text-[18px]">

                    <div>Buku</div>
                    <div>Tanggal Pinjam</div>
                    <div>Batas Pengembalian</div>
                    <div>Status</div>
                    <div class="text-center">Aksi</div>

                </div>

                <!-- ITEM -->
                <div class="grid grid-cols-5 items-center py-6 border-b">

                    <!-- BUKU -->
                    <div class="flex gap-5">

                        <div class="w-[90px] h-[120px] bg-[#efefef] rounded-xl flex items-center justify-center">
                            <i class="fa-regular fa-image text-[45px] text-gray-300"></i>
                        </div>

                        <div>

                            <h3 class="font-bold text-[18px] leading-tight">
                                Pemrograman Web Modern
                            </h3>

                            <p class="text-gray-600 mt-3">
                                Eko Kurniawan
                            </p>

                            <span class="inline-block bg-[#f2ebe2] text-[13px] px-3 py-1 rounded-lg mt-3">
                                Teknologi
                            </span>

                        </div>

                    </div>

                    <!-- TANGGAL -->
                    <div>

                        <div class="flex items-start gap-3">

                            <i class="fa-regular fa-calendar text-gray-500 mt-1"></i>

                            <div>

                                <h3 class="text-[18px]">
                                    08 Mei 2026
                                </h3>

                                <p class="text-gray-500">
                                    14:30 WIB
                                </p>

                            </div>

                        </div>

                    </div>

                    <!-- BATAS -->
                    <div>

                        <div class="flex items-start gap-3">

                            <i class="fa-regular fa-calendar text-gray-500 mt-1"></i>

                            <div>

                                <h3 class="text-[18px]">
                                    22 Mei 2026
                                </h3>

                                <p class="text-gray-500">
                                    23:59 WIB
                                </p>

                                <p class="text-[#e69028] font-semibold mt-1">
                                    (10 hari lagi)
                                </p>

                            </div>

                        </div>

                    </div>

                    <!-- STATUS -->
                    <div>

                        <span class="bg-[#fff2dd] text-[#d68d36] px-5 py-2 rounded-full font-semibold text-[15px]">
                            Aktif
                        </span>

                    </div>

                    <!-- AKSI -->
                    <div class="flex flex-col gap-3 items-center">

                        <button class="w-[140px] h-[42px] border rounded-xl font-medium hover:bg-gray-50 duration-300">

                            <i class="fa-regular fa-eye mr-2"></i>
                            Detail

                        </button>

                        <button class="w-[140px] h-[42px] bg-[#e69028] text-white rounded-xl font-semibold hover:bg-[#d88017] duration-300">

                            <i class="fa-solid fa-rotate-right mr-2"></i>
                            Perpanjang

                        </button>

                    </div>

                </div>

                <!-- ITEM -->
                <div class="grid grid-cols-5 items-center py-6 border-b">

                    <!-- BUKU -->
                    <div class="flex gap-5">

                        <div class="w-[90px] h-[120px] bg-[#efefef] rounded-xl flex items-center justify-center">
                            <i class="fa-regular fa-image text-[45px] text-gray-300"></i>
                        </div>

                        <div>

                            <h3 class="font-bold text-[18px] leading-tight">
                                Basis Data: Konsep dan Implementasi
                            </h3>

                            <p class="text-gray-600 mt-3">
                                Abdul Kadir
                            </p>

                            <span class="inline-block bg-[#f2ebe2] text-[13px] px-3 py-1 rounded-lg mt-3">
                                Teknologi
                            </span>

                        </div>

                    </div>

                    <!-- TANGGAL -->
                    <div>

                        <div class="flex items-start gap-3">

                            <i class="fa-regular fa-calendar text-gray-500 mt-1"></i>

                            <div>

                                <h3 class="text-[18px]">
                                    12 Mei 2026
                                </h3>

                                <p class="text-gray-500">
                                    09:15 WIB
                                </p>

                            </div>

                        </div>

                    </div>

                    <!-- BATAS -->
                    <div>

                        <div class="flex items-start gap-3">

                            <i class="fa-regular fa-calendar text-gray-500 mt-1"></i>

                            <div>

                                <h3 class="text-[18px]">
                                    26 Mei 2026
                                </h3>

                                <p class="text-gray-500">
                                    23:59 WIB
                                </p>

                                <p class="text-[#e69028] font-semibold mt-1">
                                    (14 hari lagi)
                                </p>

                            </div>

                        </div>

                    </div>

                    <!-- STATUS -->
                    <div>

                        <span class="bg-[#fff2dd] text-[#d68d36] px-5 py-2 rounded-full font-semibold text-[15px]">
                            Hampir Jatuh Tempo
                        </span>

                    </div>

                    <!-- AKSI -->
                    <div class="flex flex-col gap-3 items-center">

                        <button class="w-[140px] h-[42px] border rounded-xl font-medium hover:bg-gray-50 duration-300">

                            <i class="fa-regular fa-eye mr-2"></i>
                            Detail

                        </button>

                        <button class="w-[140px] h-[42px] bg-[#e69028] text-white rounded-xl font-semibold hover:bg-[#d88017] duration-300">

                            <i class="fa-solid fa-rotate-right mr-2"></i>
                            Perpanjang

                        </button>

                    </div>

                </div>

                <!-- FOOT -->
                <div class="flex justify-between items-center pt-6">

                    <p class="text-gray-600 text-[16px]">
                        Menampilkan 1 - 2 dari 2 data
                    </p>

                    <!-- PAGINATION -->
                    <div class="flex items-center gap-4">

                        <button class="border px-5 h-[46px] rounded-xl text-gray-500">
                            <i class="fa-solid fa-chevron-left mr-2"></i>
                            Previous
                        </button>

                        <button class="w-[46px] h-[46px] bg-[#e69028] text-white rounded-xl font-semibold">
                            1
                        </button>

                        <button class="border px-5 h-[46px] rounded-xl text-gray-500">
                            Next
                            <i class="fa-solid fa-chevron-right ml-2"></i>
                        </button>

                    </div>

                </div>

            </div>

        </div>

        <!-- FOOTER -->
        <footer class="border-t bg-white py-6 text-center text-gray-600 text-[18px]">
            © 2026 AIU Library. All rights reserved.
        </footer>

    </main>

</div>

</body>
</html>