<?php
session_start();

// Lógica para preparar itens do menu
$menuPrincipal = '
    <li class="nav-item">
        <a class="nav-link text-white" href="glossario.php">Glossário</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white" href="idadeantiga.php">Idade Antiga</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white" href="idadecontemporanea.php">Idade Contemporânea</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white" href="idademedia.php">Idade Média</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white" href="idademoderna.php">Idade Moderna</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white" href="idadeprimitiva.php">Idade Primitiva</a>
    </li>
    <li class="nav-item">
            <a class="nav-link text-white" href="../bd/logout.php">Sair</a>
    </li>
';

$menuUsuarioEspecifico = '';

if (isset($_SESSION['tipo_sessao'])) {
    if ($_SESSION['tipo_sessao'] === 'administrador') {
        $menuUsuarioEspecifico .= '
            <li class="nav-item">
                <a class="nav-link text-white" href="administrador.php">Página do Administrador</a>
            </li>
        ';
    } elseif ($_SESSION['tipo_sessao'] === 'aluno') {
        $menuUsuarioEspecifico .= '
            <li class="nav-item">
                <a class="nav-link text-white" href="aluno.php">Página do Aluno</a>
            </li>
        ';
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/idadeprimitiva.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="pos-f-t">
        <div class="offcanvas offcanvas-start bg-dark text-white custom-offcanvas" tabindex="-1" id="offcanvasNavbar"
             aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav">
                    <!-- Primeira parte: itens específicos de cada tipo de usuário -->
                    <?php echo $menuUsuarioEspecifico; ?>
                    <!-- Segunda parte: itens visíveis para todos -->
                    <?php echo $menuPrincipal; ?>
                </ul>
            </div>
        </div>

        <nav class="navbar navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                    aria-controls="offcanvasNavbar" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </div>

    <style>
        #offcanvasNavbar {
            width: 250px;

        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <header>
        <h1>A Idade Primitiva</h1>
    </header>

    <div class="container">
        <section class="intro-section">
            <div class="image-container">
                <img src="../img/img idade primitiva.jpg" alt="Imagem representativa da Idade Primitiva">
            </div>
            <div class="info-container">
                <h2>O que é a Idade Primitiva?</h2>
                <p>A Idade Primitiva é o período da história que abrange o surgimento dos primeiros seres humanos, suas
                    sociedades e a evolução tecnológica. Ela corresponde ao intervalo que vai desde o surgimento do
                    homem,
                    há cerca de 2,5 milhões de anos, até a invenção da escrita, por volta de 3.500 a.C.</p>
                <a href="../img/Mapa Mental Períodos da Pré-História.jpg" target ="_blank" ><h5>Acesse aqui um mapa mental sobre a Idade Primitiva</h5></a>
            </div>
        </section>

        <section class="cards-section">
            <div class="card">
                <h2>Períodos da Idade Primitiva</h2>
                <p>A Idade Primitiva é dividida em dois grandes períodos:</p>
                <ul>
                    <li><strong>Paleolítico:</strong> Também conhecido como Idade da Pedra Lascada, foi o período mais
                        longo
                        da história humana, onde os primeiros hominídeos usavam ferramentas rudimentares feitas de
                        pedra.
                    </li>
                    <li><strong>Neolítico:</strong> Conhecido como Idade da Pedra Polida, este período viu o
                        desenvolvimento
                        de ferramentas mais sofisticadas e a introdução da agricultura, possibilitando a sedentarização
                        das
                        primeiras civilizações.</li>

                    <li><strong>Idade dos Metais:</strong> foi dividida em três etapas: Idade do Cobre, Idade do Bronze e Idade do Ferro. Nesse período, houve avanços significativos na fabricação de ferramentas, armas e utensílios, além do desenvolvimento de trocas comerciais. 
                    </li>
                </ul>
            </div>

            <div class="card">
                <h2>Principais Invenções e Conquistas</h2>
                <p>Entre as principais conquistas da Idade Primitiva estão:</p>
                <ul>
                    <li><strong>Fogo:</strong> O domínio do fogo foi uma das maiores conquistas da humanidade,
                        permitindo a
                        proteção contra o frio, o preparo de alimentos e a defesa contra animais selvagens.</li>
                    <li><strong>Ferramentas:</strong> O uso de pedras, ossos e madeira para criar ferramentas que
                        facilitaram a caça, pesca e defesa.</li>
                    <li><strong>Agricultura e Pecuária:</strong> No Neolítico, a domesticação de plantas e animais
                        revolucionou a organização social, resultando em aldeias permanentes e o surgimento da economia
                        agrícola.</li>
                </ul>
            </div>

            <div class="card">
                <h2>Vida Social e Cultural</h2>
                <p>Durante a Idade Primitiva, os seres humanos viviam em pequenas tribos nômades. A vida social era
                    baseada
                    na cooperação para caça, pesca e coleta de alimentos. A cultura era transmitida oralmente e, no
                    final
                    desse período, surgiram as primeiras manifestações artísticas, como as pinturas rupestres.</p>
                <img class="img_primi" src="../img/img primitiva card.jpg" alt="" width="90%" height="40%">
            </div>
        </section>

        <section class="cards-section2">
            <div class="card">
                <center>
                    <h2>Imagens da Idade Primitiva</h2>
                </center>
                <div class="image-gallery">
                    <div class="image-container">
                        <img src="../img/imagem fogo.jpg" alt="Fogo">
                        <span class="overlay-text">Criação do fogo</span>
                    </div>
                    <div class="image-container">
                        <img src="../img/pinturas rupestres.jpg" alt="Pinturas Rupestres">
                        <span class="overlay-text">Pinturas realizadas nas paredes das cavernas para representar o cotidiano deles</span>
                    </div>
                    <div class="image-container">
                        <img src="../img/ferramentas primitivas.jpg" alt="Ferramentas Primitivas">
                        <span class="overlay-text">Ferramentas utilizadas para caça e pesca</span>
                    </div>
                </div>
            </div>

        </section>

        <!-- Seção da Videoaula -->
        <section class="video-section">
            <h3>Videoaula sobre a Idade Primitiva</h3>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/jcb6VrYNxYc?si=vxPRnJ-Gv6Bqb7lh" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </section>

        <section class="video-section">
            <h3>Videoaula sobre a Idade dos Metais</h3>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/eSET8IkMQ2k?si=S8oUfY9YPoyxEyrB" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </section>
    </div>
    <footer>
        <div class="footer-container">
            <div class="footer-row">
                <div class="footer-column">
                    <h4>Contato</h4>
                    <ul>
                        <li><a href="https://www.sp.senai.br/unidade/taubate/">https://www.sp.senai.br/unidade/taubate/</a></li>
                        <li><a href="tel:+551236095701">+55 (12) 3609-5701</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4>Endereço</h4>
                    <ul>
                        <li>SENAI Félix Guisard</li>
                        <li>Av. Independência, 846 - Independência,<br> Taubaté - SP, 12031-001</li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4>Integrantes</h4>
                    <ul>
                        <li><a href="https://www.instagram.com/cibelyy.santos/">Cibely Santos</a></li>
                        <li><a href="https://www.linkedin.com/in/gabriel-gon%C3%A7alves-3b75a92b7/">Gabriel Moreira</a></li>
                        <li><a href="https://www.instagram.com/_jufortunatos/">Julia Fortunato</a></li>
                        <li><a href="https://www.instagram.com/luizsantana07_/">Luiz Gustavo Santana</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>