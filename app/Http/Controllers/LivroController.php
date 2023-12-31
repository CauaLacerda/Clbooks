<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Livro;

use Illuminate\Support\Str;

class LivroController extends Controller
{
    //c do crud
    public function criar(Request $request){
        $livro = new Livro;

        $livro->NomeLivro = $request->NomeLivro;
        $livro->AutorLivro = $request->AutorLivro;
        $livro->CategoriaLivro = $request->CategoriaLivro;
    
        //Fazer upload de arquivos
        $randomTxtLivro = Str::random(20);
        $fileLivro= $request->file('ArquivoLivro');
        $filenameLivro= $randomTxtLivro.date('YmdHi').$fileLivro->getClientOriginalName();
        $fileLivro->move(public_path('public/uploads'), $filenameLivro);
        
        $livro->ArquivoLivro = $filenameLivro;

        //Fazer upload de imagem
        $randomTxtImagem = Str::random(20);
        $fileImagem= $request->file('ImagemLivro');
        $filenameImagem= $randomTxtImagem.date('YmdHi').$fileImagem->getClientOriginalName();
        $fileImagem->move(public_path('public/uploads'), $filenameImagem);
        
        $livro->ImagemLivro = $filenameImagem;
        //Grava na tabela do BD
        $livro->save();

        return redirect('dashboard');

    }




     //R do CRUD
public function read(){

        $academicos = Livro::where('CategoriaLivro', '1')->get();

        $romances = Livro::where('CategoriaLivro', '2')->get();

        $suspDramas = Livro::where('CategoriaLivro', '3')->get();

        $infantis = Livro::where('CategoriaLivro', '4')->get();
        

        //Carrega a view passando os dados consultados 
        $dados = [
            'academicos' => $academicos,
            'romances' => $romances,
            'suspDramas' => $suspDramas,
            'infantis' => $infantis

        ];

        return view('app', $dados);

    }


}