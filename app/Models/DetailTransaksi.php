<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\DetailTransaksi
 *
 * @property string $id_detail_transaksi
 * @property string $id_transaksi
 * @property string $kode_kue
 * @property int $quantity
 * @property int $subtotal
 * @method static \Database\Factories\DetailTransaksiFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|DetailTransaksi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DetailTransaksi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DetailTransaksi query()
 * @method static \Illuminate\Database\Eloquent\Builder|DetailTransaksi whereIdDetailTransaksi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DetailTransaksi whereIdTransaksi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DetailTransaksi whereKodeKue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DetailTransaksi whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DetailTransaksi whereSubtotal($value)
 * @mixin \Eloquent
 */
class DetailTransaksi extends Model
{
    use HasFactory;
    protected $table = 'detail_transaksi';
    protected $primaryKey = 'id_detail_transaksi';
    protected $fillable = ['id_transaksi', 'kode_kue', 'quantity', 'subtotal'];
    protected $keyType = 'string';
    public $timestamps = false;
}
