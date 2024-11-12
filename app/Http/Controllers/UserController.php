<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('departamento', 'cargo')->get();

        $data = [
            'data' => $users,
            'status' => 200
        ];

        return response()->json($data, 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'usuario' => 'required|unique:users|max:255|min:1',
            'email' => 'required|email|unique:users',
            'primerNombre' => 'required|max:255|min:1',
            'segundoNombre' => 'required|max:255|min:1',
            'primerApellido' => 'required|max:255|min:1',
            'segundoApellido' => 'required|max:255|min:1',
            'idDepartamento' => 'required|integer|exists:departamentos,id',
            'idCargo' => 'required|integer|exists:cargos,id'
        ]);

        if ($validator->fails()) {
            $data = [
                'message' => 'Error en la validación de los datos',
                'errors' => $validator->errors(),
                'status' => 400
            ];

            return response()->json($data, 400);
        }

        $user = User::create([
            'usuario' => $request->usuario,
            'email' => $request->email,
            'primerNombre' => $request->primerNombre,
            'segundoNombre' => $request->segundoNombre,
            'primerApellido' => $request->primerApellido,
            'segundoApellido' => $request->segundoApellido,
            'idDepartamento' => $request->idDepartamento,
            'idCargo' => $request->idCargo
        ]);

        if (!$user) {
            $data = [
                'message' => 'Error al crear el usuario',
                'status' => 500
            ];

            return response()->json($data, 500);
        }

        $data = [
            'message' => 'Usuario creado con éxito',
            'data' => $user,
            'status' => 201
        ];

        return response()->json($data, 201);
    }

    public function show($id)
    {
        $user = User::with('departamento', 'cargo')->find($id);

        if (!$user) {
            $data = [
                'message' => "Usuario con id '$id' no encontrado",
                'status' => 404
            ];

            return response()->json($data, 404);
        }

        $data = [
            'data' => $user,
            'status' => 200
        ];

        return response()->json($data, 200);
    }

    public function destroy($id)
    {
        $user = User::find($id);

        if (!$user) {
            $data = [
                'message' => "Usuario con id '{$id}' no encontrado",
                'status' => 404
            ];

            return response()->json($data, 404);
        }

        $user->delete();

        $data = [
            'message' => 'Usuario eliminado',
            'status' => 200
        ];

        return response()->json($data, 200);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            $data = [
                'message' => "Usuario con id '{$id}' no encontrado",
                'status' => 404
            ];

            return response()->json($data, 404);
        }

        $validator = Validator::make($request->all(), [
            'usuario' => 'required|unique:users|max:255|min:1',
            'email' => 'required|email|unique:users',
            'primerNombre' => 'required|max:255|min:1',
            'segundoNombre' => 'required|max:255|min:1',
            'primerApellido' => 'required|max:255|min:1',
            'segundoApellido' => 'required|max:255|min:1',
            'idDepartamento' => 'required|integer|exists:departamentos,id',
            'idCargo' => 'required|integer|exists:cargos,id'
        ]);

        if ($validator->fails()) {
            $data = [
                'message' => 'Error en la validación de los datos',
                'errors' => $validator->errors(),
                'status' => 400
            ];

            return response()->json($data, 400);
        }

        $user->usuario = $request->usuario;
        $user->email = $request->email;
        $user->primerNombre = $request->primerNombre;
        $user->segundoNombre = $request->segundoNombre;
        $user->primerApellido = $request->primerApellido;
        $user->segundoApellido = $request->segundoApellido;
        $user->idDepartamento = $request->idDepartamento;
        $user->idCargo = $request->idCargo;

        $user->save();

        $data = [
            'message' => 'Usuario actualizado con éxito',
            'data' => $user,
            'status' => 200
        ];

        return response()->json($data, 200);
    }
}
