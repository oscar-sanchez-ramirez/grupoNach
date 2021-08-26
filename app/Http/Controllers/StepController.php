<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Step;
use App\Models\Lista;
use Illuminate\Support\Facades\Mail;

class StepController extends Controller
{

    public function index()
    {
        $steps = Step::all();
        return response()->json(
            [
                'data' => $steps,
                'res' => true,
                'message' => 'success'
            ],
            200
        );
    }

    public function show($id)
    {
        return Step::find($id);
    }

    public function listar()
    {
           $listas = Lista::all();
           return $listas;
    }

    
}
