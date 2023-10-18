<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\JenisPengeluaran
 *
 * @property string $kode_jenis_pengeluaran
 * @property string $nama_jenis_pengeluaran
 * @method static \Database\Factories\JenisPengeluaranFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|JenisPengeluaran newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JenisPengeluaran newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JenisPengeluaran query()
 * @method static \Illuminate\Database\Eloquent\Builder|JenisPengeluaran whereKodeJenisPengeluaran($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JenisPengeluaran whereNamaJenisPengeluaran($value)
 * @mixin \Eloquent
 */
class JenisPengeluaran extends Model
{
    use HasFactory;
    protected $table = 'jenis_pengeluaran';
    protected $primaryKey = 'kode_jenis_pengeluaran';
    protected $keyType = 'string';
    protected $fillable = ['nama_jenis_pengeluaran'];
    public $timestamps = false;
}
