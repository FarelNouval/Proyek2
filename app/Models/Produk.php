<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk'; // Sesuaikan dengan nama tabel di database
    protected $primaryKey = 'kode_produk'; // Sesuaikan dengan nama primary key

    // Sesuaikan kolom-kolom yang dapat diisi
    protected $fillable = [
        'nama', 'harga', 'deskripsi', 'image',
    ];

    // Jika tidak menggunakan timestamp (created_at, updated_at)
    public $timestamps = false;

    // Jika ada relasi dengan tabel lain, dapat didefinisikan di sini
}
