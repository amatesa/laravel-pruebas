<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class imagenes_tipo extends Model
{
    use SoftDeletes;

    protected $table = 'imagenes_tipos';

    protected $fillable = ['nombre'];

}
