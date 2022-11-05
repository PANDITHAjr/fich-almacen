<?php

namespace Database\Seeders;

use App\Models\Personal;
use App\Models\TipoPersonal;
use App\Models\User;
use Illuminate\Database\Seeder;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $tipo_personal = new TipoPersonal();
        $tipo_personal->descripcion = 'Administrador';
        $tipo_personal->save();

        $personal = new Personal();
        $personal->nombre = 'Carlos Alfredo';
        $personal->apellido = 'Ramos Carballo';
        $personal->edad = '22';
        $personal->telefono = '67671718';
        $personal->direcion = 'camiri';
        $personal->id_tipo_personal = '1';
        $personal->save();

        $user = new User();
        $user->name = 'Carlos';
        $user->email = 'rcarballo.carlos@gmail.com';
        $user->password = bcrypt('2000');
        $user->id_personal = '1';
        $user->save();

    }
}
