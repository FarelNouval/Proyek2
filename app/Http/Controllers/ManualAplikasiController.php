<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManualAplikasiController extends Controller
{
    public function index()
    {
        return view('manual_aplikasi');
    }
}
