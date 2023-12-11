<?php

namespace App\Models;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang';
    protected $fillable = ['id','kategori_id','gambar','nama','deskripsi','harga','stok','berat','produksi','expired','status'];

    

}
