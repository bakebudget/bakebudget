<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kue extends Model
{
    use HasFactory;
    protected $table = 'kue';
    protected $primaryKey = 'kode_kue';
    protected $keyType = 'string';
    protected $fillable = ['nama_kue', 'gambar_kue', 'stok_kue', 'harga_kue'];
    public $timestamps = false;
}
