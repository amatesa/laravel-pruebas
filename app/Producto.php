<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use softDeletes;


    protected $table = 'productos';

    protected $fillable = ['nombre', 'descripcion', 'user_id', 'estado_id'];

    public function transaccion()
    {
      return $this->belongsToMany(Transaccion::class, 'producto_transaccion', 'producto', 'transaccion');
    }

    public function usuario()
    {
      return $this->belongsTo(Usuarioperfil::class, 'user_id');
    }

    public function imagenes()
    {
      return $this->hasMany(Imagenes::class, 'producto');
    }
}
