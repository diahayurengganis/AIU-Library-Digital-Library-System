<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Buku</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Icon -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

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

                <!-- ACTIVE -->
                <a href="#"
                    class="flex items-center gap-4 bg-[#cf9550] text-white px-5 py-4 rounded-2xl font-semibold text-[18px]">

                    <i class="fa-solid fa-book-open text-[22px]"></i>
                    Katalog Buku
                </a>

                <a href="#"
                    class="flex items-center gap-4 text-white px-5 py-4 rounded-2xl font-medium text-[18px] hover:bg-[#cf9550] duration-300">

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

                    <i class="fa-regular fa-heart text-[22px]"></i>
                    Wishlist
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
    <main class="flex-1 bg-[#fafafa]">

        <!-- TOPBAR -->
        <div class="h-[90px] bg-white border-b flex items-center justify-between px-8">

            <!-- SEARCH -->
            <div class="relative w-[520px]">

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

                    <div class="absolute -top-2 -right-2 w-6 h-6 rounded-full bg-[#d8923d] text-white text-[12px] font-semibold flex items-center justify-center">
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
        <div class="p-8">

            <!-- TITLE -->
            <h1 class="text-[48px] font-bold leading-tight">
                Katalog Buku
            </h1>

            <p class="text-[24px] text-gray-600 mt-2">
                Temukan berbagai koleksi buku digital yang tersedia di AIU Library.
            </p>

            <!-- FILTER -->
            <div class="bg-white border rounded-2xl p-6 mt-8">

                <div class="grid grid-cols-4 gap-6">

                    <!-- SEARCH -->
                    <div class="relative col-span-1">

                        <i class="fa-solid fa-magnifying-glass absolute left-5 top-1/2 -translate-y-1/2 text-[24px]"></i>

                        <input
                            type="text"
                            placeholder="Cari judul buku, penulis, atau ISBN..."
                            class="w-full h-[52px] border rounded-xl pl-14 pr-5 outline-none text-[15px]"
                        >
                    </div>

                    <!-- KATEGORI -->
                    <div>

                        <label class="block text-[15px] font-semibold mb-2">
                            Kategori
                        </label>

                        <select class="w-full h-[52px] border rounded-xl px-4 outline-none text-[15px]">
                            <option>Semua Kategori</option>
                        </select>

                    </div>

                    <!-- JENIS -->
                    <div>

                        <label class="block text-[15px] font-semibold mb-2">
                            Jenis Buku
                        </label>

                        <select class="w-full h-[52px] border rounded-xl px-4 outline-none text-[15px]">
                            <option>Semua Jenis</option>
                        </select>

                    </div>

                    <!-- BUTTON -->
                    <div class="flex items-end">

                        <button class="w-full h-[52px] border rounded-xl font-semibold text-[16px] hover:bg-gray-100 duration-300">

                            <i class="fa-solid fa-filter mr-2"></i>
                            Filter

                        </button>

                    </div>

                </div>

            </div>

            <!-- INFO -->
            <div class="flex items-center justify-between mt-6">

                <p class="text-[18px]">
                    Menampilkan 24 dari 238 buku
                </p>

                <div class="flex items-center gap-4">

                    <span class="text-[18px]">
                        Urutkan:
                    </span>

                    <select class="border rounded-xl px-5 h-[44px] outline-none text-[16px]">
                        <option>Terbaru</option>
                    </select>

                </div>

            </div>

            <!-- BOOK GRID -->
            <div class="grid grid-cols-5 gap-6 mt-6">

                <!-- CARD -->
                <div class="bg-white border rounded-2xl p-3">

                    <div class="relative">

                        <div class="h-[220px] bg-[#efefef] rounded-xl flex items-center justify-center">
                            <i class="fa-regular fa-image text-[70px] text-gray-300"></i>
                        </div>

                        <span class="absolute top-3 right-3 bg-white px-3 py-1 rounded-lg text-[12px] font-semibold text-gray-500">
                            PDF
                        </span>

                    </div>

                    <h3 class="text-[16px] font-bold leading-tight mt-4">
                        Basis Data: Konsep dan Implementasi
                    </h3>

                    <p class="text-gray-600 text-[14px] mt-2">
                        Abdul Kadir
                    </p>

                    <span class="inline-block bg-[#f3ece3] text-[12px] px-2 py-1 rounded-md mt-3">
                        Teknologi
                    </span>

                    <button class="w-full border rounded-xl h-[42px] mt-5 font-semibold hover:bg-gray-50 duration-300">
                        Lihat Detail
                    </button>

                </div>

                <!-- CARD -->
                <div class="bg-white border rounded-2xl p-3">

                    <div class="relative">

                        <div class="h-[220px] bg-[#efefef] rounded-xl flex items-center justify-center">
                            <i class="fa-regular fa-image text-[70px] text-gray-300"></i>
                        </div>

                        <span class="absolute top-3 right-3 bg-white px-3 py-1 rounded-lg text-[12px] font-semibold text-gray-500">
                            EBOOK
                        </span>

                    </div>

                    <h3 class="text-[16px] font-bold leading-tight mt-4">
                        Pemrograman Web Modern
                    </h3>

                    <p class="text-gray-600 text-[14px] mt-2">
                        Eko Kurniawan
                    </p>

                    <span class="inline-block bg-[#f3ece3] text-[12px] px-2 py-1 rounded-md mt-3">
                        Teknologi
                    </span>

                    <button class="w-full border rounded-xl h-[42px] mt-5 font-semibold hover:bg-gray-50 duration-300">
                        Lihat Detail
                    </button>

                </div>

                <!-- CARD -->
                <div class="bg-white border rounded-2xl p-3">

                    <div class="relative">

                        <div class="h-[220px] bg-[#efefef] rounded-xl flex items-center justify-center">
                            <i class="fa-regular fa-image text-[70px] text-gray-300"></i>
                        </div>

                        <span class="absolute top-3 right-3 bg-white px-3 py-1 rounded-lg text-[12px] font-semibold text-gray-500">
                            PDF
                        </span>

                    </div>

                    <h3 class="text-[16px] font-bold leading-tight mt-4">
                        Manajemen Proyek
                    </h3>

                    <p class="text-gray-600 text-[14px] mt-2">
                        Rosa A. S
                    </p>

                    <span class="inline-block bg-[#f3ece3] text-[12px] px-2 py-1 rounded-md mt-3">
                        Bisnis
                    </span>

                    <button class="w-full border rounded-xl h-[42px] mt-5 font-semibold hover:bg-gray-50 duration-300">
                        Lihat Detail
                    </button>

                </div>

                <!-- CARD -->
                <div class="bg-white border rounded-2xl p-3">

                    <div class="relative">

                        <div class="h-[220px] bg-[#efefef] rounded-xl flex items-center justify-center">
                            <i class="fa-regular fa-image text-[70px] text-gray-300"></i>
                        </div>

                        <span class="absolute top-3 right-3 bg-white px-3 py-1 rounded-lg text-[12px] font-semibold text-gray-500">
                            EPUB
                        </span>

                    </div>

                    <h3 class="text-[16px] font-bold leading-tight mt-4">
                        Desain Thinking
                    </h3>

                    <p class="text-gray-600 text-[14px] mt-2">
                        Tim Brown
                    </p>

                    <span class="inline-block bg-[#f3ece3] text-[12px] px-2 py-1 rounded-md mt-3">
                        Teknologi
                    </span>

                    <button class="w-full border rounded-xl h-[42px] mt-5 font-semibold hover:bg-gray-50 duration-300">
                        Lihat Detail
                    </button>

                </div>

                <!-- CARD -->
                <div class="bg-white border rounded-2xl p-3">

                    <div class="relative">

                        <div class="h-[220px] bg-[#efefef] rounded-xl flex items-center justify-center">
                            <i class="fa-regular fa-image text-[70px] text-gray-300"></i>
                        </div>

                        <span class="absolute top-3 right-3 bg-white px-3 py-1 rounded-lg text-[12px] font-semibold text-gray-500">
                            PDF
                        </span>

                    </div>

                    <h3 class="text-[16px] font-bold leading-tight mt-4">
                        Literasi Digital
                    </h3>

                    <p class="text-gray-600 text-[14px] mt-2">
                        Dian Pratiwi
                    </p>

                    <span class="inline-block bg-[#f3ece3] text-[12px] px-2 py-1 rounded-md mt-3">
                        Pendidikan
                    </span>

                    <button class="w-full border rounded-xl h-[42px] mt-5 font-semibold hover:bg-gray-50 duration-300">
                        Lihat Detail
                    </button>

                </div>

            </div>

            <!-- PAGINATION -->
            <div class="flex justify-center items-center gap-3 mt-10">

                <button class="w-[42px] h-[42px] border rounded-xl">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>

                <button class="w-[42px] h-[42px] bg-[#2f2f2f] text-white rounded-xl font-semibold">
                    1
                </button>

                <button class="w-[42px] h-[42px] border rounded-xl">
                    2
                </button>

                <button class="w-[42px] h-[42px] border rounded-xl">
                    3
                </button>

                <button class="w-[42px] h-[42px] border rounded-xl">
                    4
                </button>

                <button class="w-[42px] h-[42px] border rounded-xl">
                    5
                </button>

                <button class="w-[42px] h-[42px] border rounded-xl">
                    ...
                </button>

                <button class="w-[42px] h-[42px] border rounded-xl">
                    10
                </button>

                <button class="w-[42px] h-[42px] border rounded-xl">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>

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