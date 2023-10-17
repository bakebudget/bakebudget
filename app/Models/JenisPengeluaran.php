<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisPengeluaran extends Model
{
    use HasFactory;
    protected $table = 'jenis_pengeluaran';
    protected $primaryKey = 'kode_jenis_pengeluaran';
    protected $keyType = 'string';
    protected $fillable = ['nama_jenis_pengeluaran'];
    public $timestamps = false;
}
