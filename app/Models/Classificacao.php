<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classificacao extends Model
{
    use HasFactory;

    protected $fillable = [
        'cla_ponto',
        'cla_gol',
        'cla_time_nome',


    ];
}