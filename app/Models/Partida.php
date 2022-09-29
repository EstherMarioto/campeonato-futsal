<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partida extends Model
{
    use HasFactory;

    protected $fillable = [
        'par_data',
        'par_hora_inicio',
        'par_hora_termino',
        'par_placar',
        'par_time_nome',

    ];
}