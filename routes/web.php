<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\ManualAplikasiController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KeranjangControllerController;
use App\Http\Controllers\IndexController;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::view('/', 'index')->name('home');

Route::get('/home', function(){return view('view_home');});

//Route Tentang Kami
Route::get('/tentang-kami', [TentangKamiController::class, 'index'])->name('tentang-kami');

//Route Produk
Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
Route::get('/produk/{produk}', [ProdukController::class, 'detail'])->name('produk.detail');
Route::get('/', [IndexController::class, 'index'])->name('home');
//Route Manual Aplikasi
Route::get('/manual-aplikasi', [ManualAplikasiController::class, 'index'])->name('manual-aplikasi');

//Keranjang
Route::get('/keranjang', 'KeranjangController@index')->name('keranjang.index');