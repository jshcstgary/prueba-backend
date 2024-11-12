<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();

        $user->usuario = 'jshcst';
        $user->email = 'miguel.joshuac@prueba.com';
        $user->primerNombre = 'miguel';
        $user->segundoNombre = 'joshua';
        $user->primerApellido = 'castillo';
        $user->segundoApellido = 'riofrio';
        $user->idDepartamento = 1;
        $user->idCargo = 1;

        $user->save();

        $user = new User();

        $user->usuario = 'angcst';
        $user->email = 'angel.gabrielc@prueba.com';
        $user->primerNombre = 'angel';
        $user->segundoNombre = 'gabriel';
        $user->primerApellido = 'castillo';
        $user->segundoApellido = 'riofrio';
        $user->idDepartamento = 2;
        $user->idCargo = 2;

        $user->save();

        $user = new User();

        $user->usuario = 'brnvllm';
        $user->email = 'britanny.aleskav@prueba.com';
        $user->primerNombre = 'britanny';
        $user->segundoNombre = 'aleska';
        $user->primerApellido = 'villamar';
        $user->segundoApellido = 'ventura';
        $user->idDepartamento = 1;
        $user->idCargo = 2;

        $user->save();

        $user = new User();

        $user->usuario = 'ldyzmbr';
        $user->email = 'lady.michellez@prueba.com';
        $user->primerNombre = 'lady';
        $user->segundoNombre = 'michelle';
        $user->primerApellido = 'zambrano';
        $user->segundoApellido = 'ruiz';
        $user->idDepartamento = 4;
        $user->idCargo = 5;

        $user->save();

        $user = new User();

        $user->usuario = 'jrrmrz';
        $user->email = 'jairo.danielr@prueba.com';
        $user->primerNombre = 'jairo';
        $user->segundoNombre = 'daniel';
        $user->primerApellido = 'ramirez';
        $user->segundoApellido = 'riofrio';
        $user->idDepartamento = 4;
        $user->idCargo = 3;

        $user->save();

        $user = new User();

        $user->usuario = 'valvidal';
        $user->email = 'valentina.alexandrav@prueba.com';
        $user->primerNombre = 'valentina';
        $user->segundoNombre = 'alexandra';
        $user->primerApellido = 'vidal';
        $user->segundoApellido = 'navarrete';
        $user->idDepartamento = 4;
        $user->idCargo = 3;

        $user->save();
    }
}
