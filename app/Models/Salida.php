<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salida extends Model
{
    use HasFactory;

    protected $table = 'salida';

    public function Personal()
    {
        return $this->belongsTo(Personal::class, 'id_personal');
    }

    public function Departamento()
    {
        return $this->belongsTo(Departamento::class, 'id_departamento');
    }

    public function Producto()
    {
        return $this->belongsTo(Producto::class, 'id_producto'); // Ajusta los nombres de las columnas si es necesario
    }


    public function Entrada()
    {
        return $this->belongsTo(Entrada::class, 'id_entrada');
    }

}
