<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PageController extends Controller
{
    /**
     * Menampilkan halaman utama dengan semua menu.
     */
    public function index()
    {
        $products = Product::all();
        // Menggunakan waktu saat ini (3 Agustus 2025) untuk mengecek menu yang terkunci
        $now = Carbon::now();
        return view('mainpage', compact('products', 'now'));
    }

    /**
     * Menampilkan halaman pre-order dengan menu yang tersedia.
     */
    public function preorder()
    {
        // Hanya ambil produk yang 'unlocked_at'-nya sudah lewat atau null
        $availableProducts = Product::where('unlocked_at', '<=', Carbon::now())
                                    ->orWhereNull('unlocked_at')
                                    ->get();

        return view('popage', compact('availableProducts'));
    }
}
