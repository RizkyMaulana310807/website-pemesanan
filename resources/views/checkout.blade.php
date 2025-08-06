<x-template>
    <div class="w-full max-w-md mx-auto px-4">
        <div class="w-[198px] my-8 flex justify-center items-center flex-col m-auto gap-8">
            <img src="{{ asset('images/InvoiceText.png') }}" alt="Bill Text">
            <p class="w-[257px] text-center poppins text-[15px] text-[#164483]">Makasih udah jajan di ORCA Eats! Jangan lupa simpan
                bill ini ya, tunjukin pas ambil pesanan</p>
        </div>

        <div
            class="rounded-xl bg-[#FDF7F2] w-full border-[2.5px] border-[#164483] flex flex-col items-center p-4 text-[#164483]">
            {{-- Logo dan Judul --}}
            <div class="text-center mb-4">
                <img src="{{ asset('images/orcaeats.png') }}" alt="Logo" class="w-[74px] h-[74px] mx-auto">
                <p class="text-[15px] coolvetica font-semibold text-[#164483]">ORCA Eats</p>
                <p class="coolvetica text-[#164483] w-[219px]">Kamu bisa mengambil pesanan kamu di hari {{ \Carbon\Carbon::parse($order->pickup_date)->locale('id')->isoFormat('dddd') }}</p>
            </div>

            {{-- Garis putus-putus --}}
            <hr class="border-dashed border-t-2 border-[#164483] w-full mb-3">

            {{-- Info Pemesan (Dinamis) --}}
            <table class="text-[13px] font-medium poppins w-full leading-6 mb-2">
                <tr>
                    <td class="w-1/3">Nama</td>
                    <td class="w-[10px]">:</td>
                    <td>{{ $order->customer_name }}</td>
                </tr>
                <tr>
                    <td>NO. HP</td>
                    <td>:</td>
                    <td>{{ $order->customer_phone }}</td>
                </tr>
                <tr>
                    <td>Tanggal Pesan</td>
                    <td>:</td>
                    <td>{{ $order->created_at->format('d-m-Y H:i') }}</td>
                </tr>
                <tr>
                    <td>Tanggal Ambil</td>
                    <td>:</td>
                    {{-- PERUBAHAN: Menambahkan locale('id') untuk format Bahasa Indonesia --}}
                    <td>{{ \Carbon\Carbon::parse($order->pickup_date)->locale('id')->isoFormat('dddd, D MMMM YYYY') }}</td>
                </tr>
                <tr>
                    <td>Pembayaran</td>
                    <td>:</td>
                    <td>{{ ucfirst($order->payment_method) }}</td>
                </tr>
            </table>

            <hr class="border-dashed border-t-2 border-[#164483] w-full my-3">

            {{-- List Produk (Dinamis) --}}
            <table class="text-[13px] font-medium w-full leading-5 mb-2">
                {{-- Loop untuk setiap produk dalam pesanan --}}
                @foreach($order->products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td class="text-right">Rp{{ number_format($product->pivot->price_at_purchase * $product->pivot->quantity, 0, ',', '.') }}</td>
                    </tr>
                    <tr class="text-[#888888] text-sm">
                        <td>{{ $product->pivot->quantity }}x <span>Rp{{ number_format($product->pivot->price_at_purchase, 0, ',', '.') }}</span></td>
                    </tr>
                @endforeach
            </table>

            <hr class="border-dashed border-t-2 border-[#164483] w-full my-3">

            <div class="flex flex-col w-full">
                <p class="text-left text-[12px] poppins">{{ $order->products->sum('pivot.quantity') }} items</p>
                <h1 class="text-right text-[15px] font-semibold">Grand Total : Rp{{ number_format($order->grand_total, 0, ',', '.') }}</h1>
            </div>
        </div>

        <div class="flex items-center text-center justify-center my-12">
            {{-- Tombol untuk kembali ke halaman utama --}}
            <a href="{{ route('home') }}"
                class="w-full max-w-xs h-[50px] coolvetica text-[22px] border-2 border-[#164483] bg-[#164483] text-white active:bg-transparent active:text-[#164483] rounded-full flex items-center justify-center">
                Selesai
            </a>
        </div>
    </div>
</x-template>
