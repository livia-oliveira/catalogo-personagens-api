<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonagemController;
use App\Http\Controllers\AuthController;

Route::get('/personagens', [PersonagemController::class, 'index']);
Route::post('/personagens', [PersonagemController::class, 'store']);
Route::get('/personagens/{personagem}', [PersonagemController::class, 'show']);
Route::put('/personagens/{personagem}', [PersonagemController::class, 'update']);
Route::delete('/personagens/{personagem}', [PersonagemController::class, 'destroy']);

Route::post('/register', [AuthController::class, 'register']);
