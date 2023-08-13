<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brasileirao extends Model
{
    use HasFactory;

    

    protected $fillable = [
        'ano',
        'campeao',
        'vice',
        'terceiro',
        'quarto',
        'quinto',
        'sexto',
        'artilheiro',
        'gols',
    ];
}
