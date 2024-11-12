<?php

namespace Database\Seeders;

use App\Models\Departamento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departamento = new Departamento();

        $departamento->codigo = 'RRHH';
        $departamento->nombre = 'recursos humanos';
        $departamento->activo = true;
        $departamento->idUsuarioCreacion = 1;

        $departamento->save();

        $departamento = new Departamento();

        $departamento->codigo = 'SPRTTCNC';
        $departamento->nombre = 'soporte ténico';
        $departamento->activo = true;
        $departamento->idUsuarioCreacion = 1;

        $departamento->save();

        $departamento = new Departamento();

        $departamento->codigo = 'CNTBLDD';
        $departamento->nombre = 'contabilidad';
        $departamento->activo = true;
        $departamento->idUsuarioCreacion = 1;

        $departamento->save();

        $departamento = new Departamento();

        $departamento->codigo = 'INFMT';
        $departamento->nombre = 'informática';
        $departamento->activo = true;
        $departamento->idUsuarioCreacion = 1;

        $departamento->save();
    }
}
