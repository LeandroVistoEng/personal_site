<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Centro Boa Forma - Seu espaço de saúde</title>
    <meta name="description" content="O melhor centro de saúde do Brasil.">

    <!--Google Icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- FONT AWESOME-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!--MATERIALIZE CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <!--CUSTOM CSS-->
    <link rel="stylesheet" href="./css/custom.css">

</head>

<body>
    <!-- HEADER -->
    <header>
        <!-- MENU MOBILE -->
        <ul class="side-nav " id="menu-mobile">
            <li><a class="hide-menu" href="#home">Home</a></li>
            <li><a class="hide-menu" href="#sobre">Sobre</a></li>
            <li><a class="hide-menu" href="#servicos">Serviços</a></li>
            <li><a class="hide-menu" href="#contato">Contato</a></li>
        </ul>
        <div class="navbar-fixed">
            <nav class="navbar z-depth-0">
                <div class="nav-wrapper container">
                    <h1 class="logo_text">Centro Boa Forma - Seu espaço de saúde</h1>
                    <a href="http://"><img class="logo_img" src="./img/logo.png" alt="Centro Boa Forma"></a>
                    <ul class="right light hide-on-med-and-down">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#sobre">Sobre</a></li>
                        <li><a href="#servicos">Serviços</a></li>
                        <li><a href="#contato">Contato</a></li>
                    </ul>
                    <a href="#" data-activates="menu-mobile" class="button-collapse right"><i
                            class="material-icons">menu</i></a>
                </div>
            </nav>
        </div>
    </header>

    <!-- HOME -->
    <section class="home bloco scrollspy" id="home">
        <div class="row container banner">
            <div class="col s12 center">
                <h2 class="white-text">O melhor treinamento funcional da região</h2>
                <p class="white-text light">Um novo conceito em prevenção, promoção e reabilitação de saúde para quem
                    busca
                    melhora do condicionamento e emagrecimento, além de ser divertido e desafiador. Quer
                    experimentar?
                </p>
                <div class="row">
                    <a href="#sobre" class="btn btn-large blue-logo" href="#">Sobre nós</a>
                    <a href="#contato" class="btn btn-large white black-text" href="http://">Contato</a>
                </div>
            </div>
        </div>
    </section>

    <!-- SOBRE -->
    <section class="sobre bloco scrollspy" id="sobre">
        <div class="row container">
            <div class="col s12 center">
                <h2 class="light titulo">Sobre nós</h2>
            </div>
            <div class="col s12 l6">
                <p class="light">A Centro Boa Forma chegou a Itabuna e região trazendo um novo conceito em prevenção,
                    promoção e reabilitação da saúde. Localizada no centro da cidade, conta com fácil estacionamento,
                    salas amplas e climatizadas, ambiente confortável e seguro aos seus usuários.
                    Suas instalações foram projetadas e equipadas sob medida, dentro dos padrões de acessibilidade,
                    para acolher principalmente pessoas com limitações funcionais.
                    O centro dispõe de uma equipe profissional qualificada e com experiência no mercado,
                    prezando sempre por tratamentos individualizados e baseados em evidências científicas.
                    Localizada no centro da cidade, conta com fácil estacionamento, salas amplas e climatizadas,
                    ambiente confortável e seguro aos seus usuários. </p>
            </div>
            <div class="col s12 l6">
                <div class="carousel carousel-slider" data-indicators="true">
                    <a href="#" class="carousel-item">
                        <img src="./img/banner-01.jpg" alt="Imagem institucional">
                    </a>
                    <a href="#" class="carousel-item">
                        <img src="./img/banner-02.jpg" alt="Imagem institucional">
                    </a>
                    <a href="#" class="carousel-item">
                        <img src="./img/banner-03.jpg" alt="Imagem institucional">
                    </a>
                </div>
            </div>
        </div>
        <div class="row blue-logo missao-visao-valores">
            <div class="container">
                <article class="item col s12 m4 center">
                    <span class="icon">
                        <i class="material-icons medium">directions_run</i>
                    </span>
                    <h3 class="light">Missão</h3>
                    <p class="light">Promover a saúde e bem-estar dos clientes com ações de prevenção,
                        promoção e reabilitação,através de tratamentos eficazes e humanizados em Fisioterapia e suas
                        vertentes.
                    </p>
                </article>
                <article class="item col s12 m4 center">
                    <span class="icon">
                        <i class="material-icons medium">visibility</i>
                    </span>
                    <h3 class="light">Visão</h3>
                    <p class="light">Tornar-se referência no cenário estadual, buscando a excelência dos serviços
                        prestados,
                        além de promover o desenvolvimento técnico-científico de sua equipe e da sociedade.
                    </p>
                </article>
                <article class="item col s12 m4 center">
                    <span class="icon">
                        <i class="material-icons medium">grade</i>
                    </span>
                    <h3 class="light">Valores</h3>
                    <p class="light">
                        • Agir com ética frente aos clientes e colaboradores. <br>
                        • Tornar o ambiente de trabalho o mais familiar possível. <br>
                        • Priorizar a qualidade e excelência do atendimento, valorizando e qualificando a equipe.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- SERVIÇOS -->
    <section class="servicos bloco scrollpsy" id="servicos">
        <div class="row container">
            <div class="col s12 center">
                <h2 class="light titulo white-text">Serviços</h2>
                <p class="light paragrafo white-text">
                    Suas instalações foram projetadas e equipadas sob medida, dentro dos padrões de acessibilidade,
                    para acolher principalmente pessoas com limitações funcionais.
                    A clínica dispõe de uma equipe profissional qualificada e com experiência no mercado,
                    prezando sempre por tratamentos individualizados e baseados em evidências científicas.
                </p>
            </div>
        </div>
        <div class="row container">

            <!-- PILATES -->
            <article class="col s12 m6 l3">
                <div class="card">
                    <div class="card-image">
                        <img src="./img/pilates.jpg" alt="Pilates" class="materialboxed">
                        <a href="#pilates-modal" class="btn btn-floating halfway-fab blue-logo modal-trigger " href="#">
                            <i class="material-icons">more_horiz</i>
                        </a>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Pilates</h3>
                        <p class="light">
                            Pilates é um método de controle muscular desenvolvido por Joseph Pilates...
                        </p>
                    </div>
                </div>
            </article>
            <!-- MODAL PILATES -->
            <div class="modal" id="pilates-modal">
                <div class="modal-content">
                    <h5 class="light">O que é Pilates?</h5>
                    <p class="light black-text">
                        O Pilates é um método de exercício físico e alongamento que utiliza
                        o peso do próprio corpo na sua execução.
                        É uma técnica de reeducação do movimento que visa trabalhar o corpo todo,
                        trazendo equilíbrio muscular e mental.
                    </p>
                    <h5 class="light">Quais os beneficios do Pilates?</h5>
                    <ul class="collection">
                        <li class="collection-item">Alongar, tonificar e definir a musculatura sem exageros;</li>
                        <li class="collection-item">Melhorar a postura;</li>
                        <li class="collection-item">Tonificar a musculatura profunda do abdômen;</li>
                        <li class="collection-item">Prevenir e recuperar lesões; </li>
                        <li class="collection-item">Reduzir o “stress” e aliviar as tensões;</li>
                        <li class="collection-item">Deixar sua coluna mais forte e flexível;</li>
                        <li class="collection-item">Melhorar a área de movimento das articulações;</li>
                        <li class="collection-item">Melhora a circulação sanguínea;</li>
                        <li class="collection-item">Aumentar a coordenação e o equilíbrio;</li>
                        <li class="collection-item">Corrigir sobrecargas e alinhar os músculos;</li>
                        <li class="collection-item">Melhorar a mobilidade e a agilidade;</li>
                        <li class="collection-item">Complementar o seu treino esportivo;</li>
                        <li class="collection-item">Melhorar o visual de seu corpo e a sua auto-estima.</li>
                    </ul>
                </div>

                <div class="modal-footer">
                    <a href="#" class="btn blue-logo modal-action modal-close">Sair</a>
                </div>
            </div>

            <!-- NUTRIÇÃO -->
            <article class="col s12 m6 l3">
                <div class="card">
                    <div class="card-image">
                        <img src="./img/nutricao.jpg" alt="Nutrição" class="materialboxed">
                        <a href="#nutricao-modal" class="btn btn-floating halfway-fab blue-logo modal-trigger" href="#">
                            <i class="material-icons">more_horiz</i>
                        </a>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Nutrição</h3>
                        <p class="light">
                            Ele planeja, administra e coordena programas de alimentação e nutrição em empresas,
                            escolas...
                        </p>
                    </div>
                </div>
            </article>

            <!-- MODAL NUTRIÇÃO -->
            <div class="modal" id="nutricao-modal">
                <div class="modal-content">
                    <h5 class="light">Qual a importância da Nutrição? </h5>
                    <p class="light black-text">
                        Seja por um estilo de vida saudável ou para eliminar peso,
                        a preocupação com os alimentos é constante na rotina das pessoas.
                        Por isso é importante saber comer e dar relevância ao que se come.
                        Uma nutrição adequada pode prevenir doenças e tornar a vida mais saudável.
                    </p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn blue-logo modal-action modal-close">Sair</a>
                </div>
            </div>

            <!-- FISIOTERAPIA -->
            <article class="col s12 m6 l3">
                <div class="card">
                    <div class="card-image">
                        <img src="./img/fisioterapia.jpg" alt="Fisioterapia" class="materialboxed">
                        <a href="#fisioterapia-modal" class="btn btn-floating halfway-fab blue-logo modal-trigger"
                            href="#">
                            <i class="material-icons">more_horiz</i>
                        </a>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Fisioterapia</h3>
                        <p class="light">
                            O fisioterapeuta trata e previne doenças e lesões, empregando técnicas...
                        </p>
                    </div>
                </div>
            </article>

            <!-- MODAL FISIOTERAPIA -->
            <div class="modal" id="fisioterapia-modal">
                <div class="modal-content">
                    <h5 class="light">Qual a importância da Fisioterapia</h5>
                    <p class="light black-text">
                        A fisioterapia é indicada em diversos casos,
                        seja para tratar uma lesão por esforço repetitivo (LER) ou
                        em pacientes que acabaram de se operar para ajudar na recuperação dos órgãos e das cicatrizes
                        que podem incomodar a movimentação.
                        Ela geralmente tem uma atuação em longo prazo, na qual o paciente vai sentindo a melhora física
                        aos poucos. <br> <br>
                        O tratamento fisioterápico traz técnicas específicas que vão ajudar as pessoas a terem uma
                        recuperação motora de forma eficaz
                        e sem prejudicar algum outro aspecto do corpo. Além disso, a fisioterapia é importante na
                        prevenção de problemas.
                    </p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn blue-logo modal-action modal-close">Sair</a>
                </div>
            </div>

            <!-- FUNCIONAL -->
            <article class="col s12 m6 l3">
                <div class="card">
                    <div class="card-image">
                        <img src="./img/funcional.jpg" alt="Funcional" class="materialboxed">
                        <a href="#funcional-modal" class="btn btn-floating halfway-fab blue-logo modal-trigger "
                            href="#">
                            <i class="material-icons">more_horiz</i>
                        </a>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Funcional</h3>
                        <p class="light">
                            Funcional se refere a reprodução sistemática de movimentos que possuem alguma função...
                        </p>
                    </div>
                </div>
            </article>

            <!-- MODAL FUNCIONAL -->
            <div class="modal" id="funcional-modal">
                <div class="modal-content">
                    <h5 class="light">O que é treino funcional?</h5>
                    <p class="light black-text">
                        O termo funcional segundo o dicionário Aurélio significa:
                        “Permitir efetuar alguma coisa da melhor maneira”.
                        Podemos dizer então que o treino funcional visa aperfeiçoar os movimentos naturais das pessoas,
                        como andar, correr, pular, alongar, abaixar, levantar, etc. Uma das principais características
                        é que os exercícios são planejados de acordo com a necessidade da pessoa.
                        O treino funcional além de trabalhar os músculos isolados, exercita também todos os grupos
                        musculares do corpo humano. <br><br>
                        Alguns equipamentos são utilizados para realização dos exercícios, como: <br><br>
                        <ul class="collection">
                            <li class="collection-item">Cordas;</li>
                            <li class="collection-item">Pesos;</li>
                            <li class="collection-item">Elásticos;</li>
                            <li class="collection-item">Cones;</li>
                            <li class="collection-item">Jump;</li>
                            <li class="collection-item">Barras;</li>
                            <li class="collection-item">Bolas.</li>
                        </ul>
                    </p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn blue-logo modal-action modal-close">Sair</a>
                </div>
            </div>

            <!-- BOTÃO QUADRO DE HORÁRIOS -->
            <div class="row center btn-horario">
                <a href="#horarios-modal" class="btn btn-large blue-logo modal-trigger">
                    <i class="material-icons left">timer</i>
                    Quadro de Horários
                </a>
            </div>

            <!-- MODAL QUADRO DE HORÁRIOS -->
            <div class="modal" id="horarios-modal">
                <div class="modal-content">
                    <h5 class="light">Quadro de horários</h5>
                    <ul class="tabs">
                        <li class="tab col s3">
                            <a href="#tabela-pilates">Pilates</a>
                        </li>
                        <li class="tab col s3">
                            <a href="#tabela-musculacao">Pilates</a>
                        </li>
                        <li class="tab col s3">
                            <a href="#tabela-fitness">Fitness</a>
                        </li>
                        <li class="tab col s3">
                            <a href="#tabela-artes-marciais">Artes Marciais</a>
                        </li>
                    </ul>

                    <!-- TABELA PILATES -->
                    <table class="striped responsive-table" id="#tabela-pilates">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Segunda</th>
                                <th>Terça</th>
                                <th>Quarta</th>
                                <th>Quinta</th>
                                <th>Sexta</th>
                                <th>Sábado</th>
                                <th>Domingo</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>6:00 às 10:00</td>
                                <td>Pilates</td>
                                <td></td>
                                <td>Pilates</td>
                                <td></td>
                                <td>Pilates</td>
                                <td>Pilates</td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>14:00 às 22:00</td>
                                <td></td>
                                <td>Pilates</td>
                                <td></td>
                                <td>Pilates</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer"></div>
            </div>

        </div>
    </section>

    <!-- CONTATO -->
    <section class="contato bloco scrollpsy" id="contato">
        <div class="row container">
            <div class="col s12 center">
                <h2 class="titulo light black-text">Contato</h2>
            </div>

            <div class="col s12 m6 l4">
                <div class="informacoes white-text">
                    <h4 class="">Redes Sociais</h4>
                    <p class="light">Fique por dentro das novidades, receba dicas,
                        ou simplesmente mostre ao mundo que você faz parte desse projeto sensacional! </p>
                    <a href="#" class="btn-floating blue-logo">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="#" class="btn-floating blue-logo">
                        <i class="fa fa-google"></i>
                    </a>
                    <a href="#" class="btn-floating blue-logo">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#" class="btn-floating blue-logo">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <h4>Endereço</h4>
                    <p class="light">
                        Rua paraíso, 123 <br>
                        Bessa, João Pessoa - PB
                    </p>
                    <h4>Contatos</h4>
                    <p class="light">
                        (83) 3030-3030 <br>
                        (83) 99999-9999 <br>
                        (83) 98877-6655
                    </p>
                </div>
            </div>

            <div class="col s12 m6 l8">
                <div class="formulario white black-text">
                    <h4>Fale conosco</h4>
                    <p class="light">Dúvidas, criticas ou sujestões? Entre em contato conosco,
                        seu feedback é muito importante.
                    </p>
                    <form action="enviar-email.php" method="POST">
                        <div class="input-field">
                            <input type="text" name="name" id="name">
                            <label for="name">Seu nome</label>
                        </div>

                        <div class="input-field">
                            <input type="email" name="email" id="email">
                            <label for="email">Seu email</label>
                        </div>

                        <div class="input-field">
                            <input type="text" name="subject" id="subject">
                            <label for="subject">Assunto</label>
                        </div>

                        <div class="input-field">
                            <textarea name="" id="message" class="materialize-textarea"></textarea>
                            <label for="message">Mensagem</label>
                        </div>

                        <button class="btn blue-logo" type="submit">Enviar</button>
                    </form>
                </div>
            </div>

        </div>
    </section>

    <!-- DEPOIMENTOS -->
    <div class="depoimentos blue-logo">
        <div class="row container">
            <div class="col s12 center">
                <h2 class="titulo white-text light">Depoimentos</h2>
            </div>

            <div class="col s12 m4 center">
                <img src="./img/depo1.jpg" alt="Depoimento Felipe" class="circle responsive-img">
                <p class="light white-text">
                    "Conheci o treinamento funcional e a metodologia Centro Boa Forma por indicação de um amigo.
                    Execelentes profissionais e super atenciosos!"
                </p>
                <h4 class="light white-text">Felipe Souza</h4>
                <p class="white-text">
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                </p>
            </div>

            <div class="col s12 m4 center">
                <img src="./img/depo2.jpg" alt="Depoimento Bruno" class="circle responsive-img">
                <p class="light white-text">
                    "Gostei muito da oficina e das aulas, superou minhas expectativas. A empresa e os treinamentos foram
                    ótimos!"
                </p>
                <h4 class="light white-text">Bruno Valério</h4>
                <p class="white-text">
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                </p>
            </div>

            <div class="col s12 m4 center">
                <img src="./img/depo3.jpg" alt="Depoimento Joana" class="circle responsive-img">
                <p class="light white-text">
                    "Treinar com motivação e satisfação pelos resultados obtidos são os motivos que me conquistaram e me
                    mantém no Centro Boa Forma."
                </p>
                <h4 class="light white-text">Joana Souza</h4>
                <p class="white-text">
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                </p>
            </div>
        </div>
    </div>

    <!-- RODAPÉ -->
    <footer class="rodape">
        <div class="row container center">
            <img src="./img/logo.png" alt="logo" class="logo_img">
            <p class="light white-text">
                2020 © Centro Boa Forma - Todos os direitos reservados
            </p>
        </div>
    </footer>

    <!-- JQUERY JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">     </script>

    <!-- MATERIALIZE JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

    <!-- JAVASCRIPT -->
    <script>
        // INICIALIZAÇÃO
        $(document).ready(function () {
            // MENU MOBILE
            $(".button-collapse").sideNav();
            // LINK INTERNO
            $(".scrollspy").scrollSpy({
                scrollOffset: 0
            });
            // CAROUSEL
            $(".carousel.carousel-slider").carousel({
                fullWidth: true
            });
            // MODAL
            $(".modal").modal();
            // TABS
            $("ul.tabs").tabs();
            // ESCONDER MENU AO CLICAR
            $(".hide-menu").click(function () {
                $(".button-collpase").sideNav("hide");
            });
            // AUTOPLAY
            function autoplay() {
                $(".carousel").carousel("next");
                setTimeout(autoplay, 4500);
            }

            autoplay();
        });

        // ADICIONANDO NAVCOLOR
        $(window).on("scroll", function () {
            if ($(window).scrollTop() > 100) {
                $(".navbar").addClass("nav-color");
            } else {
                $(".navbar").removeClass("nav-color");
            }
        });
    </script>
    <script>
        <?php
        //Configuração para envio de email:
        if(isset($_GET['status'])):
            if($_GET['status'] == "sucesso"):
            echo "<script>Materialize.toast('Enviado com Sucesso!', 4000;</script>";
            else:
            echo "<script>Materialize.toast('erro ao Enviar!', 4000;</script>";
            endif;
        ?>
    </script>
</body>

</html>