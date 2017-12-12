<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Usuarioperfil extends Model
{
    use SoftDeletes;

    protected $table = 'usuarioperfil';

    protected $fillable = ['nombre', 'genero', 'fechacumpleano', 'locationlat', 'locationlon',
    'about', 'userpic', 'user_id', 'edad', 'pais'];

    public function amigos()
    {
      return $this->belongsToMany(Usuarioperfil_Usuarioperfil::class, 'usuarioperfil_usuarioperfil', 'amigo', 'usuario');
    }

    public function productos()
    {
      return $this->hasMany(Producto::class, 'user_id');
    }

    public function transacciones()
    {
      return $this->hasMany(Transacciones::class, 'user_id');
    }

    public function imagenes()
    {
      return $this->hasMany(Imagenes::class, 'user_id');
    }

    public function posts()
    {
      return $this->hasMany(Post::class, 'user_id');
    }

    public function conversacion()
    {
      return $this->hasMany(Conversacion::class, 'user_id');
    }

}
