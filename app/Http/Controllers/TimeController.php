<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Time;

class TimeController extends Controller
{
    public function index()
    {
        return Time::all();
    }

    public function store(Request $request)
    {
        Time::create([
            'tim_nome' => $request->tim_nome
        ]);


        return Time::all();
    }

    public function show($id)
    {
        return Time::findOrfail($id);
    }

    public function update($id, Request $request)
    {

        $time = Time::findOrFail($id);
        $time->tim_nome = $request->tim_nome;
        $time->save();
        return Time::findOrfail($id);
    }
}