<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipo_producto extends Model
{
    use HasFactory;

    protected $table = 'tipo_producto';


    public function Producto(){

        return $this ->hasOne(Producto::class, 'id_producto');
    }
}
