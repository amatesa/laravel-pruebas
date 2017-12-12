<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estadotransaccion extends Model
{
    use SoftDeletes;

      protected $table = 'estadotransaccion';

    protected $fillable = ['estado'];
}
