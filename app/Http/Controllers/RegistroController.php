<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Area;

class RegistroController extends Controller
{

    //  Get listar registros
    public function index(Request $request)
    {

        if ($request->has('buscar')) {
            $users = User::where('name', 'like', '%' . $request->buscar . '%')
                ->orWhere('email', 'like', '%' . $request->buscar . '%')
                ->orderBy('area_id', 'desc')
                ->get();
        } else {
            $users = User::all();
        }

        return response()->json(
            [
                'data' => $users,
                'res' => true,
                'message' => 'success'
            ],
            200
        );
    }

    //Crear registro
    public function store(CreateUserRequest $request)
    {
        $input = $request->all();

        User::create($input);
        return response()->json([
            'res' => true,
            'message' => 'Registro creado correctamente'
        ], 201);
    }
    

    // Get mostrar registro unico
    public function show($id)
    {
        return User::find($id);
    }

    // Borrar registro
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return response()->json([
            'res' => true,
            'message' => 'Registro eliminado correctamente'
        ], 200);
    }
}


// victor reyes jimenez12:19
// vreyes@gruponach.com
// CC njimenez@gruponach.com
