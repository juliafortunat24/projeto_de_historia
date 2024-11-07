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
    <link rel="stylesheet" href="../css/idadeantiga.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="pos-f-t">
        <div class="offcanvas offcanvas-start bg-dark text-white custom-offcanvas" tabindex="-1" id="offcanvasNavbar"
             aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
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
        <h1>A Idade Antiga</h1>
    </header>

    <div class="container">
        <!-- Seção da Imagem e Informações -->
        <section class="intro-section">
            <div class="image-container">
                <img src="../img/img idade antiga.jpg" alt="Imagem representativa da Idade Primitiva">
            </div>
            <div class="info-container">
                <h2>O que é a Idade Antiga?</h2>
                <p>A Idade Antiga, que vai aproximadamente de 4.000 a.C. até 476 d.C., é marcada pelo surgimento das
                    primeiras civilizações e pelo desenvolvimento das primeiras grandes culturas organizadas. Podemos
                    dividi-la em algumas fases e regiões importantes, com inovações e características distintas.</p>
                <a href="../img/Mapa Idade Antiga.jpg" target="_blank"><h5>Acesse aqui um mapa mental sobre a Idade Antiga</h5></a>
            </div>
        </section>

        <!-- Cards para informações adicionais -->
        <section class="cards-section">
            <div class="card">
                <h2>Períodos da Idade Antiga</h2>
                <p>A Idade Antiga é dividida em dois períodos:</p>
                <ul>
                    <li><strong>Período Pré-Clássico (4.000 a.C. - 2.000 a.C.):</strong> Surgem as primeiras
                        civilizações e
                        cidades-estado, especialmente no Oriente Médio, como a Mesopotâmia e o Egito.
                    </li>
                    <li><strong>Período Clássico (2.000 a.C. - 476 d.C.):</strong> Engloba várias civilizações em
                        regiões como o Egito, a Grécia e Roma, com um desenvolvimento intenso na política, filosofia e
                        ciências.
                    </li>
                </ul>
                <h2>Vida Social e Cultural</h2>
                <ul>
                    <li><strong>Estrutura Social:</strong> Geralmente era hierárquica, com uma elite no topo (nobres,
                        sacerdotes, reis ou imperadores) e classes mais baixas (artesãos, camponeses e escravos).</li>
                    <li><strong>Religião:</strong> A maioria das civilizações era politeísta</li>
                    <li><strong>Cultura e Arte:</strong> Cada civilização desenvolveu um estilo único e simbólico,
                        refletindo suas crenças e valores.</li>
                </ul>
            </div>

            <div class="card">
                <h2>Principais Civilizações Orientais e suas Invenções</h2>
                <p>Entre as principais civilizações orientais e suas invenções da Idade Antiga estão:</p>
                <ul>
                    <li><strong>Mesopotâmia:</strong> </br>Invenções: Escrita cuneiforme, o conceito de cidade, roda e
                        primeiras leis (Código de Hamurabi).</br>
                        Conquistas: Desenvolvimento agrícola, matemático e primeiros sistemas de irrigação.</li>
                    <li><strong>Egito Antigo:</strong> </br> Invenções: Escrita hieroglífica, construção das pirâmides,
                        avanços na medicina e arquitetura.</br>
                        Conquistas: Expansão territorial, sistema avançado de irrigação e organização social.</li>
                    <li><strong>China Antiga:</strong> </br> Invenções: Papel, pólvora, seda, compasso e primeiros
                        sistemas de governo centralizados.</br>
                        Conquistas: Grande Muralha, avanços na agricultura e metalurgia, pensamento filosófico
                        (Confucionismo e Taoísmo).</li>
                </ul>
            </div>

            <div class="card">
                <h2>Principais Civilizações Clássicas e suas Invenções</h2>
                <p>Entre as principais civilizações clássicas e suas invenções da Idade Antiga estão:</p>
                <ul>
                    <li><strong>Grécia Antiga:</strong> </br>Invenções: Democracia, teatro, filosofia, Olimpíadas e
                        estudos matemáticos.</br>
                        Conquistas: Grande influência cultural e intelectual, expansões militares e desenvolvimento de
                        cidades-estado, como Atenas e Esparta.
                    </li>
                    <li><strong>Roma Antiga:</strong> </br>Invenções: Concreto, aquedutos, sistema de estradas,
                        engenharia avançada e direito romano.</br>
                        Conquistas: Expansão territorial e criação do maior império da época, influenciando a política,
                        economia e cultura.</li>
                </ul>
            </div>
        </section>

        <section class="cards-section2">
            <div class="card">
                <center>
                    <h2>Imagens da Idade Antiga</h2>
                </center>
                <div class="image-gallery">
                    <div class="image-container">
                        <img src="../img/escrita cuneiforme.jpg" alt="Escrita Cuneiforme">
                        <span class="overlay-text">Escrita Cuneiforme: Primeira forma de escrita criada na
                            humanidade</span>
                    </div>
                    <div class="image-container">
                        <img src="../img/img_antiga.jpg" alt="Pinturas Rupestres">
                        <span class="overlay-text">Construção de templos e pirâmides</span>
                    </div>
                    <div class="image-container">
                        <img src="../img/img filosofia idade antiga.jpg" alt="Ferramentas Primitivas">
                        <span class="overlay-text">Desenvolvimento do pensamento filosófico</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="video-section">
            <h3>Videoaula sobre a Idade Antiga</h3>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Hko3IGt-VzA?si=U-Y6ruY1s3oay8QP" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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