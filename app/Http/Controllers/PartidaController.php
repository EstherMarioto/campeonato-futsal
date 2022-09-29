<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Partida;

class PartidaController extends Controller
{

    public function store(Request $request)
    {
        Partida::create([
            'par_data' => $request->par_data,
            'par_hora_inicio' => $request->par_hora_inicio,
            'par_hora_termino' => $request->par_hora_termino,
            'par_time_nome' => $request->par_time_nome,
            'par_placar' => $request->par_placar

        ]);


        return Partida::all();
    }

    public function update($id, Request $request)
    {

        $partida = Partida::findOrFail($id);
        $partida->par_data = $request->par_data;
        $partida->par_hora_inicio = $request->par_hora_inicio;
        $partida->par_hora_termino = $request->par_hora_termino;
        $partida->par_time_nome = $request->par_time_nome;
        $partida->par_placar = $request->par_placar;

        $partida->save();
        return Partida::findOrfail($id);
    }
}