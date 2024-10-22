<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
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
        <h1>A Idade Primitiva</h1>
    </header>

    <div class="container">
        <!-- Seção da Imagem e Informações -->
        <section class="intro-section">
            <div class="image-container">
                <img src="caminho/para/sua/imagem.jpg" alt="Imagem representativa da Idade Primitiva">
            </div>
            <div class="info-container">
                <h2>O que é a Idade Primitiva?</h2>
                <p>A Idade Primitiva é o período da história que abrange o surgimento dos primeiros seres humanos, suas
                    sociedades e a evolução tecnológica. Ela corresponde ao intervalo que vai desde o surgimento do
                    homem,
                    há cerca de 2,5 milhões de anos, até a invenção da escrita, por volta de 3.500 a.C.</p>
            </div>
        </section>

        <!-- Cards para informações adicionais -->
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
            </div>
        </section>

        <!-- Seção da Videoaula -->
        <section class="video-section">
            <h2>Videoaula sobre a Idade Primitiva</h2>
            <iframe src="https://www.youtube.com/embed/EXEMPLO" frameborder="0" allowfullscreen></iframe>
        </section>
    </div>
</body>

</html>