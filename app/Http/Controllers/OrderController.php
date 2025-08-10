<?php

namespace App\Http\Controllers;

use App\Models\Order; // <-- PERBAIKAN: Baris ini ditambahkan
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Carbon\Carbon;

class OrderController extends Controller
{
    /**
     * Memproses data dari halaman pre-order, menyimpannya di session,
     * dan mengarahkan ke halaman pembayaran.
     */
    public function processPreorder(Request $request)
    {
        // 1. Validasi hanya data pelanggan terlebih dahulu
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_phone' => 'required|string|max:15',
            // 'pickup_time_slot' => 'required|string',
            'products' => 'required|array', // Pastikan 'products' ada
        ]);

        // 2. Filter produk yang dipesan (jumlah > 0) dari request
        $orderedProducts = array_filter($request->products, function ($item) {
            return isset($item['quantity']) && $item['quantity'] > 0;
        });

        // 3. Jika tidak ada produk yang dipesan setelah difilter, kembalikan dengan pesan error
        if (empty($orderedProducts)) {
            return redirect()->back()
                ->withErrors(['products' => 'Anda harus memesan minimal satu item.'])
                ->withInput(); // Mengembalikan input sebelumnya
        }

        $grandTotal = 0;
        $orderProductsData = [];

        // 4. Proses hanya produk yang sudah difilter
        foreach ($orderedProducts as $item) {
            $product = Product::find($item['id']);
            // Pastikan produk ada di database untuk keamanan
            if ($product) {
                $grandTotal += $product->price * $item['quantity'];
                $orderProductsData[] = [
                    'id' => $product->id,
                    'name' => $product->name,
                    'quantity' => $item['quantity'],
                    'price' => $product->price
                ];
            }
        }

        $prefix = 'ORCA';
        $date = Carbon::now()->format('Ymd');
        $random = strtoupper(Str::random(4)); // 4 karakter acak
        $invoiceId = "{$prefix}-{$date}-{$random}";

        // Simpan data yang sudah valid di session
        Session::put('order_details', [
            'customer_name'  => $request->customer_name,
            'customer_phone' => $request->customer_phone,
            'invoice_id'     => $invoiceId, // ⬅ ditambahkan di sini
            'products'       => $orderProductsData,
            'grand_total'    => $grandTotal
        ]);

        return redirect()->route('payment.show');
    }

    /**
     * Menampilkan halaman pembayaran dengan data dari session.
     */
    public function showPayment()
    {
        $orderDetails = Session::get('order_details');

        if (!$orderDetails) {
            return redirect()->route('preorder');
        }

        return view('pembayaran', ['total' => $orderDetails['grand_total']]);
    }

    /**
     * Menyimpan pesanan ke database dan menampilkan halaman checkout.
     */
    public function store(Request $request)
    {
        $request->validate(['payment_method' => 'required|in:cash,qris']);
        $orderDetails = Session::get('order_details');

        if (!$orderDetails) {
            return redirect()->route('preorder');
        }

        // Gunakan transaction untuk memastikan semua query berhasil
        $order = DB::transaction(function () use ($request, $orderDetails) {
            $order = Order::create([
                'customer_name' => $orderDetails['customer_name'],
                'customer_phone' => $orderDetails['customer_phone'],
                'invoice_id' => $orderDetails['invoice_id'],
                'pickup_date' => now()->addDays(3)->toDateString(), // Contoh: Ambil 3 hari dari sekarang
                'grand_total' => $orderDetails['grand_total'],
                'payment_method' => $request->payment_method,
                'payment_status' => 'pending', // Asumsi langsung lunas
            ]);

            // Simpan detail produk ke tabel pivot 'order_product'
            foreach ($orderDetails['products'] as $item) {
                $order->products()->attach($item['id'], [
                    'quantity' => $item['quantity'],
                    'price_at_purchase' => $item['price']
                ]);
            }

            return $order;
        });

        // Hapus session setelah order berhasil dibuat
        Session::forget('order_details');

        return redirect()->route('checkout.show', $order->invoice_id);
    }

    /**
     * Menampilkan halaman struk/checkout.
     */
    public function showCheckout(Order $order)
    {
        // Muat relasi products agar bisa diakses di view
        $order->load('products');
        return view('checkout', compact('order'));
    }
}
