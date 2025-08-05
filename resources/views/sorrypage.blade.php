<x-template>
    <div class="min-h-screen bg-[#FFF8F0] flex flex-col items-center text-center">
        <!-- Main Message -->
        <div class="flex-1 flex flex-col justify-center items-center px-4 py-12">
            <h1 class="text-red-600 text-4xl font-bold mb-10 coolvetica" style="letter-spacing: 1px;">Mohon Maaf</h1>

            <img src="{{asset('images/sorry.png')}}" alt="Sorry">
            
            <p class="text-[#164483] font-semibold text-lg leading-relaxed mb-4 coolvetica" style="letter-spacing: 1px;">
                PO batch 1 sudah ditutup,<br>
                kami akan membuka<br>
                PO batch 2 pada hari
            </p>

            <div class="bg-red-600 text-white font-bold px-4 py-2 rounded mb-6" style="letter-spacing: 1px;">
                Kamis-Sabtu
            </div>

            <p class="text-[#164483] text-xl font-semibold coolvetica" style="letter-spacing: 1px;">Terima kasih</p>
        </div>
    </div>
</x-template>
