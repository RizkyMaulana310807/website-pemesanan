<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\WaktuPo;

class PageController extends Controller
{
    /**
     * Menampilkan halaman utama dengan semua menu.
     */
    public function index()
    {
        $products = Product::all();
        $now = Carbon::now();
        $today = Carbon::today();

        // PO sebelumnya (terakhir yang sudah lewat)
        $previousPo = WaktuPo::whereDate('close_po', '<', $today)
            ->orderBy('close_po', 'desc')
            ->first();

        // PO berikutnya (yang akan datang)
        $nextPo = WaktuPo::whereDate('open_po', '>', $today)
            ->orderBy('open_po', 'asc')
            ->first();

        return view('mainpage', compact('products', 'now', 'previousPo', 'nextPo'));
    }

    /**
     * Menampilkan halaman pre-order dengan menu yang tersedia.
     */
    public function preorder()
    {
        $waktuPo = WaktuPo::latest()->first();

        // if (!$waktuPo || Carbon::today()->lt($waktuPo->open_po) || Carbon::today()->gt($waktuPo->close_po)) {
        //     return redirect('/sorry');
        // }

        // Hanya ambil produk yang 'unlocked_at'-nya sudah lewat atau null
        $availableProducts = Product::where('unlocked_at', '<=', Carbon::now())
            ->orWhereNull('unlocked_at')
            ->get();

        return view('popage', compact('availableProducts'));
    }
}
