<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
 Route::get('/clear-optimize', function () {
        \Artisan::call('optimize:clear');
        return 'Laravel optimized cache cleared!';
    });
// Rute untuk menampilkan halaman
Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/preorder', [PageController::class, 'preorder'])->name('preorder'); //

// Rute untuk alur pemesanan
Route::post('/preorder/process', [OrderController::class, 'processPreorder'])->name('preorder.process');
Route::get('/pembayaran', [OrderController::class, 'showPayment'])->name('payment.show'); //
Route::post('/checkout', [OrderController::class, 'store'])->name('checkout.store'); //
Route::get('/checkout/{order}', [OrderController::class, 'showCheckout'])->name('checkout.show'); //
Route::get('/debug-images', function () {
    $products = \App\Models\Product::all();
    return view('debug-images', ['products' => $products]);
});
