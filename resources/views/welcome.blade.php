<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page AIU Library</title>

    @vite('resources/css/app.css')

    <!-- FONT POPPINS -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body class="font-[Poppins] overflow-hidden">

    <!-- BACKGROUND -->
    <div class="relative min-h-screen bg-cover bg-center"
         style="background-image: url('{{ asset('image/landingpage.jpg') }}');">

        <!-- OVERLAY -->
        <div class="absolute inset-0 bg-white/35"></div>

        <!-- CONTENT -->
        <div class="relative z-10 min-h-screen px-8 py-6">

            <!-- NAVBAR -->
            <div class="w-full
                        h-[75px]
                        bg-[#DEA356]
                        rounded-[18px]
                        flex
                        items-center
                        justify-between
                        px-8
                        shadow-lg">

                <!-- LOGO -->
                <div class="flex items-center">

                    <img src="{{ asset('image/logo1.png') }}"
                         alt="Logo"
                         class="w-[120px]">

                </div>

                <!-- MENU -->
                <div class="flex items-center gap-16">

                    <a href="#"
                       class="text-white text-[20px] font-bold hover:opacity-80 transition">
                        Beranda
                    </a>

                    <a href="/login"
                       class="text-white text-[20px] font-bold hover:opacity-80 transition">
                        Masuk
                    </a>

                    <a href="/register"
                       class="text-white text-[20px] font-bold hover:opacity-80 transition">
                        Daftar
                    </a>

                </div>

            </div>

            <!-- HERO SECTION -->
            <div class="flex items-center justify-center mt-50">

                <!-- HERO CARD -->
                <div class="w-full
                            max-w-[820px]
                            h-[230px]
                            bg-[#DEA356]/65
                            backdrop-blur-[2px]
                            rounded-[28px]
                            shadow-2xl
                            flex
                            items-center
                            justify-center
                            text-center
                            px-10">

                    <!-- TEXT -->
                    <h1 class="text-white
                               text-[30px]
                               leading-[50px]
                               font-extrabold">

                        Selamat Datang di AIU Library!<br>
                        Sistem Perpustakaan Digital

                    </h1>

                </div>

            </div>

        </div>

    </div>

</body>
</html>