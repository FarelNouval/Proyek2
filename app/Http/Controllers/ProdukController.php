<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = DB::table('produk')->get();

        return view('produk', ['produk' => $produk]);
    }



    public function detail($kode_produk)
    {
        $produk = DB::table('produk')->where('kode_produk', $kode_produk)->first();

        return view('produk.detail', ['produk' => $produk]);
    }
}