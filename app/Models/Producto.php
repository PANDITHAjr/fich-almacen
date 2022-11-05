<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;


    protected $table = 'producto';


    public function Personal(){

        return $this ->belongsTo(Personal::class, 'id_personal');
    }

    public function Tipo_Producto(){

        return $this ->belongsTo(Tipo_Producto::class, 'id_tipo_producto');
    }

    public function Entrada(){

        return $this->belongsTo(Entrada::class, 'id_entrada');
    }

    public function Salida(){

        return $this->belongsTo(Salida::class, 'id_salida');
    }
}
