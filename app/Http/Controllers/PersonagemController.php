<?php

namespace App\Http\Controllers;

use App\Models\Personagem;

use Illuminate\Http\Request;

use App\Http\Requests\StorePersonagemRequest;

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
        ], 500);
    }

 }

    public function store(StorePersonagemRequest $request){

        try {
        $dados = $request->validated();

        $personagem = Personagem::create($dados);

        return response()->json([
            'message' => 'Personagem criado com sucesso!',
            'data' => $personagem,
        ], 201);

        }catch(\Exception $e){
            return response()->json([
                'message' => 'Erro detectado!',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
