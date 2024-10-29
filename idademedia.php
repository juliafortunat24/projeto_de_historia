<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="idademedia.css">
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
                    <li class="nav-item">
                        <a class="nav-link text-white" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="sobre.php">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="contato.php">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="servicos.php">Serviços</a>
                    </li>
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
    <!-- Seção de Introdução -->
    <section class="intro-section">
        <h2>O que é a Idade Média?</h2>
        <p>A Idade Média é o período histórico que se estende de aproximadamente 476 d.C., com a queda do Império Romano, até 1453 d.C., com a tomada de Constantinopla pelos turcos otomanos. Esse período é dividido em duas fases principais: a Alta Idade Média e a Baixa Idade Média, cada uma com características específicas.</p>
    </section>

    <!-- Seção dos Períodos Principais -->
    <section class="periods-section">
        <h2>Períodos da Idade Média</h2>
        <ul>
            <li><strong>Alta Idade Média (476 - 1000):</strong> Caracterizada pela formação dos primeiros reinos e pelo fortalecimento do cristianismo na Europa Ocidental. As invasões bárbaras e as constantes guerras marcaram essa fase, com a criação dos feudos.</li>
            <li><strong>Baixa Idade Média (1000 - 1453):</strong> Período de recuperação e expansão econômica, marcado pelo crescimento das cidades, desenvolvimento do comércio e fortalecimento das monarquias. As Cruzadas e o surgimento das universidades também se destacaram.</li>
        </ul>
    </section>

    <!-- Seção de Invenções e Conquistas -->
    <section class="inventions-section">
        <h2>Principais Invenções e Conquistas</h2>
        <ul>
            <li><strong>Invenções e Descobertas Tecnológicas:</strong>
                <ul>
                    <li><em>Moinho de Vento e Moinho de Água:</em> Aumentaram a produção agrícola.</li>
                    <li><em>Óculos:</em> Inventados no século XIII, ajudaram no trabalho de estudiosos.</li>
                    <li><em>Arado de Roda e Rotação de Culturas:</em> Melhoraram a agricultura.</li>
                    <li><em>Bússola e Astrolábio:</em> Contribuíram para a navegação e a Era das Descobertas.</li>
                    <li><em>Papel:</em> Chegou no século XII e facilitou o registro de informações.</li>
                    <li><em>Pólvora:</em> Mudou a natureza das guerras após ser introduzida no ocidente no século XIII.</li>
                </ul>
            </li>
            <li><strong>Conquistas Culturais e Científicas:</strong>
                <ul>
                    <li><em>Universidades:</em> Fundadas a partir do século XII, promoviam estudos variados.</li>
                    <li><em>Arquitetura Gótica:</em> Igrejas e catedrais com arcos ogivais e vitrais coloridos.</li>
                    <li><em>Literatura e Filosofia:</em> Obras como "A Divina Comédia" e o pensamento de Tomás de Aquino.</li>
                </ul>
            </li>
        </ul>
    </section>

    <!-- Seção da Vida Social e Cultural -->
    <section class="social-life-section">
        <h2>Vida Social e Cultural</h2>
        <p><em>Estrutura Social:</em> A sociedade medieval era hierárquica, com a nobreza e o clero no topo e camponeses e servos na base. O feudalismo organizava a economia e a sociedade.</p>
        <p><em>Religião:</em> O cristianismo influenciava todas as áreas da vida, e a Igreja Católica possuía grande poder.</p>
        <p><em>Cruzadas:</em> Expedições militares para recuperar Jerusalém dos muçulmanos, fortalecendo o comércio.</p>
        <p><em>Vida Cultural:</em> Música e literatura religiosas predominavam, mas trovadores começaram a explorar temas como amor e cavalaria.</p>
        <p><em>Arte e Arquitetura:</em> Desenvolvimento dos estilos românico e gótico, e popularidade dos manuscritos iluminados.</p>
    </section>

    <!-- Seção do Resumo -->
    <section class="summary-section">
        <h2>Resumo</h2>
        <p>A Idade Média foi um período de transformação, marcado pela forte presença da religião, sistema feudal e hierarquias sociais rígidas. Ao mesmo tempo, invenções e práticas econômicas e culturais surgiram, preparando a Europa para a Renascença.</p>
    </section>
</div>

</html>