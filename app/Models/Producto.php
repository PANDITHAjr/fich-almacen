<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'producto';

    // Relación con TipoProducto
    public function Tipo_Producto()
    {
        return $this->belongsTo(TipoProducto::class, 'id_tipo_producto');
    }

    // Relación con Entradas
    public function Entradas()
    {
        return $this->hasMany(Entrada::class, 'id_producto');
    }

    // Relación con Salidas
    public function Salidas()
    {
        return $this->hasMany(Salida::class, 'id_producto');
    }
}
