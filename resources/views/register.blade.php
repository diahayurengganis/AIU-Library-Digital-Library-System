<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        *{
            font-family: 'Poppins', sans-serif;
        }

        body{
            overflow: hidden;
        }
    </style>
</head>

<body class="font-[Poppins] overflow-hidden">

    <!-- BACKGROUND -->
    <div class="relative min-h-screen bg-cover bg-center"
         style="background-image: url('{{ asset('image/landingpage.jpg') }}');">

        <!-- OVERLAY -->
        <div class="absolute inset-0 bg-[#000000]/10"></div>

        </div>

        <!-- FORM BOX -->
        <div class="absolute inset-0 flex items-center justify-center z-20">

            <div class="w-[430px] rounded-[15px] bg-[#d89a46]/75 px-[45px] py-[28px]">

                <!-- LOGO -->
                <div class="flex justify-center">
                    <img
                        src="image/logo1.png"
                        alt=""
                        class="w-[100px] mb-2"
                    >
                </div>

                <!-- TITLE -->
                <h2 class="text-center text-white text-[18px] font-bold mb-8">
                    Buat Akun Baru
                </h2>

                <!-- FORM -->
                <form>

                    <!-- NAMA -->
                    <div class="mb-5">

                        <label class="block text-white text-[18px] font-bold mb-2">
                            Nama Lengkap
                        </label>

                        <input
                            type="text"
                            placeholder="Masukkan Nama Lengkap Anda"
                            class="w-full h-[35px] rounded-full bg-[#f4f4f4] px-5 text-[12px] font-semibold text-[#444] placeholder:text-[#555] outline-none"
                        >
                    </div>

                    <!-- NIM -->
                    <div class="mb-5">

                        <label class="block text-white text-[18px] font-bold mb-2">
                            NIM
                        </label>

                        <input
                            type="text"
                            placeholder="Masukkan NIM Anda"
                            class="w-full h-[35px] rounded-full bg-[#f4f4f4] px-5 text-[12px] font-semibold text-[#444] placeholder:text-[#555] outline-none"
                        >
                    </div>

                    <!-- PASSWORD -->
                    <div class="mb-7">

                        <label class="block text-white text-[18px] font-bold mb-2">
                            Kata Sandi
                        </label>

                        <input
                            type="password"
                            placeholder="Masukkan Kata Sandi Anda"
                            class="w-full h-[35px] rounded-full bg-[#f4f4f4] px-5 text-[12px] font-semibold text-[#444] placeholder:text-[#555] outline-none"
                        >
                    </div>

                    <!-- BUTTON -->
                    <div class="flex justify-center mb-5">

                        <button
                            type="submit"
                            class="w-[100px] h-[38px] rounded-full bg-[#f5f5f5] text-[#3d3d3d] text-[15px] font-bold hover:scale-105 duration-300"
                        >
                            Daftar
                        </button>

                    </div>

                    <!-- LOGIN -->
                    <div class="text-center">
                        <p class="text-[12px] font-bold text-black">
                            Sudah Punya Akun?
                            <a href="#" class="hover:underline">
                                MASUK
                            </a>
                            |
                            <a href="#" class="hover:underline">
                                KEMBALI
                            </a>
                        </p>
                    </div>

                </form>

            </div>
        </div>

       

    </div>

</body>
</html>