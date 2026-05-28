<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListProdukController;

Route::get('/list-produk', [ListProdukController::class, 'show']);

Route::post('/simpan-produk', [ListProdukController::class, 'simpan'])
    ->name('produk.simpan');

Route::get('/', function () {
    return view('welcome');
});
