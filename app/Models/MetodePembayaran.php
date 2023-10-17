<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetodePembayaran extends Model
{
    use HasFactory;
    protected $primaryKey = 'kode_metode';
    protected $keyType = 'string';
    protected $fillable = ['nama_metode'];
    public $timestamps = false;
}
