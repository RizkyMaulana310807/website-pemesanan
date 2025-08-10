<x-template>

    <!-- Checker Header -->

    <!-- Content -->
    <div class="text-center px-4 py-6 mt-[55px]">

        <img src="{{ asset('images/happytummy.png') }}" alt="Happy Tummy Happy Study">

        <p class="text-sm text-[#164483] my-24 poppins mx-4">
            Lagi nyari mood booster buat belajar? Orca Eats hadir buat kamu! Cobain camilan manis yang bisa bikin harimu
            jadi lebih seru. Rasanya enak, harganya pas di kantong anak sekolah, dan dijamin bikin semangat belajar
            balik lagi ga pake ribet! </p>
        <!-- Buttons -->
        <div class="flex justify-center gap-4 mt-6 mb-8">
            <a href="{{ route('invoices.check') }}"
                class="bg-[#E72828] border-2 border-transparent active:border-[#E72828] active:bg-transparent active:text-[#E72828] text-white px-5 py-2 rounded-full font-semibold poppins">Liat
                Invoices</a>
            {{-- Perbaikan: Menggunakan helper route() agar URL preorder mengarah ke /orca/preorder --}}
            <a href="{{ route('preorder') }}"
                class="bg-[#164483] border-2 border-transparent active:border-[#164483] active:bg-transparent active:text-[#164483] text-white px-5 py-2 rounded-full font-semibold poppins">Pre
                Order</a>
        </div>
    </div>

    <!-- Checker Footer -->
    <div class="" id="menu1">
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
            <img class="w-40 ml-4" src="{{ asset('images/ourmenu.png') }}" alt="Our Menu">
        </div>

        <!-- Week 1 di luar div biru -->
        <div class="flex px-4 pt-2 items-center justify-end mb-8">
            <img src="{{ asset('images/week1.png') }}" alt="Week 1" class="w-38">
        </div>
    </div>


    <div class="flex flex-row mx-10">
        <div class="flex items-center gap-6">
            <img src="{{ asset('images/brownisbite.png') }}" alt="Brownies Bites"
                class="w-36 h-36 object-contain text-shadow-2xl">
            <div class="text-right">
                <h1 class="text-[#164483] font-bold leading-tight text-2xl coolvetica">Brownies<br>Bites</h1>
                <p class="text-[#E72828] font-bold text-[24px] mt-1 coolvetica">10K</p>
                <p class="text-xs text-[#164483] mt-1 poppins">
                    1 box Brownies lembut, pakai<br>
                    cokelat premium, manisnya pas,<br>
                    lumer dalam sekali gigitan
                </p>
            </div>
        </div>
    </div>

    <div class="flex flex-row justify-around mt-16 mx-10">
        <div class="">
            <h1 class="text-right text-[#164483] font-bold text-2xl coolvetica" style="letter-spacing: 1px;">
                Japanesse<br>Coffee Jelly</h1>
            <p class="text-right text-lg font-bold text-[#E72828] coolvetica text-[24px]">5K</p>
            <p class="text-right text-xs text-[#164483] poppins">Dessert coffee ala jepang.<br>disajikan dingin dengan
                krim<br>manis yang creamy</p>
        </div>
        <div class="w-36 h-36 flex items-end">
            <img src="{{ asset('images/kopijely.png') }}" class="flex w-36" alt="Japanesse coffe jelly">
        </div>
    </div>

    <div class="p-4 py-8 my-8">
        <h1 class="font-bold text-[#164483] text-center text-xl coolvetica" style="letter-spacing: 1px;">Masih ada nih
            di bawah</h1>
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
        <div class="flex px-4 pt-2 items-center justify-start gap-2">
            <img src="{{ asset('images/week2.png') }}" alt="Week 2" class="w-38">
            <div x-data="countdownTimer('2025-08-10T00:00:00')" x-init="startCountdown()" class="text-xs w-full text-[#164483] poppins">
                Unlocked at<br>
                <span class="font-semibold">10 Agustus 2025</span><br>
                <i class="fa-solid fa-stopwatch"></i>
                <span x-text="timeLeft"></span>
            </div>
        </div>
    </div>

    <div class="flex flex-row justify-around mt-8">
        <div class="flex items-center gap-6">
            <div class="text-right">
                <h1 class="text-[#164483] font-bold text-2xl leading-tight coolvetica">Brownies<br>Bites</h1>
                <p class="text-[#E72828] font-bold text-[24px] mt-1 coolvetica">10K</p>
                <p class="text-xs text-[#164483] mt-1 poppins">
                    1 box Brownies lembut, pakai<br>
                    cokelat premium, manisnya pas,<br>
                    lumer dalam sekali gigitan
                </p>
            </div>
            <img src="{{ asset('images/brownisbite.png') }}" alt="Brownies Bites"
                class="w-36 h-36 object-contain text-shadow-2xl">
        </div>
    </div>


    <div class="flex flex-row w-full mt-12">
        <!-- Bagian Kiri -->
        <div class="w-1/2 flex items-end justify-center">
            <img src="{{ asset('images/kpssrgl.png') }}" class="w-28 h-auto" alt="Brownis Bite">
        </div>

        <!-- Bagian Kanan -->
        <div class="w-1/2 flex flex-col justify-center gap-2 px-4">
            <h1 class="text-[#164483] font-bold text-2xl coolvetica leading-snug">Kopi<br>Susu Regal</h1>
            <p class="text-lg font-bold text-[#E72828] coolvetica text-[24px]">7K</p>
            <p class="text-xs text-[#164483] poppins">Kopi susu creamy yang dipadu dengan biskuit regal yang lembut dan
                crunchy. Cocok pas lagi cuaca panas.</p>
        </div>
    </div>

    <div class="p-4 py-8 my-8">
        <h1 class="coolvetica text-[#164483] text-[27px] text-center coolvetica" style="letter-spacing: 1px;">Di bawah
            ada menu <br> spesial<span class="bg-red-500 text-white px-2">HUT RI</span> nih !</h1>
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
        <div class="flex items-center justify-center px-4 pt-2 mt-8 mx-auto w-fit gap-2">
            <img src="{{ asset('images/week3.png') }}" alt="Week 3" class="w-38">
            <p class="text-xs text-[#164483] text-left poppins" x-data="countdownTimer('2025-08-17T00:00:00')" x-init="startCountdown()">
                unlocked at<br>
                <span class="font-semibold">17 Agustus 2025</span><br>
                <i class="fa-solid fa-stopwatch"></i>
                <span x-text="timeLeft"></span>
            </p>
        </div>
        <div class="flex mx-auto w-fit">
            <img src="{{ asset('images/spesialhutri.png') }}" alt="Spesial HUT RI" class="w-56">
        </div>
    </div>

    <div class="bg-[#FFF5ED] px-6 py-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

            <!-- Ice Cream -->
            <div class="flex items-center gap-6">
                <img src="{{ asset('images/eskrim.png') }}" alt="Ice Cream Scoops" class="w-36 h-36 object-contain">
                <div class="text-left">
                    <h1 class="text-[#164483] font-bold text-2xl leading-tight coolvetica">Ice Cream<br>Scoops</h1>
                    <p class="text-[#E72828] font-bold text-lg mt-1 coolvetica text-[24px]">7K</p>
                    <p class="text-xs text-[#164483] mt-1 poppins">
                        Ice Cream yang dingin, lembut, an<br>
                        manis di tambah dengan topping<br>
                        yang melimpah, cocok banget<br>
                        sambil nonton agustusan
                    </p>
                </div>
            </div>

            <!-- Brownies -->
            <div class="flex items-center gap-6">
                <div class="text-right">
                    <h1 class="text-[#164483] font-bold text-2xl leading-tight coolvetica">Brownies<br>Bites</h1>
                    <p class="text-[#E72828] font-bold text-lg mt-1 coolvetica text-[24px]">10K</p>
                    <p class="text-xs text-[#164483] mt-1 poppins">
                        1 box Brownies lembut, pakai<br>
                        cokelat premium, manisnya pas,<br>
                        lumer dalam sekali gigitan
                    </p>
                </div>
                <img src="{{ asset('images/brownisbite.png') }}" alt="Brownies Bites"
                    class="w-36 h-36 object-contain text-shadow-2xl">
            </div>

        </div>
    </div>
    g
    <script>
        function countdownTimer(targetDateStr) {
            return {
                timeLeft: '',
                targetTime: new Date(targetDateStr).getTime(),
                startCountdown() {
                    this.updateTime()
                    setInterval(() => this.updateTime(), 1000);
                },
                updateTime() {
                    const now = new Date().getTime();
                    const distance = this.targetTime - now;

                    if (distance < 0) {
                        this.timeLeft = "00 : 00 : 00";
                        return;
                    }

                    const hours = String(Math.floor((distance / (1000 * 60 * 60)) % 24)).padStart(2, '0');
                    const minutes = String(Math.floor((distance / (1000 * 60)) % 60)).padStart(2, '0');
                    const seconds = String(Math.floor((distance / 1000) % 60)).padStart(2, '0');

                    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    const totalHours = days * 24 + parseInt(hours);

                    this.timeLeft = `${totalHours} : ${minutes} : ${seconds}`;
                }
            }
        }
    </script>

</x-template>
