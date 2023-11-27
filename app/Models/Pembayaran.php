<?php

namespace App\Models;

use App\Models\MetodePembayaran;
use App\Models\RencanaPengeluaran;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        'nama_penerima', 'nomor_rekening_penerima', 'nominal_pembayaran', 'id_pembayaran'
    ];
    public $timestamps = false;

    function metode_pembayaran(): BelongsTo
    {
        return $this->belongsTo(MetodePembayaran::class,'kode_metode','kode_metode');
    }

    function rencana_pengeluaran(): BelongsTo
    {
        return $this->belongsTo(RencanaPengeluaran::class,'id_pengeluaran','id_pengeluaran');
    }
}
