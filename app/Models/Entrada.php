<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class entrada extends Model
{
    use HasFactory;

    protected $table = 'entrada';


    public function Producto(){

        return $this->hasMany(Producto::class, 'id_producto');

    }

    public function Personal(){

        return $this->belongsTo(Personal::class, 'id_personal');

    }

}
