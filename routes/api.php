<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\gameController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/hola', function () {
    return "{
        'Estudiante_1': 'Juan Camilo Valencia Hincapie',
        'Estudiante_2': 'Kevin Santiago Parra Romero'
    }";
});

Route::post('/signup', [AuthController::class, 'register']);
Route::post('/signin', [AuthController::class, 'login']);

Route::get('games', [GameController::class, 'index']);
Route::get('games/{id}', [GameController::class, 'show'])->middleware('auth:sanctum');
Route::post('games', [GameController::class, 'store'])->middleware('auth:sanctum');
Route::put('games/{id}', [GameController::class, 'update'])->middleware('auth:sanctum');
Route::delete('games/{id}', [GameController::class, 'destroy'])->middleware('auth:sanctum');