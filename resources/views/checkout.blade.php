<x-template>
    <div class="w-[56px] my-8 flex justify-center items-center flex-col m-auto gap-8">
        <img src="{{ asset('images/billtext.png') }}" alt="Bill Text">
        <p class="w-[257px] text-center poppins text-[15px] poppins">Makasih udah jajan di ORCA Eats! Jangan lupa simpan
            bill ini
            ya, tunjukin pas ambil pesanan</p>
    </div>

    <div
        class="rounded-xl bg-[#FDF7F2] w-[320px] border-[2.5px] border-[#164483] flex flex-col items-center mx-auto p-4 text-[#164483]">
        {{-- Logo dan Judul --}}
        <div class="text-center mb-4">
            <img src="{{ asset('images/Logo1.png') }}" alt="Logo" class="w-[74px] h-[74px] mx-auto">
            <p class="text-[15px] coolvetica font-semibold">ORCA Eats</p>
        </div>

        {{-- Garis putus-putus --}}
        <hr class="border-dashed border-t-2 border-[#164483] w-full mb-3">

        {{-- Info Pemesan --}}
        <table class="text-[13px] font-medium poppins w-full leading-6 mb-2">
            <tr>
                <td class="w-1/3">Nama</td>
                <td class="w-[10px]">:</td>
                <td>Alfajar Tri</td>
            </tr>
            <tr>
                <td>NO. HP</td>
                <td>:</td>
                <td>081287217886</td>
            </tr>
            <tr>
                <td>Tanggal Pesan</td>
                <td>:</td>
                <td>02-08-2025 15:17</td>
            </tr>
            <tr>
                <td>Tanggal Ambil</td>
                <td>:</td>
                <td>Rabu, 6 Agustus 2025</td>
            </tr>
            <tr>
                <td>Pembayaran</td>
                <td>:</td>
                <td>QRIS</td>
            </tr>
        </table>

        <hr class="border-dashed border-t-2 border-[#164483] w-full my-3">

        {{-- List Produk --}}
        <table class="text-[13px] font-medium w-full leading-5 mb-2">
            <tr>
                <td>Japanese Coffee Jelly</td>
                <td class="text-right">Rp10.000</td>
            </tr>
            <tr class="text-[#888888] text-sm">
                <td>2x Rp5.000</td>
            </tr>
            <tr>
                <td>Apple Fritters</td>
                <td class="text-right">Rp7.000</td>
            </tr>
            <tr class="text-[#888888] text-sm">
                <td>1x <span>Rp7.000</span></td>
            </tr>
        </table>

        <hr class="border-dashed border-t-2 border-[#164483] w-full my-3">

        <div class="flex flex-col w-full">
            <p class="text-left text-[12px] poppins">3 items</p>
            <h1 class="text-right text-[15px] font-semibold">Grand Total : Rp17.000</h1>
        </div>
    </div>

    <div class="flex items-center text-center justify-center my-12">
        <a href="/"
            class="w-[300px] h-[50px] coolvetica text-[22px] border-2 border-[#164483] bg-[#164483] text-white active:bg-transparent active:text-[#164483] rounded-full flex items-center justify-center">
            Selesai
        </a>
    </div>


</x-template>
