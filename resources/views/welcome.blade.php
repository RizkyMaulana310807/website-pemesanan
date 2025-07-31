<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    {{-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Coolvetica via CDN alternatif (karena tidak tersedia di Google Fonts) -->
    <link href="https://fonts.cdnfonts.com/css/coolvetica" rel="stylesheet"> --}}

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .clip-diagonal {
            clip-path: polygon(0 0, 100% 0, 100% 75%, 0% 100%);
        }

        .clip-diagonals {
            clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 75%);
        }

        .clip-tummy {
            clip-path: polygon(0 0, 100% 0, 100% 85%, 90% 100%, 0 100%);
        }

        @font-face {
            font-family: 'Poppins';
            src: url('/fonts/Poppins-Regular.ttf') format('truetype');
            font-weight: normal;
        }

        @font-face {
            font-family: 'Coolvetica';
            src: url('/fonts/coolvetica-rg.ttf') format('truetype');
            font-weight: normal;
        }

        .poppins {
            font-family: 'Poppins', sans-serif;
        }

        .coolvetica {
            font-family: 'Coolvetica', sans-serif;
        }
    </style>

</head>

<body class="bg-[#fff9f2] font-sans">

    <!-- Navbar -->
    <div class="bg-[#164483] text-white px-4 py-4">
        <div class="flex justify-between items-center">
            <div class="text-white text-sm flex flex-row w-12 h-12 items-center">
                <img src="{{ asset('images/Logo1.png') }}" alt="Logo">
                <span class="coolvetica">ORCA<br>Eats</span>
            </div>
            <div class="space-y-1 cursor-pointer">
                <i class="fa-solid fa-bars fa-2xl"></i>
            </div>
        </div>
    </div>

    <!-- Checker Header -->
    <div class="">
        <div class="grid grid-cols-20 grid-rows-2 w-full">
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#164483]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#164483]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#164483]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#164483]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#164483]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#164483]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#164483]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#164483]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#164483]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#164483]"></div>

            <div class="w-full aspect-square bg-[#164483]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#164483]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#164483]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#164483]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#164483]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#164483]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#164483]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#164483]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#164483]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#164483]"></div>
            <div class="w-full aspect-square bg-white"></div>
        </div>
    </div>

    <!-- Content -->
    <div class="text-center px-4 py-6">

        <img src="{{ asset('images/MainTitle.png') }}" alt="Happy Tummy Happy Study">

        <p class="text-sm text-gray-700 my-24 poppins mx-8">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut enim ad minim veniam, quis nostrud exercitation
            ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus soluta in vel sed veritatis debitis
            vitae aperiam dolorem, quasi eligendi officia porro repellat fugiat repellendus nostrum ut.
        </p>
        <!-- Buttons -->
        <div class="flex justify-center gap-4 mt-6 mb-12">
            <button class="bg-[#E72828] border-2 border-transparent active:border-[#E72828] active:bg-transparent active:text-[#E72828] text-white px-5 py-2 rounded-full font-semibold poppins">Liat Menu</button>
            <button class="bg-[#164483] border-2 border-transparent active:border-[#164483] active:bg-transparent active:text-[#164483] text-white px-5 py-2 rounded-full font-semibold poppins">Pre Order</button>
        </div>
    </div>

    <!-- Checker Footer -->
    <div class="">
        <div class="grid grid-cols-20 grid-rows-2 w-full">
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#164483]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#164483]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#164483]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#164483]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#164483]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#164483]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#164483]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#164483]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#164483]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#164483]"></div>

            <div class="w-full aspect-square bg-[#164483]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#164483]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#164483]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#164483]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#164483]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#164483]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#164483]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#164483]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#164483]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#164483]"></div>
            <div class="w-full aspect-square bg-white"></div>
        </div>
    </div>

    <!-- Our Menu Section -->
    <!-- Bagian biru dengan clip-path miring bawah -->
    <div class="relative">
        <div class="bg-[#164483] text-white px-4 py-6 clip-diagonal">
            <img class="w-48" src="{{ asset('images/MenuHeader.png') }}" alt="Our Menu">
        </div>

        <!-- Week 1 di luar div biru -->
        <div class="flex px-4 pt-2 items-center justify-end mb-8">
            <img src="{{ asset('images/Week1Text.png') }}" alt="Week 1" class="w-38">
        </div>
    </div>


    <div class="flex flex-row">
        <div>
            <img src="{{ asset('images/applefritter.png') }}" class="w-48 h-48 text-shadow-2xl"
                alt="apple fritters">
        </div>
        <div>
            <h1 class="text-[#164483] font-bold text-2xl coolvetica" data-speed="0.8">Apple<br>Fritters</h1>
            <p class="text-lg font-bold text-[#E72828] coolvetica">7K</p>
            <p class="text-xs text-[#164483] poppins">Garing di luar, lembut di dalam<br>Apel manis di balut adonan<br>goreng.
                lalu di siram glaze manis<br>yang meleleh legit, wangi, dan bikin nagih</p>
        </div>
    </div>

    <div class="flex flex-row justify-around mt-8">
        <div class="">
            <h1 class="text-right text-[#164483] font-bold text-2xl coolvetica">Japanesse<br>Coffee Jelly</h1>
            <p class="text-right text-lg font-bold text-[#E72828] coolvetica">5K</p>
            <p class="text-right text-xs text-[#164483] poppins">Dessert coffee ala jepang.<br>disajikan dingin dengan
                krim<br>manis yang creamy</p>
        </div>
        <div class="w-36 h-36 flex items-end">
            <img src="{{ asset('images/cff-jelly1.png') }}" class="flex text-shadow-2xl w-36 h-36"
                alt="Japanesse coffe jelly">
        </div>
    </div>

    <div class="p-4 py-8 my-8">
        <h1 class="font-bold text-[#164483] text-center text-xl coolvetica">Masih ada nih di bawah</h1>
    </div>


    <div class="">
        <div class="grid grid-cols-20 grid-rows-2 w-full">
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#E72828]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#E72828]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#E72828]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#E72828]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#E72828]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#E72828]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#E72828]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#E72828]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#E72828]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#E72828]"></div>

            <div class="w-full aspect-square bg-[#E72828]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#E72828]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#E72828]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#E72828]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#E72828]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#E72828]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#E72828]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#E72828]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#E72828]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#E72828]"></div>
            <div class="w-full aspect-square bg-white"></div>
        </div>
    </div>

    <div class="relative">
        <div class="bg-[#E72828] text-white px-8 py-12 clip-diagonals">
        </div>
        <div class="flex px-4 pt-2 items-center justify-start">
            <img src="{{asset('images/Week2Text.png')}}" alt="Week 2" class="w-38">
        </div>
    </div>

</body>

</html>
