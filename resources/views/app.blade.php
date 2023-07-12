<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <title>CL Books</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
  <!-- Biblioteca de icones -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- AOS Animate -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <!-- CSS personalizado -->
  <link rel="stylesheet" href="{{url('/')}}/css/style.css" />
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg fundo-azul fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}"><img src="{{url('/')}}/imagens/Logo-projeto.png" width="110" alt="logo empresa" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item mb-2 me-2">
              <a class="nav-link active" aria-current="page" href="{{ url('/') }}"><i class="fa-solid fa-house"></i></a>
            </li>
            <li class="nav-item mb-2 me-2">
              <button class="btn btn-primary fundo-azul" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <img src="{{url('/')}}/imagens/logo lupa.png" width="20" alt="" />
              </button>
            </li>
            <li class="nav-item mb-2 me-2">
              <a href="{{route('login')}}" class="btn btn-primary fundo-azul">LOGIN</a>
            </li>
            <li class="nav-item mb-2 me-2">
              <a href="{{route('register')}}" class="btn btn-primary fundo-azul">CADASTRE-SE</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>



  <!-- Inicio Política de privacidade -->
  <div class="aviso-cookies">
    <p class="texto-cookies">Cookies: a gente guarda estatísticas de visitas para melhorar sua experiência de navegação,
      saiba mais em nossos <a class="link-politica" href="{{ route('termos-condicoes') }}">Termos e Condições</a>.</p>
    <button type="button" class="btn btn-secondary botao-fechar-cookies">
      Concordar e Fechar
  </div>


  <!-- final política de privacidade -->






  <main class="main-cl pt-3">
    <!-- banner superior - carousel  -->
    <div id="imagem-carousel" class="carousel slide d-none d-lg-block" data-bs-ride="carousel">
      <ol class="carousel-indicators">
        <li data-bs-target="#imagem-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
        <li data-bs-target="#imagem-carousel" data-bs-slide-to="1" aria-label="Second slide"></li>
        <li data-bs-target="#imagem-carousel" data-bs-slide-to="2" aria-label="Third slide"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img src="{{url('/')}}/imagens/imagem1-carousel-projeto.jpg" class="w-100 d-block" alt="First slide" />
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>

        <div class="carousel-item">
          <img src="{{url('/')}}/imagens/imagem2-carousel-projeto.jpg" class="w-100 d-block" alt="Second slide" />
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>

        <div class="carousel-item">
          <img src="{{url('/')}}/imagens/imagem3-carousel-projeto.jpg" class="w-100 d-block" alt="Third slide" />
          <div class="carousel-caption d-none d-md-block">
            <a name="" id="" class="btn fundo-laranja m-4"" href=" {{ route('register') }}" role="button">CADASTRE-SE</a>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#imagem-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#imagem-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próximo</span>
      </button>
    </div>

    <!-- Final banner topo -->


    <section class="Categoria-Academicos">

      <h2 class="titulo">Acadêmicos:</h2>
      <a href="#" class="btn btn-light fundo-azul ms-2 mb-2" role="button">Ver mais</a>
      <div class="d-md-flex justify-content-between align-items-center">
        @foreach($academicos as $academico)
        <p>{{$academico->NomeLivro}}</p>
      
        @endforeach
      </div>

    </section>

    <section class="Categoria-Academicos">
      <h2 class="titulo">Românces:</h2>
      <a href="#" class="btn btn-light fundo-azul ms-2 mb-2" role="button">Ver mais</a>
      <div class="d-md-flex justify-content-between align-items-center">
        @foreach($romances as $romance)

        @endforeach
      </div>


    </section>

    <section class="Categoria-Academicos">
      <h2 class="titulo">Suspense/Drama:</h2>
      <a name="" id="" class="btn btn-light fundo-azul ms-2 mb-2" href="#" role="button">Ver mais</a>
      <div class="d-md-flex justify-content-between align-items-center">
        @foreach($suspDramas as $suspDrama)

        @endforeach
      </div>

    </section>

    <section class="Categoria-Academicos">
      <h2 class="titulo">Infantis:</h2>
      <a name="" id="" class="btn btn-light fundo-azul ms-2 mb-2" href="#" role="button">Ver mais</a>
      <div class="d-md-flex justify-content-between align-items-center">
        @foreach($infantis as $ifantil)
        

        @endforeach
      </div>

    </section>
  </main>

  <footer>
    <div class="fundo-laranja mt-3">
      <div class="footer">
        <a href=""><img src="{{url('/')}}/imagens/Logo-projeto.png" alt=""></a>
        <div class="container text-center">
          <div class="row align-items-start">
            <div class="col">
              <h3>Contato:</h3>
              <p><strong> Email:</strong> clbooks@outlook.com</p>
            </div>
            <div class="col">
              <h3> Horários de funcionamento:</h3>
              <p>Segunda á sábado das 7:00 ás 18:30</p>
            </div>
            <div class="col">
              <h3>Siga-nos:</h3>
              <i class="fa-brands fa-instagram"></i> <i class="fa-brands fa-facebook"></i> <i class="fa-brands fa-twitter"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="fundo-laranja p-5">

    </div>

    <div class="creditos fundo-laranja-escuro">
      <p class="texto-creditos">&copy; Cauã Lacerda - Todos os direitos reservados</p>
    </div>

    <div class="fundo-laranja">
      <div class="footer-small">
        <a href=""><img class="img-footer-small" src="{{url('/')}}/imagens/Logo-projeto.png" alt=""></a>
        <div class="container text-center">
          <div class="row align-items-start">
            <div class="col">
              <h3>Contato:</h3>
              <p><strong> Email:</strong> clbooks@outlook.com</p>
            </div>
            <div class="col">
              <h3> Horários de funcionamento:</h3>
              <p>Segunda á sábado das 7:00 ás 18:30</p>
            </div>
            <div class="col">
              <h3>Siga-nos:</h3>
              <i class="fa-brands fa-instagram"></i> <i class="fa-brands fa-facebook"></i> <i class="fa-brands fa-twitter"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="fundo-laranja-escuro">
      <div class="creditos-small">
        <p class="texto-creditos">&copy; Cauã Lacerda - Todos os direitos reservados</p>
      </div>
    </div>



  </footer>

  <!-- <footer>
    

    



    

    

    <div class="fundo-laranja-escuro">
      <div class="creditos-small">
        <p class="texto-creditos">&copy; Cauã Lacerda - Todos os direitos reservados</p>
      </div>

    </div>
  </footer> -->


  <!-- Seta pra subir a página -->
  <a href="#" class="seta-sobe">
    <i class="fa-solid fa-arrow-up"></i>
  </a>

  <!--   Início off canvas com opções de pesquisa -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header fundo-laranja">
      <h5 class="offcanvas-title" id="offcanvasRightLabel">
        Ferramenta de pesquisa
      </h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body fundo-azul">
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar" />
        <a name="" id="" class="btn btn fundo-azul-escuro texto-branco" href="#" role="button">Pesquisar</a>
      </form>
    </div>
  </div>

  <!-- final off canvas -->





  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
  <!-- JS personalizado -->
  <script src="{{url('/')}}/js/code.js"></script>
</body>

</html>