<?php

namespace App\Http\Controllers;

use App\Models\Personagem;

use Illuminate\Http\Request;

use App\Http\Requests\StorePersonagemRequest;

use App\Http\Requests\UpdatePersonagemRequest;


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

        $dados['user_id'] = auth()->id();

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

    public function show(Personagem $personagem){
        try{
            return response()->json([
                'message' => 'Personagem encontrado com sucesso!',
                'data' => $personagem,
            ], 200);
        }catch(\Exception $e){
            return response()->json([
                'message' => 'Erro ao buscar personagem',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function update(UpdatePersonagemRequest $request, Personagem $personagem){
        try{
            $dados = $request->validated();

            $personagem->update($dados);

            return response()->json([
                'message' => 'Personagem atualizado com sucesso!',
                'data' => $personagem,
            ], 200);
        }catch(\Exception $e){
            return response()->json([
                'message' => 'Erro ao atualizar personagem!',
                'error' => $e->getMessage(),
            ],500);
        }
    }

    public function destroy(Personagem $personagem){
        try{
            $personagem->delete();

            return response()->json([
                'message' => 'Personagem excluído com sucesso',
            ], 200);
        }catch(\Exception $e){
            return response()->json([
                'message' => 'Erro ao excluir personagem',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
