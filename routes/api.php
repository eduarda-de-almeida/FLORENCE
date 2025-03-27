<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ListaUserController;
use App\Http\Controllers\RelatoController;
use App\Http\Controllers\EmergenciaController;



/*
Route::get('/users', function (Request $request) {
    return response()->json([
        'status'=> true,
        'message' => "Listar usuários",
    ], 200);
});
*/

Route::get('/users', [ListaUserController::class, 'index']);
Route::get('/users/{user}', [ListaUserController::class, 'show']);
Route::post('/users', [ListaUserController::class, 'store']);
Route::put('/users/{user}', [ListaUserController::class, 'update']);
Route::delete('/users/{user}', [ListaUserController::class, 'destroy']);

//Route::post('login', 'AuthController@login');

//Route::post('register', 'AuthController@register');

//-------- Relatos --------
Route::get('/relatos', [RelatoController::class, 'getListagemRelatos']);

//-------- Emergências --------
Route::get('/emergencias', [EmergenciaController::class, 'getListagemEmergencias']);

