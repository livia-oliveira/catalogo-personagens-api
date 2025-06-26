<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonagemController;

Route::get('/personagens', [PersonagemController::class, 'index']);
Route::post('/personagens', [PersonagemController::class, 'store']);
Route::get('/personagens/{personagem}', [PersonagemController::class, 'show']);
