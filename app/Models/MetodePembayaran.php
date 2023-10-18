<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\MetodePembayaran
 *
 * @method static \Database\Factories\MetodePembayaranFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|MetodePembayaran newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MetodePembayaran newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MetodePembayaran query()
 * @mixin \Eloquent
 */
class MetodePembayaran extends Model
{
    use HasFactory;
    protected $primaryKey = 'kode_metode';
    protected $keyType = 'string';
    protected $fillable = ['nama_metode'];
    public $timestamps = false;
}
