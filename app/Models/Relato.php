<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relato extends Model
{
    use HasFactory;
    
    protected $table = 'relatos'; // Nome da tabela, se for diferente do padrão
    protected $primaryKey = 'id';

    protected $fillable = [
        'conteudo',
        'aprovado',
        'date',
    ];

}
