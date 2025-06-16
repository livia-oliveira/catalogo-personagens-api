<?php

namespace App\Http\Controllers;

use App\Models\Personagem;

use Illuminate\Http\Request;

class PersonagemController extends Controller
{
    public function index(){

       try{

         $personagens = Personagem::all();

        return response()->json([
            'message' => 'Lista de personagens recuperada com sucesso',
            'data' => $personagens,
        ],200);

        } catch (\Exception $e) {
        return response()->json([
            'message' => 'Erro detectado!',
            'error' => $e->getMessage(),
            // se quiser mais detalhe: 'trace' => $e->getTraceAsString(),
        ], 500);
    }

 }
}
