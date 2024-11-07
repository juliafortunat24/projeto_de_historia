<?php
session_start();

if ($_SESSION['usuario_sessao']=="" && $_SESSION['tipo_sessao']=="") {
    header("Location: ../index.php");
    exit();
}

$menuPrincipal = '
    <li class="nav-item">
        <a class="nav-link text-white" href="glossario.php">Glossário</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white" href="idadeprimitiva.php">Idade Primitiva</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white" href="idadeantiga.php">Idade Antiga</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white" href="idademedia.php">Idade Média</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white" href="idademoderna.php">Idade Moderna</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white" href="idadecontemporanea.php">Idade Contemporânea</a>
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
    <title>Idade Contemporânea</title>
    <link rel="icon" href="../img/img_para_colocar_no_title-removebg-preview.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/idadecontemporanea.css">
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
        <h1>A Idade Contemporânea</h1>
    </header>

    <div class="container">
        <section class="intro-section">
            <div class="image-container">
                <img src="../img/img idade contemporanea.jpg" alt="Imagem representativa da Idade Primitiva">
            </div>
            <div class="info-container">
                <h2>O que é a Idade Contemporânea?</h2>
                <p>A Idade Contemporânea é o período histórico que começa em 1789, com a Revolução Francesa, e continua até os dias de hoje. Este período é marcado por transformações profundas na política, economia, ciência e cultura, impulsionadas pelas revoluções industriais e pelo avanço das ideias democráticas e dos direitos humanos.</p>
                <a href="../img/mapa idade contemporanea.jpg" target="_blank"><h5>Acesse aqui um mapa mental sobre a Idade Contemporânea</h5></a>
            </div>
        </section>

        <section class="cards-section">
            <div class="card">
                <h2>Períodos da Idade Contemporânea</h2>
                <ul>
                    <li><strong>Revolução Francesa e Revolução Industrial:</strong> A Revolução Francesa trouxe ideias de liberdade, igualdade e fraternidade, enquanto a Revolução Industrial, iniciada na Inglaterra, transformou a produção com o uso de máquinas, impactando a economia e a sociedade.
                    </li>
                    <li><strong>Guerras Mundiais e Período Entre Guerras :</strong> O século XX foi marcado pela Primeira e pela Segunda Guerra Mundial, conflitos devastadores que transformaram a política global e levaram à formação de alianças como a ONU.</li>
                    <li><strong>Guerra Fria e Descolonização:</strong> Após a Segunda Guerra, o mundo se dividiu entre o bloco capitalista, liderado pelos Estados Unidos, e o bloco comunista, liderado pela União Soviética. O período também viu a independência de várias colônias africanas e asiáticas.</li>
                    <li><strong>Era Contemporânea Globalizada:</strong> Com o fim da Guerra Fria, a globalização se intensificou, promovendo a integração econômica e cultural entre nações e acelerando o desenvolvimento tecnológico.</li>
                </ul>
            </div>

            <div class="card">
                <h2>Principais Invenções e Conquistas</h2>
                <ul>
                    <li><strong>Máquina a Vapor:</strong> Introduzida no século XVIII, revolucionou a indústria e os transportes.</li>
                    <li><strong>Eletricidade:</strong>A invenção da lâmpada por Thomas Edison e outros avanços energéticos mudaram o cotidiano.</li>
                    <li><strong>Automóvel e Avião:</strong> O carro e o avião revolucionaram o transporte e conectaram o mundo.
                    </li>
                    <li><strong>Telefone, Rádio e Televisão:</strong> Transformaram a comunicação, conectando pessoas globalmente.
                    </li>
                    <li><strong>Espaço e Medicina:</strong> A chegada do homem à Lua em 1969 e avanços na genética, como o mapeamento do DNA, expandiram o conhecimento humano.
                    </li>
                    <li><strong>Computador e Internet:</strong> Nos anos 1980 e 1990, o desenvolvimento da informática e da internet criou a sociedade da informação.
                    </li>
                    <li><strong>Direitos Humanos:</strong> A Declaração Universal dos Direitos Humanos, de 1948, consolidou a luta por igualdade e direitos civis.
                    </li>
                </ul>
            </div>

            <div class="card">
                <h2>Vida Social e Cultural</h2>
                <ul>
                    <li><strong>Política e Democracia:</strong> A democracia tornou-se o sistema político predominante, embora alguns países tenham mantido regimes autoritários. Guerras mundiais e o crescimento das Nações Unidas incentivaram uma busca por paz e cooperação internacional.</li>
                    <li><strong>Estrutura Economica:</strong>O capitalismo se consolidou como sistema econômico dominante, mas com desafios, como crises econômicas e desigualdades sociais.
                    </li>
                    <li><strong>Globalização e Multiculturalismo:</strong> A globalização conectou culturas e economias, promovendo uma troca intensa de ideias e produtos. No entanto, também trouxe desafios, como a preservação das culturas locais e as questões ambientais globais.
                    </li>
                    <li><strong>Estrutura Social:</strong>  A sociedade contemporânea viu o declínio da aristocracia e o fortalecimento da classe média. A Revolução Industrial gerou uma classe trabalhadora urbana e, mais tarde, a era digital transformou o mercado de trabalho.
                    </li>
                    <li><strong>Cultura e Artes:</strong> Movimentos artísticos como o modernismo, o expressionismo e o surrealismo desafiaram as normas tradicionais. O cinema e a música popular (jazz, rock, hip-hop) se tornaram influentes globalmente.
                    </li>
                </ul>
            </div>
        </section>

        <section class="cards-section2">
            <div class="card">
                <center>
                    <h2>Imagens da Idade Contemporânea</h2>
                </center>
                <div class="image-gallery">
                    <div class="image-container">
                        <img src="../img/revolução industrial.jpg" alt="Maquina a vapor">
                        <span class="overlay-text"> Maquina a Vapor (Revolução Industrial)</span>
                    </div>
                    <div class="image-container">
                        <img src="../img/imagem ONU.jpg" alt="Assembleia da ONU">
                        <span class="overlay-text">Surgimento da Organização das Nações Unidas</span>
                    </div>
                    <div class="image-container">
                        <img src="../img/globalização.jpg" alt="Globalização">
                        <span class="overlay-text">Globalização e Multiculturalismo</span>
                    </div>
                </div>
            </div>

        </section>


        <section class="video-section">
            <h2>Videoaula sobre a Idade Contemporânea</h2>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/D25cxMBC2qk?si=RDx3cMgfcUvEuVYE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
                            <li><a href="https://www.instagram.com/cibelyy.santos/" target="_blank">Cibely Santos</a></li>
                            <li><a href="https://www.linkedin.com/in/gabriel-gon%C3%A7alves-3b75a92b7/" target="_blank">Gabriel Moreira</a></li>
                            <li><a href="https://www.instagram.com/_jufortunatos/" target="_blank">Julia Fortunato</a></li>
                            <li><a href="https://www.instagram.com/luizsantana07_/" target="_blank">Luiz Gustavo Santana</a></li>
                        </ul>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>