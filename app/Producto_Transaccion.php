<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto_Transaccion extends Model
{
    use SoftDeletes;

    protected $table = 'producto_transaccion';

    protected $fillable = ['transaccion', 'producto'];

}
