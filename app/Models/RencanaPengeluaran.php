<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\JenisPengeluaran;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\RencanaPengeluaran
 *
 * @property string $id_pengeluaran
 * @property string $kode_jenis_pengeluaran
 * @property string $status
 * @property string $deskripsi
 * @method static \Database\Factories\RencanaPengeluaranFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|RencanaPengeluaran newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RencanaPengeluaran newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RencanaPengeluaran query()
 * @method static \Illuminate\Database\Eloquent\Builder|RencanaPengeluaran whereDeskripsi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RencanaPengeluaran whereIdPengeluaran($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RencanaPengeluaran whereKodeJenisPengeluaran($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RencanaPengeluaran whereStatus($value)
 * @mixin \Eloquent
 */
class RencanaPengeluaran extends Model
{
    use HasFactory;
    protected $table = 'rencana_pengeluaran';
    protected $primaryKey = 'id_pengeluaran';
    protected $keyType = 'string';
    protected $fillable = ['id_pengeluaran','kode_jenis_pengeluaran', 'status', 'deskripsi', 'nominal'];
    public $timestamps = false;

    function jenis_pengeluaran(): BelongsTo
    {
        return $this->belongsTo(JenisPengeluaran::class,'kode_jenis_pengeluaran','kode_jenis_pengeluaran');
    }
}
