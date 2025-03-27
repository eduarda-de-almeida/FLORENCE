<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emergencia extends Model
{
    use HasFactory;

    // Define os campos que podem ser preenchidos em massa
    protected $fillable = [
        'nome',
        'telefone',

    ];

   
}
