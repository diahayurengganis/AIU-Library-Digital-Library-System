<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>Dashboard User</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />

    <style>
        *{
            font-family: 'Poppins', sans-serif;
        }

        body{
            background: #f5f5f5;
        }
    </style>
</head>

<body>

<div class="flex min-h-screen">

    <!-- SIDEBAR -->
    <aside class="w-[280px] bg-[#d9a15a] flex flex-col justify-between">

        <div>

            <!-- LOGO -->
            <div class="flex justify-center pt-10 pb-12">
                <img src="image/logo1.png" class="w-[150px]">
            </div>

            <!-- MENU -->
            <div class="px-4 space-y-3">

                <!-- ACTIVE -->
                <a href="#"
                    class="flex items-center gap-4 bg-[#cf9550] text-white px-5 py-4 rounded-2xl font-semibold text-[18px]">

                    <i class="fa-solid fa-table-cells-large text-[22px]"></i>
                    Dashboard
                </a>

                <a href="#"
                    class="flex items-center gap-4 text-white px-5 py-4 font-medium text-[18px] hover:bg-[#cf9550] rounded-2xl duration-300">

                    <i class="fa-solid fa-book-open text-[22px]"></i>
                    Katalog Buku
                </a>

                <a href="#"
                    class="flex items-center gap-4 text-white px-5 py-4 font-medium text-[18px] hover:bg-[#cf9550] rounded-2xl duration-300">

                    <i class="fa-regular fa-bookmark text-[22px]"></i>
                    Peminjaman
                </a>

                <a href="#"
                    class="flex items-center gap-4 text-white px-5 py-4 font-medium text-[18px] hover:bg-[#cf9550] rounded-2xl duration-300">

                    <i class="fa-regular fa-clock text-[22px]"></i>
                    Riwayat
                </a>

                <a href="#"
                    class="flex items-center gap-4 text-white px-5 py-4 font-medium text-[18px] hover:bg-[#cf9550] rounded-2xl duration-300">

                    <i class="fa-regular fa-user text-[22px]"></i>
                    Profil
                </a>

            </div>
        </div>

        <!-- LOGOUT -->
        <div class="px-4 pb-10">

            <a href="#"
                class="flex items-center gap-4 text-white px-5 py-4 font-medium text-[18px] hover:bg-[#cf9550] rounded-2xl duration-300">

                <i class="fa-solid fa-right-from-bracket text-[22px]"></i>
                Logout
            </a>

        </div>

    </aside>

    <!-- MAIN -->
    <main class="flex-1 bg-[#f8f8f8]">

        <!-- TOPBAR -->
        <div class="h-[90px] border-b flex items-center justify-between px-10 bg-white">

            <!-- SEARCH -->
            <div class="relative w-[500px]">

                <i class="fa-solid fa-magnifying-glass absolute left-6 top-1/2 -translate-y-1/2 text-[28px] text-black"></i>

                <input
                    type="text"
                    placeholder="Cari buku, penulis, kategori..."
                    class="w-full h-[48px] rounded-full bg-[#f2f2f2] pl-16 pr-5 outline-none text-[16px]"
                >

            </div>

            <!-- PROFILE -->
            <div class="flex items-center gap-8">

                <!-- NOTIF -->
                <div class="relative">
                    <i class="fa-regular fa-bell text-[30px]"></i>

                    <div class="absolute -top-2 -right-2 w-6 h-6 rounded-full bg-[#d68d36] text-white text-[12px] flex items-center justify-center font-semibold">
                        3
                    </div>
                </div>

                <!-- USER -->
                <div class="flex items-center gap-4">

                    <img
                        src="https://cdn-icons-png.flaticon.com/512/847/847969.png"
                        class="w-[50px] h-[50px]"
                    >

                    <div class="flex items-center gap-2">
                        <span class="font-medium text-[18px]">
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
            <h1 class="text-[48px] font-bold leading-tight">
                Selamat Datang, Diah Ayu Rengganis!
            </h1>

            <p class="text-[24px] text-gray-600 mt-2">
                Temukan dan baca berbagai koleksi buku digital favoritmu di AIU Library.
            </p>

            <!-- CARDS -->
            <div class="grid grid-cols-3 gap-6 mt-10">

                <!-- CARD -->
                <div class="bg-[#d9a15a] rounded-2xl p-8 text-white">

                    <div class="flex items-center gap-4">

                        <div class="w-[70px] h-[70px] rounded-full bg-white flex items-center justify-center">
                            <i class="fa-solid fa-book-open text-[#d9a15a] text-[30px]"></i>
                        </div>

                        <span class="font-semibold text-[24px]">
                            Buku Dipinjam
                        </span>

                    </div>

                    <div class="text-center mt-6">
                        <h2 class="text-[60px] font-bold">2</h2>

                        <p class="text-[22px]">
                            buku sedang dipinjam
                        </p>
                    </div>

                </div>

                <!-- CARD -->
                <div class="bg-[#d9a15a] rounded-2xl p-8 text-white">

                    <div class="flex items-center gap-4">

                        <div class="w-[70px] h-[70px] rounded-full bg-white flex items-center justify-center">
                            <i class="fa-solid fa-heart text-[#d9a15a] text-[30px]"></i>
                        </div>

                        <span class="font-semibold text-[24px]">
                            Wishlist
                        </span>

                    </div>

                    <div class="text-center mt-6">
                        <h2 class="text-[60px] font-bold">2</h2>

                        <p class="text-[22px]">
                            buku favorit anda
                        </p>
                    </div>

                </div>

                <!-- CARD -->
                <div class="bg-[#d9a15a] rounded-2xl p-8 text-white">

                    <div class="flex items-center gap-4">

                        <div class="w-[70px] h-[70px] rounded-full bg-white flex items-center justify-center">
                            <i class="fa-solid fa-clock-rotate-left text-[#d9a15a] text-[30px]"></i>
                        </div>

                        <span class="font-semibold text-[24px]">
                            Riwayat
                        </span>

                    </div>

                    <div class="text-center mt-6">
                        <h2 class="text-[60px] font-bold">12</h2>

                        <p class="text-[22px]">
                            buku selesai dibaca
                        </p>
                    </div>

                </div>

            </div>

            <!-- REKOMENDASI -->
            <div class="bg-white border rounded-2xl p-6 mt-10">

                <div class="flex items-center justify-between mb-6">

                    <h2 class="text-[20px] font-bold">
                        Rekomendasi Buku Untukmu
                    </h2>

                    <a href="#" class="text-[#d68d36] font-semibold">
                        Lihat semua
                    </a>

                </div>

                <div class="grid grid-cols-4 gap-5">

                    <!-- BOOK -->
                    <div class="flex gap-4">

                        <div class="w-[110px] h-[150px] bg-[#efefef] rounded-xl flex items-center justify-center">
                            <i class="fa-regular fa-image text-[50px] text-gray-300"></i>
                        </div>

                        <div>
                            <h3 class="font-bold text-[20px]">
                                Design Thinking
                            </h3>

                            <p class="text-gray-600 mt-1">
                                Tim Brown
                            </p>

                            <span class="inline-block mt-3 px-3 py-1 rounded-lg bg-[#f1ebe3] text-[13px]">
                                Teknologi
                            </span>

                            <button class="mt-8 border border-[#c88434] text-[#4a4a4a] px-6 py-2 rounded-xl font-medium">
                                Lihat Detail
                            </button>
                        </div>

                    </div>

                    <!-- BOOK -->
                    <div class="flex gap-4">

                        <div class="w-[110px] h-[150px] bg-[#efefef] rounded-xl flex items-center justify-center">
                            <i class="fa-regular fa-image text-[50px] text-gray-300"></i>
                        </div>

                        <div>
                            <h3 class="font-bold text-[20px]">
                                Pemrograman Web
                            </h3>

                            <p class="text-gray-600 mt-1">
                                Eko Kurniawan
                            </p>

                            <span class="inline-block mt-3 px-3 py-1 rounded-lg bg-[#f1ebe3] text-[13px]">
                                Teknologi
                            </span>

                            <button class="mt-8 border border-[#c88434] text-[#4a4a4a] px-6 py-2 rounded-xl font-medium">
                                Lihat Detail
                            </button>
                        </div>

                    </div>

                    <!-- BOOK -->
                    <div class="flex gap-4">

                        <div class="w-[110px] h-[150px] bg-[#efefef] rounded-xl flex items-center justify-center">
                            <i class="fa-regular fa-image text-[50px] text-gray-300"></i>
                        </div>

                        <div>
                            <h3 class="font-bold text-[20px]">
                                Manajemen Proyek
                            </h3>

                            <p class="text-gray-600 mt-1">
                                Rosa A. S
                            </p>

                            <span class="inline-block mt-3 px-3 py-1 rounded-lg bg-[#f1ebe3] text-[13px]">
                                Bisnis
                            </span>

                            <button class="mt-8 border border-[#c88434] text-[#4a4a4a] px-6 py-2 rounded-xl font-medium">
                                Lihat Detail
                            </button>
                        </div>

                    </div>

                    <!-- BOOK -->
                    <div class="flex gap-4">

                        <div class="w-[110px] h-[150px] bg-[#efefef] rounded-xl flex items-center justify-center">
                            <i class="fa-regular fa-image text-[50px] text-gray-300"></i>
                        </div>

                        <div>
                            <h3 class="font-bold text-[20px]">
                                Literasi Digital
                            </h3>

                            <p class="text-gray-600 mt-1">
                                Dian Pratiwi
                            </p>

                            <span class="inline-block mt-3 px-3 py-1 rounded-lg bg-[#f1ebe3] text-[13px]">
                                Pendidikan
                            </span>

                            <button class="mt-8 border border-[#c88434] text-[#4a4a4a] px-6 py-2 rounded-xl font-medium">
                                Lihat Detail
                            </button>
                        </div>

                    </div>

                </div>

            </div>

            <!-- BOTTOM -->
            <div class="grid grid-cols-2 gap-8 mt-8">

                <!-- RIWAYAT -->
                <div class="bg-white border rounded-2xl p-6">

                    <div class="flex justify-between items-center mb-6">

                        <h2 class="text-[20px] font-bold">
                            Riwayat Aktivitas Terbaru
                        </h2>

                        <a href="#" class="text-[#d68d36] font-semibold">
                            Lihat semua
                        </a>

                    </div>

                    <div class="space-y-6">

                        <div class="flex justify-between border-b pb-4">
                            <div>
                                <p class="text-gray-600">Anda meminjam buku</p>
                                <h3 class="font-semibold">
                                    Basis Data: Konsep dan Implementasi
                                </h3>
                            </div>

                            <span class="text-gray-500">
                                12 Mei 2026
                            </span>
                        </div>

                        <div class="flex justify-between border-b pb-4">
                            <div>
                                <p class="text-gray-600">Anda mengembalikan buku</p>
                                <h3 class="font-semibold">
                                    UI/UX Design Fundamentals
                                </h3>
                            </div>

                            <span class="text-gray-500">
                                10 Mei 2026
                            </span>
                        </div>

                        <div class="flex justify-between border-b pb-4">
                            <div>
                                <p class="text-gray-600">Anda meminjam buku</p>
                                <h3 class="font-semibold">
                                    Pemrograman Web Modern
                                </h3>
                            </div>

                            <span class="text-gray-500">
                                08 Mei 2026
                            </span>
                        </div>

                    </div>

                </div>

                <!-- DIPINJAM -->
                <div class="bg-white border rounded-2xl p-6">

                    <div class="flex justify-between items-center mb-6">

                        <h2 class="text-[20px] font-bold">
                            Buku Sedang Dipinjam
                        </h2>

                        <a href="#" class="text-[#d68d36] font-semibold">
                            Lihat semua
                        </a>

                    </div>

                    <div class="space-y-6">

                        <!-- ITEM -->
                        <div class="flex justify-between items-center border-b pb-5">

                            <div class="flex gap-4">

                                <div class="w-[90px] h-[120px] bg-[#efefef] rounded-xl flex items-center justify-center">
                                    <i class="fa-regular fa-image text-[40px] text-gray-300"></i>
                                </div>

                                <div>

                                    <h3 class="font-bold text-[20px]">
                                        Basis Data: Konsep dan Implementasi
                                    </h3>

                                    <p class="text-gray-600 mt-2">
                                        Abdul Kadir
                                    </p>

                                    <p class="text-gray-500 mt-3">
                                        Dipinjam sejak 12 Mei 2026
                                    </p>

                                    <p class="text-gray-500">
                                        Batas pengembalian 26 Mei 2026
                                    </p>

                                </div>

                            </div>

                            <button class="border border-[#d68d36] text-[#d68d36] px-6 py-3 rounded-xl font-semibold">
                                14 hari lagi
                            </button>

                        </div>

                        <!-- ITEM -->
                        <div class="flex justify-between items-center">

                            <div class="flex gap-4">

                                <div class="w-[90px] h-[120px] bg-[#efefef] rounded-xl flex items-center justify-center">
                                    <i class="fa-regular fa-image text-[40px] text-gray-300"></i>
                                </div>

                                <div>

                                    <h3 class="font-bold text-[20px]">
                                        Pemrograman Web Modern
                                    </h3>

                                    <p class="text-gray-600 mt-2">
                                        Eko Kurniawan
                                    </p>

                                    <p class="text-gray-500 mt-3">
                                        Dipinjam sejak 08 Mei 2026
                                    </p>

                                    <p class="text-gray-500">
                                        Batas pengembalian 22 Mei 2026
                                    </p>

                                </div>

                            </div>

                            <button class="border border-[#d68d36] text-[#d68d36] px-6 py-3 rounded-xl font-semibold">
                                10 hari lagi
                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- FOOTER -->
        <footer class="border-t py-6 text-center text-gray-600 text-[18px] bg-white">
            © 2026 AIU Library. All rights reserved.
        </footer>

    </main>

</div>

</body>
</html>