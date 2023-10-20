<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogAplikasi extends Model
{
    use HasFactory;
    protected $table = 'log_aplikasi';
    protected $primaryKey = 'id_log';
    public $timestamps = false;
    protected $fillable = ['log'];
}
