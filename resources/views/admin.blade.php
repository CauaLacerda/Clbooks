<!doctype html>
<html lang="pt-BR">

<head>
    <title>Painel Adm</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


    <!-- Biblioteca de icones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS personalizado -->
    <link rel="stylesheet" href="{{url('/')}}/css/style.css" />
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg fundo-azul fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('dashboard') }}"><img src="{{url('/')}}/imagens/Logo-projeto.png" width="110" alt="logo empresa" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item mb-2 me-2">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="nav-link text-light" href="{{ route('logout') }}" onclick="event.preventDefault();
                  this.closest('form').submit(); " role="button">
                                    <i class="fa-solid fa-arrow-right-from-bracket fa-2x"></i>
                                </a>
                            </form>


                        </li>
                        <li class="nav-item mb-2 me-2">

                        </li>
                        <li class="nav-item mb-2 me-2">
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="mt-5 pt-5">
        <h1 class="titulo text-center">Cadastro de livros:</h1>

        <div class="d-flex justify-content-center">
            <div class="card  tamanho-card ms-5 fundo-laranja">

                <div class="card-body">
                    <form method="post" action="{{route('criar')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nome do Livro:</label>
                            <input type="text" class="form-control tamanho-input" required id="NomeLivro" name="NomeLivro">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Autor:</label>
                            <input type="text" class="form-control tamanho-input" required id="AutorLivro" name="AutorLivro">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Categoria:</label>
                            <select class="form-select tamanho-input" required aria-label="Default select example" name="CategoriaLivro">
                                <option selected>Escolha a Categoria</option>
                                <option value="1">Acadêmicos</option>
                                <option value="2">Românces</option>
                                <option value="3">Suspense-Drama</option>
                                <option value="4">Infantis</option>
                            </select>

                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Insira o arquivo do Livro:</label>
                            <input class="form-control tamanho-input" required type="file" id="formFile" name="ArquivoLivro">
                        </div>

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Insira a imagem do Livro:</label>
                            <input class="form-control tamanho-input" required type="file" id="formFile" name="ImagemLivro">
                        </div>

                        <button type="submit" class="btn btn-success">Cadastrar</button>
                    </form>
                </div>
            </div>

        </div>




    </main>

    <footer>


    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>