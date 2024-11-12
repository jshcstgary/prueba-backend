<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DepartamentoController extends Controller
{
    public function index()
    {
        $departamentos = Departamento::all();

        $data = [
            'data' => $departamentos,
            'status' => 200
        ];

        return response()->json($data, 200);
    }

    // public function store(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'codigo' => 'required|max:255|min:1',
    //         'nombre' => 'required|max:255|min:1',
    //         'activo' => 'required|boolean',
    //         'idUsuarioCreacion' => 'required|integer'
    //     ]);

    //     if ($validator->fails()) {
    //         $data = [
    //             'message' => 'Error en la validación de los datos',
    //             'errors' => $validator->errors(),
    //             'status' => 400
    //         ];

    //         return response()->json($data, 400);
    //     }

    //     $departamento = Departamento::create([
    //         'codigo' => $request->codigo,
    //         'nombre' => $request->nombre,
    //         'activo' => $request->activo,
    //         'idUsuarioCreacion' => $request->idUsuarioCreacion
    //     ]);

    //     if (!$departamento) {
    //         $data = [
    //             'message' => 'Error al crear el departamento',
    //             'status' => 500
    //         ];

    //         return response()->json($data, 500);
    //     }

    //     $data = [
    //         'message' => 'Departamento creado con éxito',
    //         'data' => $departamento,
    //         'status' => 201
    //     ];

    //     return response()->json($data, 201);
    // }

    // public function show($id)
    // {
    //     $departamento = Departamento::find($id);

    //     if (!$departamento) {
    //         $data = [
    //             'message' => "Departamento con id '{$id}' no encontrado",
    //             'status' => 404
    //         ];

    //         return response()->json($data, 404);
    //     }

    //     $data = [
    //         'data' => $departamento,
    //         'status' => 200
    //     ];

    //     return response()->json($data, 200);
    // }

    // public function destroy($id)
    // {
    //     $departamento = Departamento::find($id);

    //     if (!$departamento) {
    //         $data = [
    //             'message' => "Departamento con id '{$id}' no encontrado",
    //             'status' => 404
    //         ];

    //         return response()->json($data, 404);
    //     }

    //     $departamento->delete();

    //     $data = [
    //         'message' => 'Departamento eliminado',
    //         'status' => 200
    //     ];

    //     return response()->json($data, 200);
    // }

    // public function update(Request $request, $id)
    // {
    //     $departamento = Departamento::find($id);

    //     if (!$departamento) {
    //         $data = [
    //             'message' => "Departamento con id '{$id}' no encontrado",
    //             'status' => 404
    //         ];

    //         return response()->json($data, 404);
    //     }

    //     $validator = Validator::make($request->all(), [
    //         'codigo' => 'required|max:255|min:1',
    //         'nombre' => 'required|max:255|min:1',
    //         'activo' => 'required|boolean',
    //         'idUsuarioCreacion' => 'required|integer'
    //     ]);

    //     if ($validator->fails()) {
    //         $data = [
    //             'message' => 'Error en la validación de los datos',
    //             'errors' => $validator->errors(),
    //             'status' => 400
    //         ];

    //         return response()->json($data, 400);
    //     }

    //     $departamento->codigo = $request->codigo;
    //     $departamento->nombre = $request->nombre;
    //     $departamento->activo = $request->activo;
    //     $departamento->idUsuarioCreacion = $request->idUsuarioCreacion;

    //     $departamento->save();

    //     $data = [
    //         'message' => 'Departamento actualizado con éxito',
    //         'data' => $departamento,
    //         'status' => 200
    //     ];

    //     return response()->json($data, 200);
    // }
}
