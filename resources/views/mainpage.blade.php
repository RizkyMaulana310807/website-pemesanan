<x-template>

    <!-- Checker Header -->

    <!-- Content -->
    <div class="text-center px-4 py-6 mt-[55px]">

        <img src="{{ asset('images/MainTitle.png') }}" alt="Happy Tummy Happy Study">

        <p class="text-sm text-gray-700 my-24 poppins mx-8">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut enim ad minim veniam, quis nostrud exercitation
            ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus soluta in vel sed veritatis debitis
            vitae aperiam dolorem, quasi eligendi officia porro repellat fugiat repellendus nostrum ut.
        </p>
        <!-- Buttons -->
        <div class="flex justify-center gap-4 mt-6 mb-12">
            <button
                class="bg-[#E72828] border-2 border-transparent active:border-[#E72828] active:bg-transparent active:text-[#E72828] text-white px-5 py-2 rounded-full font-semibold poppins">Liat
                Menu</button>
            {{-- Perbaikan: Menggunakan helper route() agar URL preorder mengarah ke /orca/preorder --}}
            <a href="{{ route('preorder') }}"
                class="bg-[#164483] border-2 border-transparent active:border-[#164483] active:bg-transparent active:text-[#164483] text-white px-5 py-2 rounded-full font-semibold poppins">Pre
                Order</a>
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
            <img src="{{ asset('images/applefritter.png') }}" class="w-48 h-48 text-shadow-2xl" alt="apple fritters">
        </div>
        <div>
            <h1 class="text-[#164483] font-bold text-2xl coolvetica" data-speed="0.8">Apple<br>Fritters</h1>
            <p class="text-lg font-bold text-[#E72828] coolvetica">7K</p>
            <p class="text-xs text-[#164483] poppins">Garing di luar, lembut di dalam<br>Apel manis di balut
                adonan<br>goreng.
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
            <img src="{{ asset('images/Week2Text.png') }}" alt="Week 2" class="w-38">
            <p class="text-xs w-full text-[#164483]">unlocked at<br><span>10 Agustus 2025</span><br><i
                    class="fa-solid fa-stopwatch"></i>263 : 59 : 59</p>
        </div>
    </div>

    <div class="flex flex-row justify-around mt-8">
        <div class="">
            <h1 class="text-right text-[#164483] font-bold text-2xl coolvetica">Cube<br>Bites</h1>
            <p class="text-right text-lg font-bold text-[#E72828] coolvetica">8K</p>
            <p class="text-right text-xs text-[#164483] poppins">Brownies manis potong<br>dengan topping
                yang<br>melimpah</p>
        </div>
        <div class="w-36 h-36 flex items-end">
            <img src="{{ asset('images/brownesbite.png') }}" class="flex text-shadow-2xl w-36 h-36"
                alt="Brownis Bite">
        </div>
    </div>


    <div class="flex flex-row justify-around mt-12">
        <div class="w-28 h-42 flex items-end">
            <img src="{{ asset('images/kpssrgl.png') }}" class="flex text-shadow-2xl w-28 h-42" alt="Brownis Bite">
        </div>
        <div class="">
            <h1 class="text-left text-[#164483] font-bold text-2xl coolvetica">Cube<br>Bites</h1>
            <p class="text-left text-lg font-bold text-[#E72828] coolvetica">8K</p>
            <p class="text-left text-xs text-[#164483] poppins">Brownies manis potong<br>dengan topping
                yang<br>melimpah</p>
        </div>
    </div>

    <div class="p-4 py-8 my-8">
        <h1 class="coolvetica text-[#164483] text-[27px] text-center">Di bawah ada menu spesial <br><span
                class="bg-red-500 text-white px-2">HUT RI</span> nih !</h1>
    </div>

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

    <div class="relative">
        <div class="bg-[#164483] text-white px-8 py-12">
        </div>
        <div class="flex items-center justify-center px-4 pt-2 mt-8 mx-auto w-fit">
            <img src="{{ asset('images/Week2Text.png') }}" alt="Week 2" class="w-38">
            <p class="text-xs text-[#164483] text-center">
                unlocked at<br>
                <span>10 Agustus 2025</span><br>
                <i class="fa-solid fa-stopwatch"></i> 263 : 59 : 59
            </p>
        </div>
        <div class="flex mx-auto w-fit">
            <img src="{{ asset('images/SpesialHUTRIText.png') }}" alt="Spesial HUT RI" class="w-56">
        </div>
    </div>

    <div class="flex flex-row justify-around mt-12">
        <div class="w-28 h-42 flex items-end">
            <img src="{{ asset('images/icecream.png') }}" class="flex shadow-lg w-38 h-3w-38" alt="Brownis Bite">
        </div>
        <div class="">
            <h1 class="text-left text-[#164483] font-bold text-2xl coolvetica">Ice Cream<br>Scoops</h1>
            <p class="text-left text-lg font-bold text-[#E72828] coolvetica">7K</p>
            <p class="text-left text-xs text-[#164483] poppins">Ice cream yang dingin, lembut, dan<br>manis di tambah
                dengan topping<br>yang melimpah. cocok banget<br>sambil nonton agustusan</p>
        </div>
    </div>
</x-template>

