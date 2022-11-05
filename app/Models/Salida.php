<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class salida extends Model
{
    use HasFactory;

    protected $table = 'salida';

    public function Personal(){

        return $this->belongsTo(Personal::class, 'id_personal');

    }

    public function Departamento(){

        return $this->belongsTo(Departamento::class, 'id_departamento');

    }

    public function Producto(){

        return $this->hasMany(Producto::class, 'id_producto');
    }
}
