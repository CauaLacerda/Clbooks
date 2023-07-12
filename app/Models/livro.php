<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;
    //campos "autorizados" para modificação
    protected $fillable = ['NomeLivro', 'AutorLivro', 'CategoriaLivro', 'ArquivoLivro', 'ImagemLivro'];
}
