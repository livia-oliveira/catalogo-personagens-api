<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonagemController;
use App\Http\Controllers\AuthController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function(){

Route::post('/logout', [AuthController::class, 'logout']);
Route::get('/me', [AuthController::class, 'me']);

Route::get('/personagens', [PersonagemController::class, 'index']);
Route::post('/personagens', [PersonagemController::class, 'store']);
Route::get('/personagens/{personagem}', [PersonagemController::class, 'show']);
Route::put('/personagens/{personagem}', [PersonagemController::class, 'update']);
Route::delete('/personagens/{personagem}', [PersonagemController::class, 'destroy']);
Route::get('/meus-personagens', [PersonagemController::class, 'meusPersonagens']);
});

