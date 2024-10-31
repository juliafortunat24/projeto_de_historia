<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./glossario.css">
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
        <h1>Glossário</h1>
    </header>

    <div class="container">
        
        <!-- Cards para informações adicionais -->
        <section class="cards-section">
            <div class="card">
                <h2>Civilização</h2>
                <p>Conjunto complexo de culturas, instituições, tecnologias e avanços sociais de uma sociedade organizada.</p>
            </div>
            <div class="card">
                <h2>Oriente Médio</h2>
                <p>Região geográfica que abrange partes da Ásia Ocidental e Norte da África, conhecida por sua importância histórica, cultural e política.</p>
            </div>
            <div class="card">
                <h2>Código de Hamurabi</h2>
                <p>Conjunto de leis babilônicas criadas pelo rei Hamurabi por volta de 1754 a.C., um dos mais antigos códigos legais escritos da história.</p>
            </div>
            <div class="card">
                <h2>Escrita hieroglífica</h2>
                <p>Sistema de escrita da antiga civilização egípcia, utilizando símbolos pictográficos para representar palavras e sons.</p>
            </div>
            <div class="card">
                <h2>Pólvora</h2>
                <p>Mistura explosiva de salitre, carvão e enxofre, inventada na China, usada inicialmente para fogos de artifício e mais tarde em armamentos.</p>
            </div>
            <div class="card">
                <h2>Expansão</h2>
                <p>Processo de crescimento territorial, econômico ou cultural de uma civilização ou império, frequentemente através de conquistas e colonização.</p>
            </div>
            <div class="card">
                <h2>Confucionismo</h2>
                <p>Sistema filosófico e ético baseado nos ensinamentos de Confúcio, enfatizando moralidade, família, respeito pelos anciãos e harmonia social.</p>
            </div>
            <div class="card">
                <h2>Taoismo</h2>
                <p>Tradição filosófica e religiosa chinesa que busca a harmonia com o Tao (Caminho), enfatizando a simplicidade, espontaneidade e a conexão com a natureza.</p>
            </div>
        </section>

    </div>
</body>

</html>
