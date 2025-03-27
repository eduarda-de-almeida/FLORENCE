<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RelatoController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\ChameController;
use App\Http\Controllers\AdmController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EmergenciaController;
use App\Http\Controllers\Controller;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/chame', [ChameController::class, "chamaChame"])->name ("chame");

Route::get('/adm', [AdmController::class, "chamaAdm"])->name ("adm");

Route::get('/forum', [ForumController::class, "chamaForum"])->name ("forum");

Route::resource('relatos', RelatoController::class);

Route::put('relatos/{relato}/aprovar', [RelatoController::class, 'approve'])->name('relatos.approve');

Route::post('/relatos', [RelatoController::class, 'store'])->name('relatos.store');

Route::get('/relatos', [RelatoController::class, 'index'])->name('relatos.index');

Route::resource('emergencias', EmergenciaController::class);

Route::get('/forum', [RelatoController::class, 'forum'])->name('forum');

Route::get('/chame', [EmergenciaController::class, 'chame'])->name('chame');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
