<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('mainpage');
});
Route::get('/preorder', function () {
    return view('popage');
});

Route::get('/pembayaran', function () {
    return view('pembayaran');
});

Route::get('/checkout', function(){
    return view('checkout');
});