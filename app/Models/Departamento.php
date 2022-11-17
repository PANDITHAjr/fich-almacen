<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    protected $table = 'departamento';

    public function Salida(){

        return $this->belongsTo(Salida::class, 'id_departamento');
    }
}
