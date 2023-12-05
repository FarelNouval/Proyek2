<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home()
    {
        $produk = DB::table('produk')->get();

        return view('index', ['produk' => $produk]);
    }
}
