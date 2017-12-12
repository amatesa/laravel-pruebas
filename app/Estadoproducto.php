<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estadoproducto extends Model
{
    use SoftDeletes;

    protected $table = 'estadoproducto';

    protected $fillable = ['estado'];

}
