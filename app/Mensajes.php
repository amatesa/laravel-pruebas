<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mensajes extends Model
{
    use SoftDeletes;

    protected $table = 'mensajes';

    protected $fillable = ['contenido', 'conversacion_id', 'imagenes'];

    public function conversacion()
    {
      return $this->belongsTo(Conversacion::class, 'conversacion_id');
    }

    public function Imagenes()
    {
      return $this->belongsTo(Imagenes::class, 'imagenes');
    }

}
