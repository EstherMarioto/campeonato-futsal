<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Jogador;

class JogadorController extends Controller
{
    public function index()
    {
        return Jogador::all();
    }

    public function store(Request $request)
    {
        Jogador::create([
            'jog_nome' => $request->jog_nome,
            'jog_camisa' => $request->jog_camisa,
            'jog_time_nome' => $request->jog_time_nome
        ]);


        return Jogador::all();
    }

    public function show($id)
    {
        return Jogador::findOrfail($id);
    }

    public function update($id, Request $request)
    {

        $jogador = Jogador::findOrFail($id);
        $jogador->jog_nome = $request->jog_nome;
        $jogador->jog_camisa = $request->jog_camisa;
        $jogador->jog_time_nome = $request->jog_time_nome;
        $jogador->save();
        return Jogador::findOrfail($id);
    }

    public function destroy($id)
    {
        Jogador::findOrFail($id)->delete();
        return response()->json(['message' => "Jogador excluído com sucesso!"]);
    }
}