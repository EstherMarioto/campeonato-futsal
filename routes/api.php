<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JogadorController;
use App\Http\Controllers\TimeController;
use App\Http\Controllers\PartidaController;
use App\Http\Controllers\ClassificacaoController;
use App\Http\Controllers\AuthenticationAPIController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/login', [AuthenticationAPIController::class, 'login']);

Route::middleware('auth:sanctum')->get('/jogador', [JogadorController::class, 'index']);
Route::middleware('auth:sanctum')->post('/jogador', [JogadorController::class, 'store']);
Route::middleware('auth:sanctum')->get('/jogador/{id}', [JogadorController::class, 'show']);
Route::middleware('auth:sanctum')->put('/jogador/{id}', [JogadorController::class, 'update']);
Route::middleware('auth:sanctum')->delete('/jogador/{id}', [JogadorController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/time', [TimeController::class, 'index']);
Route::middleware('auth:sanctum')->post('/time', [TimeController::class, 'store']);
Route::middleware('auth:sanctum')->get('/time/{id}', [TimeController::class, 'show']);
Route::middleware('auth:sanctum')->put('/time/{id}', [TimeController::class, 'update']);

Route::middleware('auth:sanctum')->post('/partida', [PartidaController::class, 'store']);
Route::middleware('auth:sanctum')->put('/partida/{id}', [PartidaController::class, 'update']);

Route::middleware('auth:sanctum')->get('/classificacao', [ClassificacaoController::class, 'index']);
Route::middleware('auth:sanctum')->post('/classificacao', [ClassificacaoController::class, 'store']);