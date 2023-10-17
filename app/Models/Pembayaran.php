<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $table = 'pembayaran';
    protected $primaryKey = 'id_pembayaran';
    protected $keyType = 'string';
    protected $fillable = [
        'kode_metode', 'id_pengeluaran', 'bukti_pembayaran', 'tanggal_pembayaran',
        'nama_penerima', 'nomor_rekening_penerima', 'nominal'
    ];
    public $timestamps = false;
}
