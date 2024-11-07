<?php
session_start();

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
    <title>Idade Moderna</title>
    <link rel="icon" href="../img/img_para_colocar_no_title-removebg-preview.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/idademoderna.css">
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
                   
                    <?php echo $menuUsuarioEspecifico; ?>
                  
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
        <h1>A Idade Moderna</h1>
    </header>

    <div class="container">
       
        <section class="intro-section">
            <div class="image-container">
                <img src="../img/img idade moderna.jpg" alt="Imagem representativa da Idade Primitiva">
            </div>
            <div class="info-container">
                <h2>O que é a Idade Moderna?</h2>
                <p>A Idade Moderna foi um período de grandes inovações culturais, científicas e econômicas. Foi um tempo em que o pensamento racional e a ciência ganharam força, questionando as tradições e promovendo ideias que moldaram a sociedade moderna.</p>
                <a href="../img/IDADE MODERNA mapa.jpg" target="_blank"><h5>Acesse aqui um mapa mental sobre a Idade Moderna</h5></a>
            </div>
        </section>

        <section class="cards-section">
            <div class="card">
                <h2>Períodos da Idade Moderna</h2>
                <ul>
                    <li><strong>Renascimento (séculos XV - XVI):</strong> Movimento cultural e intelectual que valorizou a ciência, a arte e a cultura greco-romana. O humanismo se destacou, colocando o ser humano como o centro das preocupações.
                    </li>
                    <li><strong>Grandes Navegações e Expansão Marítima (séculos XV - XVII):</strong> As potências europeias, como Portugal e Espanha, iniciaram as Grandes Navegações, explorando novos territórios e expandindo o comércio global.
                    </li>
                    <li><strong>Reforma Protestante e Contrarreforma (século XVI):</strong> A Reforma Protestante de Martinho Lutero criticou a Igreja Católica, levando à divisão do cristianismo e à criação do protestantismo. A Igreja respondeu com a Contrarreforma.</li>
                    <li><strong>Absolutismo e Iluminismo (séculos XVII - XVIII):</strong> As monarquias absolutistas consolidaram seu poder, enquanto o Iluminismo trouxe ideias de liberdade e igualdade, influenciando a política e preparando o caminho para as revoluções modernas.
                    </li>
                </ul>
            </div>


            <div class="card">
                <h2>Principais Invenções e Conquistas</h2>
                <p>Entre as principais conquistas da Idade Moderna estão:</p>
                <ul>
                    <li><strong>Telescópio e Microscópio:</strong> Inventados no início do século XVII, revolucionaram a astronomia e a biologia, respectivamente.</li>
                    <li><strong>Termômetro e Barômetro:</strong>  Permitiram avanços na meteorologia e no estudo científico do clima.
                    </li>
                    <li><strong>Descobertas Geográficas:</strong> Explorações de Cristóvão Colombo, Vasco da Gama e Fernão de Magalhães abriram novas rotas comerciais e possibilitaram a colonização de novos territórios.
                    </li>
                    <li><strong>Teoria Heliocêntrica de Copérnico:</strong> Mudou a visão do universo, sendo posteriormente defendida por Galileu.
                    </li>
                    <img class="img_primi" src="../img/imagem globo.jpg" alt="" width="90%" height="40%">
                </ul>
            </div>

            <div class="card">
                <h2>Vida Social e Cultural</h2>
                <ul>
                    <li><strong>Estrutura Social:</strong> A escravidão foi amplamente praticada nas colônias, principalmente na América, e estava ligada à exploração agrícola e de recursos naturais.</li>
                    <li><strong>Religião e Reforma:</strong>  A Reforma Protestante, liderada por Martinho Lutero, criticou abusos da Igreja Católica e gerou o surgimento de novas vertentes cristãs. A Igreja respondeu com a Contrarreforma, buscando reafirmar sua autoridade.
                    Conflitos religiosos, como a Guerra dos Trinta Anos, marcaram essa época.
                    </li>
                    <li><strong>Renascimento Cultural:</strong> No Renascimento, artistas como Leonardo da Vinci, Michelangelo e Rafael inovaram na pintura e na escultura, explorando a perspectiva e a anatomia humana. Escritores e dramaturgos como Shakespeare e Cervantes exploraram temas complexos sobre a condição humana e ajudaram a popularizar o teatro e a literatura.
                    </li>
                    <li><strong>Economia e Comércio:</strong> O mercantilismo tornou-se o modelo econômico dominante, incentivando a acumulação de riquezas e a exploração de colônias.
                    </li>
                </ul>
            </div>
        </section>

        <section class="cards-section2">
            <div class="card">
                <center>
                    <h2>Imagens da Idade Primitiva</h2>
                </center>
                <div class="image-gallery">
                    <div class="image-container">
                        <img src="../img/navegacoes.jpg" alt="navios">
                        <span class="overlay-text">Grandes Navegações e Descobertas</span>
                    </div>
                    <div class="image-container">
                        <img src="../img/monalisa.png" alt="Renascimento">
                        <span class="overlay-text">Renascimento Artístico</span>
                    </div>
                    <div class="image-container">
                        <img src="../img/escravidao idade moderna.jpg" alt="Escravidao">
                        <span class="overlay-text">Escravidão e exploração</span>
                    </div>
                </div>
            </div>

        </section>

        <section class="video-section">
            <h2>Videoaula sobre a Idade Moderna</h2>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/MRE-8r7xI5Y?si=dYJqIdjriFyJM3Iq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </section>

        <section class="video-section">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/U2PaNszvdXU?si=LRcm31j-1OOBJOym" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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