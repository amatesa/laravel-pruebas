<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Postcomentarios extends Model
{
    use SoftDeletes;

    protected $table = 'postcomentarios';

    protected $fillable = ['comentario', 'user_id', 'post'];

    public function usuario()
    {
      return $this->belongsTo(Usuarioperfil::class, 'user_id');
    }

    public function post()
    {
      return $this->belongsTo(Post::class, 'post');
    }

}
