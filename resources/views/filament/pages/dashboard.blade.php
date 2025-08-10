<x-filament::page>
    <h2 class="text-2xl font-bold mb-6">Dashboard Pemasukan</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <!-- Card Total Paid -->
        <div class="p-4 bg-white dark:bg-gray-800 rounded-lg shadow border border-gray-200 dark:border-gray-700 hover:shadow-lg transition">
            <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400">Total Pembayaran Sudah Paid</h3>
            <p class="mt-2 text-2xl font-bold text-green-500">
                Rp{{ number_format($this->getTotalPaid(), 0, ',', '.') }}
            </p>
        </div>

        <!-- Card Total Pending -->
        <div class="p-4 bg-white dark:bg-gray-800 rounded-lg shadow border border-gray-200 dark:border-gray-700 hover:shadow-lg transition">
            <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400">Total Pembayaran Pending</h3>
            <p class="mt-2 text-2xl font-bold text-yellow-500">
                Rp{{ number_format($this->getTotalPending(), 0, ',', '.') }}
            </p>
        </div>

        <!-- Card Info Tambahan -->
        <div class="p-4 bg-white dark:bg-gray-800 rounded-lg shadow border border-gray-200 dark:border-gray-700 hover:shadow-lg transition">
            <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400">Total Order</h3>
            <p class="mt-2 text-2xl font-bold text-blue-500">
                {{ \App\Models\Order::count() }}
            </p>
        </div>
    </div>

    <!-- Card List Metode Pembayaran -->
    <div class="p-4 bg-white dark:bg-gray-800 rounded-lg shadow border border-gray-200 dark:border-gray-700">
        <h3 class="text-lg font-semibold mb-4 text-black dark:text-white">Pemasukan Berdasarkan Metode Pembayaran (Paid)</h3>
        @if (count($this->getPaidByMethod()) > 0)
            <ul class="space-y-2 text-black dark:text-white">
                @foreach ($this->getPaidByMethod() as $method => $total)
                    <li class="flex justify-between border-b border-gray-200 dark:border-gray-700 pb-1">
                        <span>{{ ucfirst($method) }}</span>
                        <span class="font-semibold">Rp{{ number_format($total, 0, ',', '.') }}</span>
                    </li>
                @endforeach
            </ul>
        @else
            <p class="text-gray-500 dark:text-gray-400">Tidak ada data pemasukan dari metode pembayaran.</p>
        @endif
    </div>
</x-filament::page>
