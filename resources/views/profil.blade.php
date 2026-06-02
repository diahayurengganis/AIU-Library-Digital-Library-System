<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Saya</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

</head>

<body class="bg-[#F7F7F7] font-sans">

<div class="flex min-h-screen">

    <!-- SIDEBAR -->
    <aside class="w-[270px] bg-gradient-to-b from-[#E8B06E] to-[#D89955] text-white flex flex-col">

        <!-- LOGO -->
        <div class="flex justify-center pt-10 pb-14">
            <img src="{{ asset('image/logo1.png') }}"
                 alt="logo"
                 class="w-[150px]">
        </div>

        <!-- MENU -->
        <div class="px-4 flex flex-col gap-3">

            <a href="#"
               class="flex items-center gap-4 px-5 py-4 rounded-2xl hover:bg-white/10">

                <i class="fa-solid fa-table-cells-large text-[20px]"></i>

                <span class="text-[18px]">
                    Dashboard
                </span>

            </a>

            <a href="#"
               class="flex items-center gap-4 px-5 py-4 rounded-2xl hover:bg-white/10">

                <i class="fa-solid fa-book-open text-[20px]"></i>

                <span class="text-[18px]">
                    Katalog Buku
                </span>

            </a>

            <a href="#"
               class="flex items-center gap-4 px-5 py-4 rounded-2xl hover:bg-white/10">

                <i class="fa-solid fa-bookmark text-[20px]"></i>

                <span class="text-[18px]">
                    Peminjaman
                </span>

            </a>

            <a href="#"
               class="flex items-center gap-4 px-5 py-4 rounded-2xl hover:bg-white/10">

                <i class="fa-solid fa-clock-rotate-left text-[20px]"></i>

                <span class="text-[18px]">
                    Riwayat
                </span>

            </a>

            <!-- ACTIVE -->
            <a href="#"
               class="flex items-center gap-4 px-5 py-4 rounded-2xl bg-[#C98846]">

                <i class="fa-regular fa-user text-[20px]"></i>

                <span class="text-[18px] font-semibold">
                    Profil
                </span>

            </a>

            <a href="#"
               class="flex items-center gap-4 px-5 py-4 rounded-2xl hover:bg-white/10">

                <i class="fa-solid fa-arrow-right-from-bracket text-[20px]"></i>

                <span class="text-[18px]">
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
                       class="w-full bg-[#F4F4F4] rounded-full py-4 pl-14 pr-5 outline-none text-gray-700">

            </div>

            <!-- RIGHT -->
            <div class="flex items-center gap-8">

                <!-- NOTIF -->
                <div class="relative">

                    <i class="fa-regular fa-bell text-[25px] text-gray-700"></i>

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
                    Profil Saya
                </h1>

                <p class="text-gray-500 text-[20px] mt-2">
                    Kelola informasi pribadi dan pengaturan akun Anda.
                </p>

            </div>

            <!-- PROFILE BOX -->
            <div class="bg-white border border-gray-200 rounded-3xl mt-8 p-8">

                <div class="flex">

                    <!-- LEFT -->
                    <div class="flex-1 border-r border-gray-200 pr-8">

                        <div class="flex gap-7">

                            <!-- PHOTO -->
                            <div class="relative">

                                <div class="w-[150px] h-[150px] rounded-full bg-gray-200 flex items-center justify-center">

                                    <i class="fa-solid fa-user text-[70px] text-gray-400"></i>

                                </div>

                                <!-- CAMERA -->
                                <div class="absolute bottom-2 right-2 w-10 h-10 rounded-full bg-white border border-gray-300 flex items-center justify-center">

                                    <i class="fa-solid fa-camera text-gray-600"></i>

                                </div>

                            </div>

                            <!-- INFO -->
                            <div>

                                <h2 class="text-[42px] font-bold text-gray-900">
                                    Diah Ayu
                                </h2>

                                <p class="text-gray-500 text-[22px] mt-2">
                                    diah.ayu@aiu.ac.id
                                </p>

                                <div class="inline-block mt-5 bg-orange-100 text-orange-500 px-5 py-2 rounded-full font-medium">
                                    Anggota Aktif
                                </div>

                                <!-- DETAIL -->
                                <div class="mt-8 space-y-5">

                                    <div class="flex items-center gap-5">

                                        <i class="fa-regular fa-id-badge text-gray-600 text-[18px]"></i>

                                        <span class="w-[180px] text-gray-700 text-[18px]">
                                            NIM
                                        </span>

                                        <span class="text-gray-900 text-[18px]">
                                            2022101001
                                        </span>

                                    </div>

                                    <div class="flex items-center gap-5">

                                        <i class="fa-solid fa-graduation-cap text-gray-600 text-[18px]"></i>

                                        <span class="w-[180px] text-gray-700 text-[18px]">
                                            Fakultas
                                        </span>

                                        <span class="text-gray-900 text-[18px]">
                                            Fakultas Teknologi Informasi
                                        </span>

                                    </div>

                                    <div class="flex items-center gap-5">

                                        <i class="fa-solid fa-book text-gray-600 text-[18px]"></i>

                                        <span class="w-[180px] text-gray-700 text-[18px]">
                                            Program Studi
                                        </span>

                                        <span class="text-gray-900 text-[18px]">
                                            Sistem Informasi
                                        </span>

                                    </div>

                                    <div class="flex items-center gap-5">

                                        <i class="fa-regular fa-clock text-gray-600 text-[18px]"></i>

                                        <span class="w-[180px] text-gray-700 text-[18px]">
                                            Bergabung Sejak
                                        </span>

                                        <span class="text-gray-900 text-[18px]">
                                            10 Januari 2026
                                        </span>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- RIGHT -->
                    <div class="w-[500px] pl-8">

                        <div class="grid grid-cols-2 gap-5">

                            <!-- CARD -->
                            <div class="border border-[#EBC38F] bg-[#FFF9F2] rounded-2xl p-6">

                                <div class="w-14 h-14 rounded-full bg-white flex items-center justify-center mb-5">

                                    <i class="fa-solid fa-book-open text-[#E09A4F] text-[22px]"></i>

                                </div>

                                <h3 class="text-gray-700 font-medium text-[18px]">
                                    Buku Sedang Dipinjam
                                </h3>

                                <h1 class="text-[55px] font-bold text-gray-900 leading-none mt-3">
                                    2
                                </h1>

                                <p class="text-gray-500 mt-2 text-[18px]">
                                    buku
                                </p>

                            </div>

                            <!-- CARD -->
                            <div class="border border-[#EBC38F] bg-[#FFF9F2] rounded-2xl p-6">

                                <div class="w-14 h-14 rounded-full bg-white flex items-center justify-center mb-5">

                                    <i class="fa-solid fa-clock-rotate-left text-[#E09A4F] text-[22px]"></i>

                                </div>

                                <h3 class="text-gray-700 font-medium text-[18px]">
                                    Riwayat Peminjaman
                                </h3>

                                <h1 class="text-[55px] font-bold text-gray-900 leading-none mt-3">
                                    14
                                </h1>

                                <p class="text-gray-500 mt-2 text-[18px]">
                                    buku
                                </p>

                            </div>

                            <!-- CARD -->
                            <div class="border border-[#EBC38F] bg-[#FFF9F2] rounded-2xl p-6">

                                <div class="w-14 h-14 rounded-full bg-white flex items-center justify-center mb-5">

                                    <i class="fa-solid fa-heart text-[#E09A4F] text-[22px]"></i>

                                </div>

                                <h3 class="text-gray-700 font-medium text-[18px]">
                                    Buku di Wishlist
                                </h3>

                                <h1 class="text-[55px] font-bold text-gray-900 leading-none mt-3">
                                    2
                                </h1>

                                <p class="text-gray-500 mt-2 text-[18px]">
                                    buku
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- BOTTOM -->
            <div class="grid grid-cols-2 gap-6 mt-6">

                <!-- PERSONAL -->
                <div class="bg-white border border-gray-200 rounded-3xl p-7">

                    <!-- HEADER -->
                    <div class="flex justify-between items-center mb-8">

                        <h2 class="text-[32px] font-bold text-gray-900">
                            Informasi Pribadi
                        </h2>

                        <button class="border border-orange-300 text-orange-500 px-5 py-2 rounded-xl flex items-center gap-2">

                            <i class="fa-solid fa-pen"></i>

                            Edit

                        </button>

                    </div>

                    <!-- CONTENT -->
                    <div class="space-y-6">

                        <div class="flex items-center">

                            <div class="w-[250px] flex items-center gap-4">

                                <i class="fa-regular fa-user text-gray-600"></i>

                                <span class="text-[18px] text-gray-700">
                                    Nama Lengkap
                                </span>

                            </div>

                            <span class="text-[18px] text-gray-900">
                                Diah Ayu
                            </span>

                        </div>

                        <div class="flex items-center">

                            <div class="w-[250px] flex items-center gap-4">

                                <i class="fa-regular fa-envelope text-gray-600"></i>

                                <span class="text-[18px] text-gray-700">
                                    Email
                                </span>

                            </div>

                            <span class="text-[18px] text-gray-900">
                                diah.ayu@aiu.ac.id
                            </span>

                        </div>

                        <div class="flex items-center">

                            <div class="w-[250px] flex items-center gap-4">

                                <i class="fa-solid fa-phone text-gray-600"></i>

                                <span class="text-[18px] text-gray-700">
                                    Nomor Telepon
                                </span>

                            </div>

                            <span class="text-[18px] text-gray-900">
                                0812-3456-7890
                            </span>

                        </div>

                        <div class="flex items-center">

                            <div class="w-[250px] flex items-center gap-4">

                                <i class="fa-solid fa-location-dot text-gray-600"></i>

                                <span class="text-[18px] text-gray-700">
                                    Alamat
                                </span>

                            </div>

                            <span class="text-[18px] text-gray-900">
                                Jl. Mawar No. 10, Sleman, Yogyakarta
                            </span>

                        </div>

                        <div class="flex items-center">

                            <div class="w-[250px] flex items-center gap-4">

                                <i class="fa-regular fa-calendar text-gray-600"></i>

                                <span class="text-[18px] text-gray-700">
                                    Tanggal Lahir
                                </span>

                            </div>

                            <span class="text-[18px] text-gray-900">
                                12 Mei 2004
                            </span>

                        </div>

                        <div class="flex items-center">

                            <div class="w-[250px] flex items-center gap-4">

                                <i class="fa-solid fa-venus text-gray-600"></i>

                                <span class="text-[18px] text-gray-700">
                                    Jenis Kelamin
                                </span>

                            </div>

                            <span class="text-[18px] text-gray-900">
                                Perempuan
                            </span>

                        </div>

                    </div>

                </div>

                <!-- MEMBER CARD -->
                <div class="bg-white border border-gray-200 rounded-3xl p-7">

                    <h2 class="text-[32px] font-bold text-gray-900 mb-8">
                        Kartu Anggota
                    </h2>

                    <div class="flex gap-6">

                        <!-- CARD -->
                        <div class="w-[320px] h-[180px] bg-[#FFF6EC] border border-[#EDBE84] rounded-2xl p-5 flex flex-col justify-between">

                            <div class="flex items-start justify-between">

                                <img src="{{ asset('image/logo1.png') }}"
                                     class="w-[70px]">

                                <h3 class="text-[#B56A1F] font-bold text-[24px]">
                                    KARTU ANGGOTA
                                </h3>

                            </div>

                            <div>

                                <h4 class="font-bold text-[24px] text-gray-900">
                                    Diah Ayu
                                </h4>

                                <p class="text-[20px] text-gray-700 mt-1">
                                    2022101001
                                </p>

                            </div>

                            <!-- BARCODE -->
                            <div class="bg-white px-2 py-2 rounded-md">

                            <img src="https://barcode.tec-it.com/barcode.ashx?data=2022101001&code=Code128&translate-esc=true"
                            alt="barcode"
                            class="w-[100px] h-[30px] object-cover">

    </div>

                        </div>

                        <!-- INFO -->
                        <div class="flex-1 flex flex-col justify-between">

                            <div class="space-y-6">

                                <div class="flex justify-between">

                                    <span class="text-gray-600 text-[18px]">
                                        Nomor Anggota
                                    </span>

                                    <span class="text-gray-900 text-[18px]">
                                        AIU-2022101001
                                    </span>

                                </div>

                                <div class="flex justify-between">

                                    <span class="text-gray-600 text-[18px]">
                                        Berlaku Hingga
                                    </span>

                                    <span class="text-gray-900 text-[18px]">
                                        31 Desember 2026
                                    </span>

                                </div>

                            </div>

                            <!-- BUTTON -->
                            <button class="w-fit border border-orange-300 text-orange-500 px-6 py-3 rounded-xl flex items-center gap-3">

                                <i class="fa-solid fa-download"></i>

                                Unduh Kartu

                            </button>

                        </div>

                    </div>

                </div>

            </div>

            <!-- FOOTER -->
            <div class="text-center text-gray-400 mt-10 pb-5 text-[17px]">
                © 2026 AIU Library. All rights reserved.
            </div>

        </div>

    </main>

</div>

</body>
</html>