<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    protected $fillable = ['kode_jenis_pengeluaran', 'status', 'deskripsi'];
    public $timestamps = false;
}
