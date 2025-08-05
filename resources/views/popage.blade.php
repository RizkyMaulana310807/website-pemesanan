<x-template>

        <div class="flex w-full px-4 mt-8 mx-auto justify-center">
            <div class="w-fit">
                <img src="{{ asset('/images/preordertext.png') }}" alt="Pre Order Text" class="w-56">
                <p class="text-[#E72828] poppins text-[15px] mt-1 text-start">3–5 Agustus</p>
            </div>
        </div>


    </div>
    <div class="mt-12">
        <p class="poppins text-[16px] text-[#164483] text-center">Pesenan kamu PO nih, masukin<br>infonya dulu biar nggak
            ketuker<br>pas
            diambil</p>
    </div>

    <div class="flex items-center justify-center flex-col gap-6 mt-12">
        <input type="text" id="nameInput"
            class="inputform poppins w-[320px] h-[50px] border-1 rounded-full p-4 border-[#E72828]/50 focus:outline-[#E72828] focus:outline-2 transition-all duration-200"
            placeholder="Nama">

        <input type="number" id="phoneInput"
            class="inputform poppins w-[320px] h-[50px] border-1 rounded-full p-4 border-[#E72828]/50 focus:outline-[#E72828] focus:outline-2 transition-all duration-200"
            placeholder="No. HP">
    </div>

    <div
        class="w-[340px] border-2 border-[#EB3D3D] rounded-4xl flex items-center justify-center flex-col mx-auto mt-12">

        <h1 class="text-[25px] coolvetica text-[#164483] text-center m-4">Menu yang dipesan</h1>
        <div class="flex flex-col w-full">

            <x-cardwithcounter img="images/japanesse-coffe-jelly.png" alt="Japanese Coffee Jelly"
                title="Japanese Coffee Jelly" price="5K" />

            <x-cardwithcounter img="images/applefritter.png" alt="Apple Fritter" title="Apple Fritter" price="7K" />
        </div>

    </div>

    <div x-data="{ open: false, selected: '' }" class="relative w-[320px] h-[70px] mx-auto mt-6">
        <!-- Trigger -->
        <div @click="open = !open"
            class="border-2 border-[#E72828] rounded-full px-4 py-2 flex items-center justify-between cursor-pointer text-[#7D8CA4] text-sm bg-white">
            <span class="poppins" x-text="selected || 'waktu pengambilan'"></span>
            <svg class="w-4 h-4 text-[#164483]" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
        </div>

        <!-- Dropdown List -->
        <ul x-show="open" @click.away="open = false"
            class="absolute z-10 mt-2 w-full bg-[#FFF9F4] border border-[#E72828] rounded-b-xl px-6 py-4 shadow-md transition"
            x-cloak>

            <li @click="selected = 'Selasa, 5 agustus 2025'; open = false"
                class="py-2 text-sm cursor-pointer text-[#164483] font-semibold">
                Selasa, <span class="font-normal">5 agustus 2025</span>
            </li>
            <li @click="selected = 'Rabu, 6 agustus 2025'; open = false"
                class="py-2 text-sm cursor-pointer text-[#164483] font-semibold">
                Rabu, <span class="font-normal">6 agustus 2025</span>
            </li>
            <li @click="selected = 'Kamis, 7 agustus 2025'; open = false"
                class="py-2 text-sm cursor-pointer text-[#164483] font-semibold">
                Kamis, <span class="font-normal">7 agustus 2025</span>
            </li>
        </ul>

    </div>
    <div class="flex items-center text-center justify-center my-12">

        <a href="/pembayaran"
            class="flex w-[300px] h-[50px] coolvetica text-[22px] border-2 border-[#164483] bg-[#164483] text-white active:bg-transparent active:text-[#164483] rounded-full flex items-center justify-center">
            Selanjutnya
        </a>

    </div>
    </div>

    <script>
        const inputs = document.querySelectorAll('.inputform');

        inputs.forEach(input => {
            const updateBorder = () => {
                if (input === document.activeElement || input.value.trim() !== '') {
                    input.classList.remove('border-[#E72828]/50');
                    input.classList.add('border-[#E72828]');
                } else {
                    input.classList.remove('border-[#E72828]');
                    input.classList.add('border-[#E72828]/50');
                }
            };

            // Initial check (in case already filled)
            updateBorder();

            // On focus, blur, and input events
            input.addEventListener('focus', updateBorder);
            input.addEventListener('blur', updateBorder);
            input.addEventListener('input', updateBorder);
        });
    </script>

</x-template>
