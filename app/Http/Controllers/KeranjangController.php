<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    public function index()
    {
        // Logika untuk menampilkan keranjang
        return view('keranjang.index'); // Sesuaikan dengan nama file blade Anda
    }
}