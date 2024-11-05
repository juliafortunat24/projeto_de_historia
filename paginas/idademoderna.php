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
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav">
                <li class="nav-item">
                        <a class="nav-link text-white" href="index.php">Página Inicial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="glossario.php">Glossario</a>
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
        <h1>A Idade Moderna</h1>
    </header>

    <div class="container">
        <!-- Seção da Imagem e Informações -->
        <section class="intro-section">
            <div class="image-container">
                <img src="../img/img idade moderna.jpg" alt="Imagem representativa da Idade Primitiva">
            </div>
            <div class="info-container">
                <h2>O que é a Idade Moderna?</h2>
                <p>A Idade Moderna foi um período de grandes inovações culturais, científicas e econômicas. Foi um tempo em que o pensamento racional e a ciência ganharam força, questionando as tradições e promovendo ideias que moldaram a sociedade moderna.</p>
            </div>
        </section>

        <!-- Cards para informações adicionais -->
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

        <!-- Seção da Videoaula -->
        <section class="video-section">
            <h2>Videoaula sobre a Idade Moderna</h2>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/MRE-8r7xI5Y?si=dYJqIdjriFyJM3Iq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </section>

        <section class="video-section">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/U2PaNszvdXU?si=LRcm31j-1OOBJOym" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </section>
    </div>
</body>

</html>