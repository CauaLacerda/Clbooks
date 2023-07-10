<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\livro;

use Illuminate\Support\Str;

class LivroController extends Controller
{
    public function criar(Request $request){
        $livro = new livro;

        $livro->NomeLivro = $request->NomeLivro;
        $livro->AutorLivro = $request->AutorLivro;
        $livro->CategoriaLivro = $request->CategoriaLivro;
    
        $randomTxtLivro = Str::random(20);
        $fileLivro= $request->file('ArquivoLivro');
        $filenameLivro= $randomTxtLivro.date('YmdHi').$fileLivro->getClientOriginalName();
        $fileLivro->move(public_path('public/uploads'), $filenameLivro);
        
        $livro->ArquivoLivro = $filenameLivro;

        
        $randomTxtImagem = Str::random(20);
        $fileImagem= $request->file('ImagemLivro');
        $filenameImagem= $randomTxtImagem.date('YmdHi').$fileImagem->getClientOriginalName();
        $fileImagem->move(public_path('public/uploads'), $filenameImagem);
        
        $livro->ImagemLivro = $filenameImagem;
        //Grava na tabela do BD
        $livro->save();

        return redirect('admin');

    }

}