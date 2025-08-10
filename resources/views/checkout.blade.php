<x-template>
    <div class="w-full max-w-md mx-auto px-4">
        <div class="w-[198px] my-8 flex justify-center items-center flex-col m-auto gap-8">
            <img src="{{ asset('images/InvoiceText.png') }}" alt="Bill Text">
            <p class="w-[257px] text-center poppins text-[15px] text-[#164483]">
                Makasih udah jajan di ORCA Eats! Jangan lupa simpan bill ini ya, tunjukin pas ambil pesanan
            </p>
        </div>

        {{-- Tambahkan id="invoiceCard" untuk target screenshot --}}
        <div id="invoiceCard"
            class="rounded-xl bg-[#FDF7F2] w-full border-[2.5px] border-[#164483] flex flex-col items-center p-4 text-[#164483]">

            {{-- Logo dan Judul --}}
            <div class="text-center mb-4">
                <img src="{{ asset('images/orcaeats.png') }}" alt="Logo" class="w-[74px] h-[74px] mx-auto">
                <p class="text-[15px] coolvetica font-semibold text-[#164483]">ORCA Eats</p>
                <p class="coolvetica text-[#164483] w-[219px]">
                    Kamu bisa mengambil pesanan kamu di hari
                    {{ \Carbon\Carbon::parse($order->pickup_date)->locale('id')->isoFormat('dddd') }}
                </p>
            </div>

            <hr class="border-dashed border-t-2 border-[#164483] w-full mb-3">

            {{-- Info Pemesan --}}
            <table class="text-[13px] font-medium poppins w-full leading-6 mb-2">
                <tr>
                    <td class="w-1/3">No. Invoice</td>
                    <td class="w-[10px]">:</td>
                    <td id="invoiceIdText">{{ $order->invoice_id }}</td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
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
                    <td>{{ \Carbon\Carbon::parse($order->pickup_date)->locale('id')->isoFormat('dddd, D MMMM YYYY') }}
                    </td>
                </tr>
                <tr>
                    <td>Pembayaran</td>
                    <td>:</td>
                    <td>{{ ucfirst($order->payment_method) }}</td>
                </tr>
            </table>

            <hr class="border-dashed border-t-2 border-[#164483] w-full my-3">

            {{-- List Produk --}}
            <table class="text-[13px] font-medium w-full leading-5 mb-2">
                @foreach ($order->products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td class="text-right">
                            Rp{{ number_format($product->pivot->price_at_purchase * $product->pivot->quantity, 0, ',', '.') }}
                        </td>
                    </tr>
                    <tr class="text-[#888888] text-sm">
                        <td>{{ $product->pivot->quantity }}x
                            <span>Rp{{ number_format($product->pivot->price_at_purchase, 0, ',', '.') }}</span>
                        </td>
                    </tr>
                @endforeach
            </table>

            <hr class="border-dashed border-t-2 border-[#164483] w-full my-3">

            <div class="flex flex-col w-full">
                <p class="text-left text-[12px] poppins">
                    {{ $order->products->sum('pivot.quantity') }} items
                </p>
                <h1 class="text-right text-[15px] font-semibold">
                    Grand Total : Rp{{ number_format($order->grand_total, 0, ',', '.') }}
                </h1>
            </div>
        </div>

        {{-- Tombol Manual Download --}}
        <div class="flex flex-col gap-4 items-center justify-center my-12">
            <button onclick="downloadInvoiceImage()"
                class="w-full max-w-xs h-[50px] coolvetica text-[20px] border-2 border-[#164483] bg-[#164483] text-white rounded-full">
                Download Invoice
            </button>

            <a href="{{ route('home') }}"
                class="w-full max-w-xs h-[50px] text-center coolvetica text-[22px] border-2 border-[#164483] bg-[#164483] text-white rounded-full">
                Selesai
            </a>
        </div>
    </div>

    {{-- Script html2canvas --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script>
        function saveInvoiceToLocalStorage(invoiceId) {
            // Ambil data lama
            let invoices = JSON.parse(localStorage.getItem('invoices') || '[]');

            // Cek apakah invoice ini sudah ada di daftar
            if (!invoices.includes(invoiceId)) {
                invoices.push(invoiceId);
                localStorage.setItem('invoices', JSON.stringify(invoices));
            }
        }

        async function downloadInvoiceImage() {
            const invoiceElement = document.getElementById('invoiceCard');
            const invoiceId = document.getElementById('invoiceIdText').innerText;

            // Simpan ke localStorage
            saveInvoiceToLocalStorage(invoiceId);

            // Render div jadi canvas
            const canvas = await html2canvas(invoiceElement, {
                scale: 2
            });
            const imgData = canvas.toDataURL('image/png');

            // Buat link download
            const link = document.createElement('a');
            link.href = imgData;
            link.download = invoiceId + '.png';
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }

        // Auto simpan invoice saat halaman dibuka
        window.onload = function() {
            const invoiceId = document.getElementById('invoiceIdText').innerText;
            saveInvoiceToLocalStorage(invoiceId);
        }
    </script>
</x-template>
