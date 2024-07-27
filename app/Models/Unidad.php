<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    use HasFactory;

    protected $table = 'unidad';
    public function Salida(){

        return $this->hasMany(Salida::class, 'id_salida');
    }
}
