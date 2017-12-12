<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaccion extends Model
{
    use softDeletes;

    protected $table = 'transaccion';

    protected $fillable = ['fecprestado', 'fecdevuelto','producto_id', 'plazo', 'valoracion','estado_id','user_id','receptor_id'];

    public function producto()
    {
      return $this->belongsToMany(Transaccion::class, 'producto_transaccion', 'transaccion', 'producto');
    }

    public function usuario()
    {
      return $this->belongsTo(Usuarioperfil::class, 'user_id');
    }

}
