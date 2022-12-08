<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lolEloboost extends Model
{
    protected $fillable = [
        'nome_jogo',
        'tipo_jogo',
        'discricao',
    ];
}