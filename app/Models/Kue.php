<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Kue
 *
 * @property string $kode_kue
 * @property string $nama_kue
 * @property string $gambar_kue
 * @property int $stok_kue
 * @property int $harga_kue
 * @method static \Database\Factories\KueFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Kue newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Kue newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Kue query()
 * @method static \Illuminate\Database\Eloquent\Builder|Kue whereGambarKue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kue whereHargaKue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kue whereKodeKue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kue whereNamaKue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kue whereStokKue($value)
 * @mixin \Eloquent
 */
class Kue extends Model
{
    use HasFactory;
    protected $table = 'kue';
    protected $primaryKey = 'kode_kue';
    protected $keyType = 'string';
    protected $fillable = ['kode_kue', 'nama_kue', 'gambar_kue', 'stok_kue', 'harga_kue'];
    public $timestamps = false;
}
