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

        .clip-tummy {
            clip-path: polygon(0 0, 100% 0, 100% 85%, 90% 100%, 0 100%);
        }
    </style>

</head>

<body class="bg-[#fff9f2] font-sans">

    <!-- Navbar -->
    <div class="bg-[#004aad] text-white px-4 py-4">
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
            <div class="w-full aspect-square bg-[#004aad]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#004aad]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#004aad]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#004aad]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#004aad]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#004aad]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#004aad]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#004aad]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#004aad]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#004aad]"></div>

            <div class="w-full aspect-square bg-[#004aad]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#004aad]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#004aad]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#004aad]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#004aad]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#004aad]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#004aad]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#004aad]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#004aad]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#004aad]"></div>
            <div class="w-full aspect-square bg-white"></div>
        </div>
    </div>

    <!-- Content -->
    <div class="text-center px-4 py-6">
        <h2 class="text-3xl font-bold">
            Happy
            <span class="inline-block text-white bg-[#004aad] px-2 py-1 clip-tummy ml-2">Tummy</span>
        </h2>
        <h2 class="text-3xl font-bold mt-2">
            Happy
            <span class="inline-block text-white bg-[#ff6b00] px-2 py-1 clip-tummy ml-2">Study</span>
        </h2>

        <p class="text-sm text-gray-700 mt-4">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut enim ad minim veniam, quis nostrud exercitation
            ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
        <p class="text-sm text-gray-700 mt-2">
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        </p>

        <!-- Buttons -->
        <div class="flex justify-center gap-4 mt-6">
            <button class="bg-[#ff6b00] text-white px-5 py-2 rounded-full">Liat Menu</button>
            <button class="bg-[#004aad] text-white px-5 py-2 rounded-full">Pre Order</button>
        </div>
    </div>

    <!-- Checker Footer -->
    <div class="">
        <div class="grid grid-cols-20 grid-rows-2 w-full">
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#004aad]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#004aad]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#004aad]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#004aad]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#004aad]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#004aad]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#004aad]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#004aad]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#004aad]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#004aad]"></div>

            <div class="w-full aspect-square bg-[#004aad]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#004aad]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#004aad]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#004aad]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#004aad]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#004aad]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#004aad]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#004aad]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#004aad]"></div>
            <div class="w-full aspect-square bg-white"></div>
            <div class="w-full aspect-square bg-[#004aad]"></div>
            <div class="w-full aspect-square bg-white"></div>
        </div>
    </div>

    <!-- Our Menu Section -->
    <!-- Bagian biru dengan clip-path miring bawah -->
    <div class="relative">
        <div class="bg-[#004aad] text-white px-4 py-6 clip-diagonal">
            <h2 class="text-2xl font-bold">
                Our <br>
                <span class="bg-white text-[#004aad] px-2">Menu</span>
            </h2>
        </div>

        <!-- Week 1 di luar div biru -->
        <div class="flex px-4 pt-2 items-center justify-end">
            <p class="text-[#ff6b00] font-bold text-3xl">Week 1</p>
        </div>
    </div>

</body>

</html>
