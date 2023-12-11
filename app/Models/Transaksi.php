<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $fillable = ['id','no_pesan','id_pelanggan','tgl_pesan','catatan','total_harga','tgl_bayar','metode'];

}
