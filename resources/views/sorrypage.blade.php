<x-template>
    <div class="min-h-screen bg-[#FFF8F0] flex flex-col items-center text-center">
        <!-- Main Message -->
        <div class="flex-1 flex flex-col justify-center items-center px-4 py-12">
            <h1 class="text-red-600 text-4xl font-bold mb-10 coolvetica" style="letter-spacing: 1px;">Mohon Maaf</h1>

            <img src="{{ asset('images/sorry.png') }}" alt="Sorry">

            <p class="text-[#164483] font-semibold text-lg leading-relaxed mb-4 coolvetica" style="letter-spacing: 1px;">
                {{ $previousPo?->nama_po ?? 'PO sebelumnya' }} sudah ditutup,<br>
                kami akan membuka<br>
                PO berikutnya pada hari
            </p>

            @if ($nextPo)
                @php
                    $openDay = \Carbon\Carbon::parse($nextPo->open_po)->locale('id')->translatedFormat('l');
                    $closeDay = \Carbon\Carbon::parse($nextPo->close_po)->locale('id')->translatedFormat('l');
                @endphp

                <div class="bg-red-600 text-white font-bold px-4 py-2 rounded mb-6" style="letter-spacing: 1px;">
                    {{ $openDay }} - {{ $closeDay }}
                </div>
            @else
                <div class="bg-red-600 text-white font-bold px-4 py-2 rounded mb-6" style="letter-spacing: 1px;">
                    Belum ada jadwal PO berikutnya
                </div>
            @endif

            <p class="text-[#164483] text-xl font-semibold coolvetica" style="letter-spacing: 1px;">Terima kasih</p>
            <a href="/" class="bg-[#164483] text-white text-xl font-semibold coolvetica px-4 py-2" style="letter-spacing: 1px;">Beranda</a>

        </div>
    </div>
</x-template>
