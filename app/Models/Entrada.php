<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    use HasFactory;

    protected $table = 'entrada';


    public function Producto()
    {

        return $this->belongsTo(Producto::class, 'id_producto');
    }

    public function Personal()
    {

        return $this->belongsTo(Personal::class, 'id_personal');
    }
    public function Salida(){

        return $this->belongsTo(Salida::class, 'id_salida');
    }
}
