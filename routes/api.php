<?php

use App\Http\Controllers\RegistroController;
use App\Http\Controllers\StepController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::get('registros', [RegistroController::class, 'index']);
// Route::get('registros/{registro}', [RegistroController::class, 'show']);

Route::apiResource('registros', RegistroController::class);

Route::get('steps', [StepController::class, 'index']);
Route::get('steps/{id}', [StepController::class, 'show']);

Route::get('listar', [StepController::class, 'listar']);

Route::get('contactanos', function(){
      $de =  $_GET['de'];
      $correo = new ContactanosMailable;
      Mail::to($de)->send($correo);

      return "Mensaje enviado";
});






