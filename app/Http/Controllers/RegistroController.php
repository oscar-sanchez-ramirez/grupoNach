<?php

namespace App\Http\Controllers;

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

    public function store(Request $request)
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

    public function destroy(){
        
    }
}
