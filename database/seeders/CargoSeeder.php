<?php

namespace Database\Seeders;

use App\Models\Cargo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CargoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cargo = new Cargo();

        $cargo->codigo = 'GRTRRHH';
        $cargo->nombre = 'gerente de recursos humanos';
        $cargo->activo = true;
        $cargo->idUsuarioCreacion = 1;

        $cargo->save();

        $cargo = new Cargo();

        $cargo->codigo = 'TCNINF';
        $cargo->nombre = 'técnico informático';
        $cargo->activo = true;
        $cargo->idUsuarioCreacion = 1;

        $cargo->save();

        $cargo = new Cargo();

        $cargo->codigo = 'CNTDR';
        $cargo->nombre = 'contador';
        $cargo->activo = true;
        $cargo->idUsuarioCreacion = 1;

        $cargo->save();

        $cargo = new Cargo();

        $cargo->codigo = 'TSTR';
        $cargo->nombre = 'tester';
        $cargo->activo = true;
        $cargo->idUsuarioCreacion = 1;

        $cargo->save();

        $cargo = new Cargo();

        $cargo->codigo = 'PGRMDR';
        $cargo->nombre = 'programador';
        $cargo->activo = true;
        $cargo->idUsuarioCreacion = 1;

        $cargo->save();
    }
}
