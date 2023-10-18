<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Pembayaran
 *
 * @property string $id_pembayaran
 * @property string $kode_metode
 * @property string $id_pengeluaran
 * @property string $bukti_pembayaran
 * @property string $tanggal_pembayaran
 * @property string $nama_penerima
 * @property string $nomor_rekening_penerima
 * @property int $nominal
 * @method static \Database\Factories\PembayaranFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Pembayaran newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pembayaran newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pembayaran query()
 * @method static \Illuminate\Database\Eloquent\Builder|Pembayaran whereBuktiPembayaran($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pembayaran whereIdPembayaran($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pembayaran whereIdPengeluaran($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pembayaran whereKodeMetode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pembayaran whereNamaPenerima($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pembayaran whereNominal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pembayaran whereNomorRekeningPenerima($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pembayaran whereTanggalPembayaran($value)
 * @mixin \Eloquent
 */
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
