<x-template>
    <div class="container mx-auto p-4 space-y-8" id="invoiceContainer">

        @foreach($orders as $order)
            <div class="rounded-xl bg-[#FDF7F2] w-full border-[2.5px] border-[#164483] flex flex-col items-center p-4 text-[#164483] invoiceCard" data-invoice-id="{{ $order->invoice_id }}" style="display:none;">
                {{-- Konten invoice sama seperti sebelumnya --}}
                <div class="text-center mb-4">
                    <img src="{{ asset('images/orcaeats.png') }}" alt="Logo" class="w-[74px] h-[74px] mx-auto">
                    <p class="text-[15px] coolvetica font-semibold text-[#164483]">ORCA Eats</p>
                    <p class="coolvetica text-[#164483] w-[219px]">
                        Kamu bisa mengambil pesanan kamu di hari
                        {{ \Carbon\Carbon::parse($order->pickup_date)->locale('id')->isoFormat('dddd') }}
                    </p>
                </div>

                <hr class="border-dashed border-t-2 border-[#164483] w-full mb-3">

                <table class="text-[13px] font-medium poppins w-full leading-6 mb-2">
                    <tr>
                        <td class="w-1/3">No. Invoice</td>
                        <td class="w-[10px]">:</td>
                        <td class="invoiceIdText">{{ $order->invoice_id }}</td>
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
                        <td>{{ \Carbon\Carbon::parse($order->pickup_date)->locale('id')->isoFormat('dddd, D MMMM YYYY') }}</td>
                    </tr>
                    <tr>
                        <td>Pembayaran</td>
                        <td>:</td>
                        <td>{{ ucfirst($order->payment_method) }}</td>
                    </tr>
                </table>

                <hr class="border-dashed border-t-2 border-[#164483] w-full my-3">

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

                <button
                    onclick="downloadInvoiceImage('{{ $order->invoice_id }}')"
                    class="mt-4 px-4 py-2 bg-[#164483] text-white rounded hover:bg-[#0f306c]">
                    Download Invoice
                </button>
            </div>
        @endforeach

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script>
        function saveInvoiceToLocalStorage(invoiceId) {
            let invoices = JSON.parse(localStorage.getItem('invoices') || '[]');
            if (!invoices.includes(invoiceId)) {
                invoices.push(invoiceId);
                localStorage.setItem('invoices', JSON.stringify(invoices));
            }
        }

        async function downloadInvoiceImage(invoiceId) {
            const invoiceElement = document.querySelector(`.invoiceCard[data-invoice-id="${invoiceId}"]`);
            if (!invoiceElement) {
                alert('Invoice tidak ditemukan');
                return;
            }

            saveInvoiceToLocalStorage(invoiceId);

            const canvas = await html2canvas(invoiceElement, { scale: 2 });
            const imgData = canvas.toDataURL('image/png');

            const link = document.createElement('a');
            link.href = imgData;
            link.download = invoiceId + '.png';
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }

        window.onload = function() {
            let storedInvoices = JSON.parse(localStorage.getItem('invoices') || '[]');
            // Tampilkan hanya invoice yang ada di localStorage
            document.querySelectorAll('.invoiceCard').forEach(card => {
                let id = card.getAttribute('data-invoice-id');
                if(storedInvoices.includes(id)) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        }
    </script>
</x-template>
