<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login AIU Library</title>

    @vite('resources/css/app.css')

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="font-[Poppins] overflow-hidden">

    <!-- BACKGROUND -->
    <div class="relative min-h-screen bg-cover bg-center"
         style="background-image: url('{{ asset('image/landingpage.jpg') }}');">

        <!-- OVERLAY -->
        <div class="absolute inset-0 bg-white/35"></div>

        <!-- CONTENT -->
        <div class="relative flex items-center justify-center min-h-screen px-4">

            <!-- LOGIN CARD -->
            <div class="w-full max-w-[620px]
                        bg-[#DEA356]/65
                        backdrop-blur-[2px]
                        rounded-[30px]
                        px-16
                        py-12
                        shadow-2xl">

                <!-- LOGO -->
                <div class="flex justify-center mb-8">
                    <img src="{{ asset('image/logo1.png') }}"
                         alt="Logo"
                         class="w-[200px]">
                </div>

                <!-- FORM -->
                <form action="" method="POST">

                    @csrf

                    <!-- NIM -->
                    <div class="mb-7">

                        <label class="block
                                     text-white
                                     text-[22px]
                                     font-bold
                                     mb-3">
                            NIM
                        </label>

                        <input type="text"
                               name="nim"
                               placeholder="Masukkan NIM Anda"
                               class="w-full
                                      h-[44px]
                                      rounded-full
                                      px-6
                                      text-[14px]
                                      font-medium
                                      bg-white
                                      outline-none
                                      border-none
                                      shadow-sm
                                      placeholder:text-gray-500
                                      focus:ring-4
                                      focus:ring-white/40">
                    </div>

                    <!-- PASSWORD -->
                    <div class="mb-10">

                        <label class="block
                                     text-white
                                     text-[22px]
                                     font-bold
                                     mb-3">
                            Kata Sandi
                        </label>

                        <input type="password"
                               name="password"
                               placeholder="Masukkan Kata Sandi Anda"
                               class="w-full
                                      h-[44px]
                                      rounded-full
                                      px-6
                                      text-[14px]
                                      font-medium
                                      bg-white
                                      outline-none
                                      border-none
                                      shadow-sm
                                      placeholder:text-gray-500
                                      focus:ring-4
                                      focus:ring-white/40">
                    </div>

                    <!-- BUTTON -->
                    <div class="flex justify-center mb-8">

                        <button type="submit"
                                class="w-[140px]
                                       h-[42px]
                                       bg-white
                                       rounded-full
                                       text-[15px]
                                       font-bold
                                       text-black
                                       shadow-md
                                       hover:scale-105
                                       transition duration-300">
                            Masuk
                        </button>

                    </div>

                    <!-- FOOTER -->
                    <p class="text-center
                              text-[17px]
                              font-semibold
                              text-black">

                        Belum Punya Akun?

                        <a href="/register"
                           class="font-bold hover:underline">
                            DAFTAR
                        </a>

                    </p>

                </form>

            </div>

        </div>

    </div>

</body>
</html>