<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>CL Books</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <!-- Biblioteca de icones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- AOS Animate -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!-- CSS personalizado -->
    <link rel="stylesheet" href="css/style.css" />
</head>

<body background="fundo-teste.jpg">
    <header>
        <nav class="navbar navbar-expand-lg fundo-azul fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('dashboard') }}"><img src="imagens/Logo-projeto.png" width="110"
                        alt="logo empresa" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item mb-2 me-2">
                            <a class="nav-link active" aria-current="page" href="{{ route('dashboard') }}"><i
                                    class="fa-solid fa-house"></i></a>
                        </li>
                        <li class="nav-item mb-2 me-2">
                            <button class="btn btn-primary fundo-azul" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                <img src="imagens/logo lupa.png" width="20" alt="" />
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

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
                <a name="" id="" class="btn btn fundo-azul-escuro texto-branco" href="{{route('resultado-buscas')}}"
                    role="button">Pesquisar</a>
            </form>
        </div>
    </div>

    <!-- final off canvas -->

  
    <main class="main-cl pt-3">

        <h2 class="titulo">Acadêmicos:</h2>
        <div class="d-md-flex justify-content-between align-items-center">
            <img class="livros me-3" src="imagens/imagens-livros/1984.jpg" alt="">
            <img class="livros me-3" src="imagens/imagens-livros/51nceVwrh7L.jpg" alt="">
            <img class="livros me-3" src="imagens/imagens-livros/formacao-classe-operaria.jpg" alt="">
            <img class="livros me-3" src="imagens/imagens-livros/kant.jpg" alt="">
            <img class="livros me-3" src="imagens/imagens-livros/o-principe-nicolau-maquiavel-1063161.jpg" alt="">
            <img class="livros me-3" src="imagens/imagens-livros/platao.jpg" alt="">
            <img class="livros me-2" src="imagens/imagens-livros/riquezas-nacoes.jpg" alt="">
            <img class="livros me-2" src="imagens/imagens-livros/uma-breve-hist-do-tempo.jpg" alt="">
        </div>
        <div class="d-md-flex justify-content-between align-items-center">
            <img class="livros me-3" src="imagens/imagens-livros/dom-quixote.jpg" alt="">
            <img class="livros me-3" src="imagens/imagens-livros/moby-dick.jpg" alt="">
            <img class="livros me-3" src="imagens/imagens-livros/frankstein.jpg" alt="">
            <img class="livros me-3" src="imagens/imagens-livros/coracao-das-trevas.jfif" alt="">
            <img class="livros me-3" src="imagens/imagens-livros/o-poder-e-a-gloria.jpg" alt="">
            <img class="livros me-3" src="imagens/imagens-livros/a-vida-modo-de-usar.jpg" alt="">
            <img class="livros me-2" src="imagens/imagens-livros/a-pedra-da-lua.jpg" alt="">
            <img class="livros me-2" src="imagens/imagens-livros/wuthering-heights.jpg" alt="">
        </div>
        <div class="d-md-flex justify-content-between align-items-center">
            <img class="livros me-3" src="imagens/imagens-livros/clube-da-luta.jpg" alt="">
            <img class="livros me-3" src="imagens/imagens-livros/antes-de-dormir.jpg" alt="">
            <img class="livros me-3" src="imagens/imagens-livros/tempo-de-matar.jpg" alt="">
            <img class="livros me-3" src="imagens/imagens-livros/o-casal.jpg" alt="">
            <img class="livros me-3" src="imagens/imagens-livros/a-paciente-silenciosa.jpg" alt="">
            <img class="livros me-3" src="imagens/imagens-livros/garota-exemplar.jpg" alt="">
            <img class="livros me-2" src="imagens/imagens-livros/o-espiao.jpg" alt="">
            <img class="livros me-2" src="imagens/imagens-livros/e-nao-sobrou-nenhum.jpg" alt="">
        </div>

    </main>

    <!--começo html paginação -->
    <div class="container">
        <ul class="pagination">
            <li class="icon">
                <a href="#"><span class="fas fa-angle-left"></span>Anterior</a>
            </li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li class="icon">
                <a href="#">Próximo<span class="fas fa-angle-right"></span></a>
            </li>
        </ul>
    </div>

    <!-- Final html paginação -->


    <footer>

        <div class="fundo-laranja mt-3">
            <div class="footer">
                <a href=""><img src="imagens/Logo-projeto.png" alt=""></a>
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
                            <i class="fa-brands fa-instagram"></i> <i class="fa-brands fa-facebook"></i> <i
                                class="fa-brands fa-twitter"></i>
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
                <a href=""><img class="img-footer-small" src="imagens/Logo-projeto.png" alt=""></a>
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
                            <i class="fa-brands fa-instagram"></i> <i class="fa-brands fa-facebook"></i> <i
                                class="fa-brands fa-twitter"></i>
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

    <!-- Seta pra subir a página -->
    <a href="#" class="seta-sobe">
        <i class="fa-solid fa-arrow-up"></i>
    </a>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
        crossorigin="anonymous"></script>


    <!-- JS Seta -->
    <script>
        // mostra a seta quando rolagem for maior que x
        const rolagem = () => {
            const tela = document.querySelector('html')
            const seta = document.querySelector('.seta-sobe')
            //console.log(tela.scrollTop)
            if (tela.scrollTop > 200) {
                seta.style.display = 'block'

            } else {
                seta.style.display = 'none'
            }
        }
        //window.addWventListener('scroll', rolagem)
        window.onscroll = () => rolagem()
    </script>




    <!-- JS personalizado -->
    <script src="js/code.js"></script>
</body>

</html>