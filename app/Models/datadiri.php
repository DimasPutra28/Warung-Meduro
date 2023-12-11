<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datadiri extends Model
{
    use HasFactory;
    protected $table = 'datadiri';
    protected $fillable = ['id','nama_apps','nohp_apps','email_apps','alamat_apps','logo'];


}
