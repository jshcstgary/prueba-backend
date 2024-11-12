<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CargoController extends Controller
{
    public function index()
    {
        $cargos = Cargo::all();

        $data = [
            'data' => $cargos,
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

    //     $cargo = Cargo::create([
    //         'codigo' => $request->codigo,
    //         'nombre' => $request->nombre,
    //         'activo' => $request->activo,
    //         'idUsuarioCreacion' => $request->idUsuarioCreacion
    //     ]);

    //     if (!$cargo) {
    //         $data = [
    //             'message' => 'Error al crear el cargo',
    //             'status' => 500
    //         ];

    //         return response()->json($data, 500);
    //     }

    //     $data = [
    //         'message' => 'Cargo creado con éxito',
    //         'data' => $cargo,
    //         'status' => 201
    //     ];

    //     return response()->json($data, 201);
    // }

    // public function show($id)
    // {
    //     $cargo = Cargo::find($id);

    //     if (!$cargo) {
    //         $data = [
    //             'message' => "Cargo con id '{$id}' no encontrado",
    //             'status' => 404
    //         ];

    //         return response()->json($data, 404);
    //     }

    //     $data = [
    //         'data' => $cargo,
    //         'status' => 200
    //     ];

    //     return response()->json($data, 200);
    // }

    // public function destroy($id)
    // {
    //     $cargo = Cargo::find($id);

    //     if (!$cargo) {
    //         $data = [
    //             'message' => "Cargo con id '{$id}' no encontrado",
    //             'status' => 404
    //         ];

    //         return response()->json($data, 404);
    //     }

    //     $cargo->delete();

    //     $data = [
    //         'message' => 'Cargo eliminado',
    //         'status' => 200
    //     ];

    //     return response()->json($data, 200);
    // }

    // public function update(Request $request, $id)
    // {
    //     $cargo = Cargo::find($id);

    //     if (!$cargo) {
    //         $data = [
    //             'message' => "Cargo con id '{$id}' no encontrado",
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

    //     $cargo->codigo = $request->codigo;
    //     $cargo->nombre = $request->nombre;
    //     $cargo->activo = $request->activo;
    //     $cargo->idUsuarioCreacion = $request->idUsuarioCreacion;

    //     $cargo->save();

    //     $data = [
    //         'message' => 'Cargo actualizado con éxito',
    //         'data' => $cargo,
    //         'status' => 200
    //     ];

    //     return response()->json($data, 200);
    // }
}
