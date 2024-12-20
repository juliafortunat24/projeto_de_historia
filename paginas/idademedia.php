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
    <title>Idade Média</title>
    <link rel="icon" href="../img/img_para_colocar_no_title-removebg-preview.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/idademedia.css">
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
        <h1>A Idade Média</h1>
    </header>

    <div class="container">
        <section class="intro-section">
            <div class="image-container">
                <img src="../img/img idade media.jpg" alt="Imagem representativa da Idade Media">
            </div>
            <div class="info-container">
                <h2>O que é a Idade Média?</h2>
                <p>A Idade Média é o período histórico que se estende de aproximadamente 476 d.C., com a queda do Império Romano, até 1453 d.C., com a tomada de Constantinopla. A Idade Média foi um período de transformação, marcado por um forte vínculo entre a religião e o cotidiano, pelo sistema feudal e pela estrutura social rígida. Ao mesmo tempo, surgiram invenções e práticas que impulsionaram a economia e a cultura, preparando a Europa para a Renascença que viria no final do período. </p>
                <a href="./img/Mapa Mental idade media.jpg" target="_blank"><h5>Acesse aqui um mapa mental sobre a Idade Média</h5></a>
            </div>
        </section>

        <section class="cards-section">
            <div class="card">
                <h2>Períodos da Idade Média</h2>
                <p>Esse período é dividido em duas fases principais: a Alta Idade Média e a Baixa Idade Média, cada uma com características específicas.
                </p>
                <ul>
                    <li><strong>Alta Idade Média (476 - 1000):</strong> Caracterizada pela formação dos primeiros reinos e pelo fortalecimento do cristianismo na Europa Ocidental. As invasões bárbaras, as constantes guerras e um processo de ruralização, com a criação dos feudos, também marcou essa fase.
                    </li>
    </br><li><strong>Baixa Idade Média (1000 - 1453):</strong> Um período de recuperação e expansão econômica, marcado pelo crescimento das cidades, pelo desenvolvimento do comércio e pelo fortalecimento das monarquias. As Cruzadas e o surgimento das universidades também se destacaram nessa fase.</li>
                </ul>
            </div>

            <div class="card">
                <h2>Principais Invenções e Conquistas</h2>
                <p>Entre as principais conquistas da Idade Média estão:</p>
                <ul>
                    <li><strong>Moinho de Vento e Moinho de Água:</strong> Utilizados para moer grãos e realizar outras tarefas agrícolas, contribuíram para o aumento da produção.</li>
                    <li><strong>Bússola e Astrolábio:</strong> Contribuíram para a navegação e o início da Era das Descobertas no final da Idade Média.</li>
                    <li><strong>Universidades:</strong> A partir do século XII, surgiram as primeiras universidades na Europa (Bolonha, Paris, Oxford), que incentivaram estudos em filosofia, teologia, direito e medicina.</li>
                    <li><strong>Arquitetura Gótica:</strong> Desenvolvida no século XII, trouxe catedrais e igrejas grandiosas com arcos ogivais e vitrais coloridos, como as catedrais de Notre-Dame e Chartres.</li>
                </ul>
            </div>

            <div class="card">
                <h2>Vida Social e Cultural</h2>
                <ul>
                    <li><strong>Feudalismo:</strong> O sistema feudal estruturava a economia e a sociedade, com terras divididas em feudos e senhores feudais detendo o poder local.</li>
                    <li><strong>Religião:</strong> O cristianismo era a principal religião, exercendo grande influência na vida das pessoas e na política. A Igreja Católica era poderosa e possuía vastas terras. Mosteiros e igrejas eram centros de conhecimento e arte.
                    </li>
                    <li><strong>Estrutura Social:</strong> A sociedade medieval era hierárquica e dividida em estamentos. No topo estavam a nobreza (senhores feudais) e o clero, que possuíam terras e poder. Abaixo estavam os camponeses e servos, que trabalhavam nas terras em troca de proteção.</li>
                    <li><strong>Cultura:</strong> A música e a literatura eram influenciadas pela religião, mas a partir do século XIII, surgiram trovadores que cantavam temas sobre amor e cavalaria.</li>
                </ul>
            </div>
        </section>

        <section class="cards-section2">
            <div class="card">
                <center>
                    <h2>Imagens da Idade Média</h2>
                </center>
                <div class="image-gallery">
                    <div class="image-container">
                        <img src="../img/imagem igreja catolica.jpg" alt="Igreja">
                        <span class="overlay-text">Grande influência da Igreja Católica</span>
                    </div>
                    <div class="image-container">
                        <img src="../img/feudos.jpg" alt="Feudos">
                        <span class="overlay-text">Feudos</span>
                    </div>
                    <div class="image-container">
                        <img src="../img/Cerimônia de vassalos.jpg" alt="Cerimônia dos vassalos">
                        <span class="overlay-text">Cerimônia dos vassalos</span>
                    </div>
                </div>
            </div>

        </section>

        <section class="video-section">
            <h3>Videoaula sobre a Idade Média</h3>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/QjoHiK_luxw?si=2Xi-5eO9oRC0vvTr" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </section>

        <section class="video-section">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/CTIs_RSPr84?si=SQYJSU4k40PDrVqS" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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