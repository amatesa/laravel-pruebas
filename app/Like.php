<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
  protected $fillable = ['user_id', 'post_id', 'like'];

    public function user()
    {
      return $this->belongsTo(Usuarioperfil::class, 'user_id');
    }
    public function post()
    {
      return $this->belongsTo(Post::class, 'post_id');
    }
}
