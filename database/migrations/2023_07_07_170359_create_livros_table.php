<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
    Schema::create('livros', function (Blueprint $table) {
    $table->id();
    $table->timestamps();
    $table->text('NomeLivro');
    $table->text('AutorLivro');
    $table->text('CategoriaLivro');
    $table->text('ArquivoLivro');
    $table->text('ImagemLivro');
    });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livros');
    }
};
