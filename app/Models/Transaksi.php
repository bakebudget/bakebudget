<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $primarykey = 'id_transaksi';
    protected $keyType = 'string';
    protected $fillable = ['kode_metode', 'tanggal', 'total'];
    public $timestamps = false;
}
