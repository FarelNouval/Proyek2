<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\ManualAplikasiController;
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
Route::get('/', function (){
    return view('index');
});

Route::get('/home', function(){return view('view_home');});
Route::get('/tentang-kami', [TentangKamiController::class, 'index'])->name('tentang-kami');
Route::get('/manual-aplikasi', [ManualAplikasiController::class, 'index'])->name('manual-aplikasi');