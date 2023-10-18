<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Transaksi
 *
 * @property string $id_transaksi
 * @property string $kode_metode
 * @property string $tanggal_transaksi
 * @property int $total
 * @method static \Database\Factories\TransaksiFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi query()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi whereIdTransaksi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi whereKodeMetode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi whereTanggalTransaksi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi whereTotal($value)
 * @mixin \Eloquent
 */
class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $primarykey = 'id_transaksi';
    protected $keyType = 'string';
    protected $fillable = ['kode_metode', 'tanggal', 'total'];
    public $timestamps = false;
}
