<x-template>
    {{-- Menggunakan Alpine.js untuk mengelola state metode pembayaran --}}
    <div x-data="{ metode: '' }">

        {{-- Form ini akan mengirim data ke OrderController@store --}}
        <form action="{{ route('checkout.store') }}" method="POST">
            @csrf
            <div class="my-8 flex items-center justify-center">
                <img src="{{ asset('images/pembayaran.png') }}" alt="pembayaran" class="w-[219px]">
            </div>

            <div class="flex items-center justify-center flex-col gap-4 my-8">
                <h1 class="poppins text-[20px] font-semibold text-[#164483]">Kamu harus membayar</h1>
                <h1
                    class="poppins text-[22px] bg-[#E72828] rounded-lg px-6 py-2 w-auto h-auto font-semibold text-white flex items-center justify-center">
                    {{-- Menampilkan total harga dari controller --}}
                    Rp{{ number_format($total, 0, ',', '.') }}
                </h1>
            </div>

            {{-- Input tersembunyi untuk menyimpan metode pembayaran yang dipilih --}}
            <input type="hidden" name="payment_method" x-model="metode">
            <div class="flex items-center gap-4 justify-center">
                {{-- Tombol diubah menjadi type="button" agar tidak langsung submit form --}}
                <button type="button" @click="metode = 'cash'"
                    :class="metode === 'cash' ? 'bg-[#E72828] text-white' : 'text-[#E72828]'"
                    class="w-[136px] h-[40px] border-2 border-[#E72828] rounded-full coolvetica transition">
                    Cash (Tunai)
                </button>
                <button type="button" @click="metode = 'qris'"
                    :class="metode === 'qris' ? 'bg-[#164483] text-white' : 'text-[#164483]'"
                    class="w-[136px] h-[40px] border-2 border-[#164483] rounded-full coolvetica transition">
                    Qris (Scan QR)
                </button>
            </div>

            <div class="my-8 w-[322px] flex mx-auto">
                <p class="text-center text-[#164483]">
                    <span class="text-[#E72828] poppins text-[14px]">Notes:</span><br>
                    Bukti pembayarannya jangan sampai ilang! Buat ditunjukin pas ambil pesanan nanti
                </p>
            </div>

            {{-- Bagian ini akan muncul jika metode QRIS dipilih --}}
            <div x-show="metode === 'qris'" x-transition class="flex items-center justify-center flex-col gap-4">
                <img src="{{ asset('images/qris.png') }}" alt="qris" class="w-[244px]">
                <a href="{{ asset('images/qris.png') }}" download="qris_pembayaran.png"
                    class="poppins text-[15px] bg-[#E72828] px-6 py-2 rounded-lg text-white font-medium active:bg-transparent active:text-[#E72828] border-2 border-[#E72828]">
                    Unduh QR
                </a>
            </div>
            <div class="flex items-center text-center justify-center my-12">
                {{-- Tombol submit ini akan nonaktif jika belum ada metode yang dipilih --}}
                <button type="submit" :disabled="!metode" :class="{ 'opacity-50 cursor-not-allowed': !metode }"
                    class="w-[300px] h-[50px] coolvetica text-[22px] border-2 border-[#164483] bg-[#164483] text-white active:bg-transparent active:text-[#164483] rounded-full flex items-center justify-center transition">
                    Selanjutnya
                </button>
            </div>
        </form>
    </div>
</x-template>
