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

<body>
    <header>
        <nav class="navbar navbar-expand-lg fundo-azul">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('app') }}"><img src="imagens/Logo-projeto.png" width="110"
                        alt="logo empresa" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item mb-2 me-2">
                            <a class="nav-link active" aria-current="page" href="#"><i
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





    <!-- Final modal com cadastro -->

    <main class="mt-3 pt-3">

        <div class="container">
            <img src="imagens/termos-img.jpg" alt="" class="img-termos">



        </div>

        <div class="accordion mb-5" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button fundo-azul-escuro texto-branco" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                        aria-controls="collapseOne">
                        INTRODUÇÃO
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p class="">O presente Termo foi desenvolvido para regular e estabelecer as principais regras e
                            informações referentes ao cadastro da plataforma Odilo a ser realizado pelo Usuário para a
                            utilização e acesso ao Acervo Digital.
                            A Plataforma Cl Books é disponibilizada para o Usuário, com o objetivo de oferecer maior
                            acessibilidade a conteúdos digitais, integrando a função social das bibliotecas aos meios
                            tecnológicos disponíveis.
                            O Termo poderá ser atualizado a qualquer tempo, sem necessidade de aceitação formal
                            pelo Usuário, de modo que o Usuário deverá tomar conhecimento das eventuais
                            atualizações mediante o acesso na Plataforma Digital sempre que informado da
                            atualização. A manutenção do cadastro na Plataforma Digital será considerada como
                            reconhecimento e aceite tácito dos termos atualizados.
                            As orientações estabelecidas neste Termo deverão ser estritamente observadas pelos
                            Usuários como forma de garantir a utilização da Plataforma Digital e acesso ao Acervo
                            Digital com segurança e observância aos direitos de terceiros.
                            Para perguntas e dúvidas quanto à utilização da Plataforma Digital e das orientações
                            estabelecidas neste Termo, o Usuário poderá entrar em contato diretamente pela
                            Plataforma Digital por meio do canal de comunicação informado nesta.
                        </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button fundo-azul-escuro texto-branco collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                        aria-controls="collapseTwo">
                        CADASTRO
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Para que o Usuário tenha acesso ao Acervo Digital, será necessária a realização de
                        Cadastro prévio, com o fornecimento de dados pessoais que possibilitem a criação do
                        acesso mediante um login e senha.
                        Somente será permitido um único Cadastro por Usuário, sendo necessário para sua
                        efetivação o preenchimento de todos os campos exigidos no respectivo formulário de
                        Cadastro de Usuário.
                        No momento do Cadastro, o Usuário deverá escolher uma senha pessoal que deve ser
                        intransferível, por meio da qual ele terá acesso ao Acervo Digital, comprometendo-se a não
                        informá-la a terceiros e responsabilizando-se exclusiva e pessoalmente pelo seu uso.
                        O Usuário deverá realizar o Cadastro com informações atualizadas e verídicas, devendo
                        sempre manter as informações atualizadas, responsabilizando-se por eventual dano
                        causado em vista do fornecimento inverídico e desatualizado das informações necessárias.
                        É vedada a utilização de dados pessoais de terceiros para realização do cadastro.
                        O Cadastro poderá ser encerrado a qualquer momento pelo Usuário, mediante a solicitação
                        por meio do e-mail clbooks@outlook.com.
                        A Cl books se reserva o direito de encerrar automaticamente o Cadastro do Usuário caso
                        seja verificada a utilização de forma irregular da Plataforma Digital ou o descumprimento de
                        qualquer das orientações estabelecidas neste Termo.

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fundo-azul-escuro texto-branco" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                        aria-controls="collapseThree">
                        COLETA E TRATAMENTO DE DADOS PESSOAIS
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        A Cl Books segue todas as legislações aplicáveis ao processamento de seus dados
                        pessoais, inclusive, mas sem se limitar a Lei nº 13.709 de 14 de agosto de 2018 – Lei Geral
                        de Proteção de Dados.
                        A Plataforma possui medidas de segurança técnicas e organizacionais para garantir a
                        segurança dos dados pessoais dos Usuários, de acordo com os padrões de mercado e
                        exigidos pela legislação aplicáveis e exige que todos os seus fornecedores possuam
                        medidas de segurança não menos restritivas do que as da Cl Books.
                        Para a utilização da Plataforma, o fornecimento de alguns dados pessoais do Usuário
                        será essencial e outros poderão ser fornecidos apenas se o Usuário concordar com a sua
                        utilização.

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fundo-azul-escuro texto-branco" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                        aria-controls="collapseFour">
                        ACEITAÇÃO DOS TERMOS E CONDIÇÕES DE USO
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        A manutenção do Cadastro está condicionada à aceitação e ao cumprimento dos Termos e
                        Condições de Uso. O Usuário, ao realizar o Cadastro automaticamente concorda em se
                        submeter às regras e procedimentos estabelecidos no presente Termo.
                        É de inteira responsabilidade do Usuário a leitura atenta e o esclarecimento de dúvidas
                        referentes ao presente Termo antes de realizar o Cadastro.
                    </div>
                </div>
            </div>
        </div>



    </main>

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

    <!-- Início Modal com cadastro -->
    <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">
                        Criar Conta
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="" class="form-label">Email:</label>
                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                            placeholder="" />

                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Senha:</label>

                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                            placeholder="" />

                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Senha(confirmação):</label>
                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                            placeholder="" />

                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Data de Nascimento:</label>
                        <input type="date" class="form-control" name="" id="" aria-describedby="helpId"
                            placeholder="" />



                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Fechar
                    </button>
                    <button type="button" class="btn btn-primary">Enviar</button>
                </div>
                <div class="input-group mb-3 m-2">
                    <div class="input-group-text">
                        <input class="form-check-input mt-0" type="checkbox" value=""
                            aria-label="Checkbox for following text input">
                        <label class="m-2">Concordo com os <a href="termos-condicoes.html">termos e
                                condições</a></label>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- Início Modal com login -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">
                        Iniciar Sessão
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="" class="form-label">Email:</label>
                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                            placeholder="" />
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Senha:</label>
                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                            placeholder="" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Fechar
                    </button>
                    <button type="button" class="btn btn-primary">Enviar</button>
                </div>
                <a class="m-2" href="forgot-pass.html">esqueceu a senha?</a>
            </div>
        </div>
    </div>

    <!-- Final modal com login -->

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