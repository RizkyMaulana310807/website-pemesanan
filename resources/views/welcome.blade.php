<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
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

        .scrollsmoother {
            color: #fffce1;
            top: -2rem;
            width: 100%;
            text-align: center;
            display: block;
            font-size: 16px;

        }
    </style>

</head>

<body class="bg-[#fff9f2] font-sans">

    <!-- Navbar -->
    <div class="bg-[#09417e] text-white px-4 py-4">
        <div class="flex justify-between items-center">
            <div class="text-white text-sm"></div>
            <div class="space-y-1 cursor-pointer">
                <i class="fa-solid fa-bars fa-2xl"></i>
            </div>
        </div>
    </div>

    <!-- Checker Header -->
    <div class="">
        <div class="grid grid-cols-20 grid-rows-2 w-full">
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#09417e]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#09417e]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#09417e]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#09417e]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#09417e]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#09417e]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#09417e]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#09417e]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#09417e]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#09417e]"></div>

            <div class="w-full aspect-square bg-[#09417e]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#09417e]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#09417e]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#09417e]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#09417e]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#09417e]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#09417e]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#09417e]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#09417e]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#09417e]"></div>
            <div class="w-full aspect-square bg-white"></div>
        </div>
    </div>

    <!-- Content -->
    <div class="text-center px-4 py-6">
        <h2 class="header text-3xl font-bold text-[#09417e]">
            Happy
            <span class="inline-block text-white bg-[#09417e] px-2 py-1 clip-tummy ml-2">Tummy</span>
        </h2>
        <h2 class="header text-3xl font-bold text-[#09417e] mt-2">
            Happy
            <span class="inline-block text-white bg-[#972219] px-2 py-1 clip-tummy ml-2">Study</span>
        </h2>

        <p class="text-sm text-gray-700 mt-4">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut enim ad minim veniam, quis nostrud exercitation
            ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus soluta in vel sed veritatis debitis
            vitae aperiam dolorem, quasi eligendi officia porro repellat fugiat repellendus nostrum ut.
        </p>
        <!-- Buttons -->
        <div class="flex justify-center gap-4 mt-6">
            <button class="bg-[#972219] text-white px-5 py-2 rounded-full font-semibold">Liat Menu</button>
            <button class="bg-[#09417e] text-white px-5 py-2 rounded-full font-semibold">Pre Order</button>
        </div>
    </div>

    <!-- Checker Footer -->
    <div class="">
        <div class="grid grid-cols-20 grid-rows-2 w-full">
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#09417e]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#09417e]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#09417e]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#09417e]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#09417e]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#09417e]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#09417e]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#09417e]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#09417e]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#09417e]"></div>

            <div class="w-full aspect-square bg-[#09417e]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#09417e]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#09417e]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#09417e]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#09417e]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#09417e]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#09417e]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#09417e]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#09417e]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#09417e]"></div>
            <div class="w-full aspect-square bg-white"></div>
        </div>
    </div>

    <!-- Our Menu Section -->
    <!-- Bagian biru dengan clip-path miring bawah -->
    <div class="relative">
        <div class="bg-[#09417e] text-white px-4 py-6 clip-diagonal">
            <h2 class="text-2xl font-bold">
                Our <br>
                <span class="bg-white text-[#09417e] px-2">Menu</span>
            </h2>
        </div>

        <!-- Week 1 di luar div biru -->
        <div class="flex px-4 pt-2 items-center justify-end">
            <p class="text-white font-bold text-3xl bg-[#972219] p-2 clip-tummy">Week 1</p>
        </div>
    </div>


    <div class="flex flex-row">
        <div>
            <img src="{{ asset('images/apple-fritters.png') }}" class="w-48 h-48 text-shadow-2xl"
                alt="apple fritters">
        </div>
        <div>
            <h1 class="text-[#09417e] font-bold text-2xl" data-speed="0.8">Apple<br>Fritters</h1>
            <p class="text-lg font-bold text-[#972219]">7K</p>
            <p class="text-xs text-[#09417e]">Garing di luar, lembut di dalam<br>Apel manis di balut adonan<br>goreng.
                lalu di siram glaze manis<br>yang meleleh legit, wangi, dan bikin nagih</p>
        </div>
    </div>

    <div class="flex flex-row justify-around">
        <div class="">
            <h1 class="text-right text-[#09417e] font-bold text-2xl">Japanesse<br>Coffee Jelly</h1>
            <p class="text-right text-lg font-bold text-[#972219]">5K</p>
            <p class="text-right text-xs text-[#09417e]">Dessert coffee ala jepang.<br>disajikan dingin dengan
                krim<br>manis yang creamy</p>
        </div>
        <div class="w-36 h-36 flex items-end">
            <img src="{{ asset('images/japanesse-coffe-jelly.png') }}" class="flex text-shadow-2xl w-36 h-36"
                alt="Japanesse coffe jelly">
        </div>
    </div>

    <div class="p-4 py-8 my-8">
        <h1 class="font-bold text-[#09417e] text-center text-xl">Masih ada nih di bawah</h1>
    </div>


    <div class="">
        <div class="grid grid-cols-20 grid-rows-2 w-full">
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#972219]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#972219]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#972219]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#972219]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#972219]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#972219]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#972219]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#972219]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#972219]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#972219]"></div>

            <div class="w-full aspect-square bg-[#972219]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#972219]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#972219]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#972219]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#972219]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#972219]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#972219]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#972219]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#972219]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#972219]"></div>
            <div class="w-full aspect-square bg-white"></div>
        </div>
    </div>

    <div class="relative">
        <div class="bg-[#972219] text-white px-8 py-12 clip-diagonals">
        </div>
        <div class="flex px-4 pt-2 items-center justify-start">
            <p class="text-white font-bold text-3xl bg-[#972219] p-2 clip-tummy">Week 2</p>
        </div>
    </div>

</body>

</html>
