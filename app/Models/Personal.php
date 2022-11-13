<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;


    protected $table = 'personal';

    public function User(){

        return $this->hasOne(User::class, 'id_pesonal');

    }

    public function Tipo_Personal(){

        return $this->belongsTo(TipoPersonal::class, 'id_tipo_personal');

    }

    public function Producto(){

        return $this ->hasOne(Producto::class, 'id_producto');
    }

    public function Entrada(){

        return $this->hasOne(Entrada::class, 'id_entrada');
    }

    public function Salida(){

        return $this->hasOne(Salida::class, 'id_salida');
    }
}

