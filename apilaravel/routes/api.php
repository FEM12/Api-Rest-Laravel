<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//utilizando clase controlador
use App\Http\Controllers\EmpleadosController;
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

Route::get('/empleados', [EmpleadosController::class, 'index']);
Route::get('/empleados/{id}', [EmpleadosController::class, 'show']);
Route::post('/empleados', [EmpleadosController::class, 'create']);
Route::delete('/empleados/{id}', [EmpleadosController::class, 'eliminar']);
Route::put('/empleados/{id}', [EmpleadosController::class, 'editar']);