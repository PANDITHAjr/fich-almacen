<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipo_personal extends Model
{
    use HasFactory;


    protected $table = 'tipo_personal';

    public function Personal(){

        return $this->hasOne(Personal::class, 'id_personal');

    }
}
