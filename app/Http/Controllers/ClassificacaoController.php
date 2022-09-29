<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Classificacao;

class ClassificacaoController extends Controller
{

    public function index()
    {
        return Classificacao::orderBy('cla_ponto', 'DESC')->get();
    }
    public function store(Request $request)
    {
        Classificacao::create([
            'cla_time_nome' => $request->cla_time_nome,
            'cla_ponto' => $request->cla_ponto,
            'cla_gol' => $request->cla_gol
        ]);


        return Classificacao::orderBy('cla_ponto', 'DESC')->get();
    }
}