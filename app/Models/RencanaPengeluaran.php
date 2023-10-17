<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RencanaPengeluaran extends Model
{
    use HasFactory;
    protected $table = 'rencana_pengeluaran';
    protected $primaryKey = 'id_pengeluaran';
    protected $keyType = 'string';
    protected $fillable = ['kode_jenis_pengeluaran', 'status', 'deskripsi'];
    public $timestamps = false;
}
