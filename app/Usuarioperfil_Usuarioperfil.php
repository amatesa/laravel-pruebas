<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuarioperfil_Usuarioperfil extends Model
{
  use SoftDeletes;

  protected $table = 'usuarioperfil_usuarioperfil';

  protected $fillable = ['user_id', 'amigo'];

}
