<!DOCTYPE html> 
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glossário</title>
    <link rel="stylesheet" href="../css/glossario.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #offcanvasNavbar {
            width: 250px;
        }
    </style>
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

    <header>
        <h1 class="text-center my-4">Glossário</h1>
    </header>

    <div class="container">
        <div class="mb-4">
            <h2>Adicionar Nova Entrada</h2>
            <form id="addEntryForm">
                <div class="mb-3">
                    <label for="term" class="form-label">Termo</label>
                    <input type="text" class="form-control" id="term" required>
                </div>
                <div class="mb-3">
                    <label for="definition" class="form-label">Definição</label>
                    <textarea class="form-control" id="definition" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Adicionar</button>
            </form>
        </div>

        <section class="cards-section" id="glossaryCards">
            <!-- Entradas existentes -->
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Civilização</h5>
                    <p class="card-text">Conjunto complexo de culturas, instituições, tecnologias e avanços sociais de uma sociedade organizada.</p>
                    <button class="btn btn-warning" onclick="editEntry(this)">Editar</button>
                    <button class="btn btn-danger" onclick="deleteEntry(this)">Excluir</button>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Oriente Médio</h5>
                    <p class="card-text">Região geográfica que abrange partes da Ásia Ocidental e Norte da África, conhecida por sua importância histórica, cultural e política.</p>
                    <button class="btn btn-warning" onclick="editEntry(this)">Editar</button>
                    <button class="btn btn-danger" onclick="deleteEntry(this)">Excluir</button>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Código de Hamurabi</h5>
                    <p class="card-text">Conjunto de leis babilônicas criadas pelo rei Hamurabi por volta de 1754 a.C., um dos mais antigos códigos legais escritos da história.</p>
                    <button class="btn btn-warning" onclick="editEntry(this)">Editar</button>
                    <button class="btn btn-danger" onclick="deleteEntry(this)">Excluir</button>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Escrita hieroglífica</h5>
                    <p class="card-text">Sistema de escrita da antiga civilização egípcia, utilizando símbolos pictográficos para representar palavras e sons.</p>
                    <button class="btn btn-warning" onclick="editEntry(this)">Editar</button>
                    <button class="btn btn-danger" onclick="deleteEntry(this)">Excluir</button>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Pólvora</h5>
                    <p class="card-text">Mistura explosiva de salitre, carvão e enxofre, inventada na China, usada inicialmente para fogos de artifício e mais tarde em armamentos.</p>
                    <button class="btn btn-warning" onclick="editEntry(this)">Editar</button>
                    <button class="btn btn-danger" onclick="deleteEntry(this)">Excluir</button>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Expansão</h5>
                    <p class="card-text">Processo de crescimento territorial, econômico ou cultural de uma civilização ou império, frequentemente através de conquistas e colonização.</p>
                    <button class="btn btn-warning" onclick="editEntry(this)">Editar</button>
                    <button class="btn btn-danger" onclick="deleteEntry(this)">Excluir</button>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Confucionismo</h5>
                    <p class="card-text">Sistema filosófico e ético baseado nos ensinamentos de Confúcio, enfatizando moralidade, família, respeito pelos anciãos e harmonia social.</p>
                    <button class="btn btn-warning" onclick="editEntry(this)">Editar</button>
                    <button class="btn btn-danger" onclick="deleteEntry(this)">Excluir</button>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Taoismo</h5>
                    <p class="card-text">Tradição filosófica e religiosa chinesa que busca a harmonia com o Tao (Caminho), enfatizando a simplicidade, espontaneidade e a conexão com a natureza.</p>
                    <button class="btn btn-warning" onclick="editEntry(this)">Editar</button>
                    <button class="btn btn-danger" onclick="deleteEntry(this)">Excluir</button>
                </div>
            </div>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const glossaryCards = document.getElementById('glossaryCards');
        const addEntryForm = document.getElementById('addEntryForm');

        addEntryForm.addEventListener('submit', function (event) {
            event.preventDefault();
            const term = document.getElementById('term').value;
            const definition = document.getElementById('definition').value;
            addEntryToGlossary(term, definition);
            addEntryForm.reset();
        });

        function addEntryToGlossary(term, definition) {
            const card = document.createElement('div');
            card.className = 'card mb-3';
            card.innerHTML = `
                <div class="card-body">
                    <h5 class="card-title">${term}</h5>
                    <p class="card-text">${definition}</p>
                    <button class="btn btn-warning" onclick="editEntry(this)">Editar</button>
                    <button class="btn btn-danger" onclick="deleteEntry(this)">Excluir</button>
                </div>
            `;
            glossaryCards.appendChild(card);
        }

        function editEntry(button) {
            const cardBody = button.parentElement;
            const term = cardBody.querySelector('.card-title').innerText;
            const definition = cardBody.querySelector('.card-text').innerText;
            document.getElementById('term').value = term;
            document.getElementById('definition').value = definition;
            deleteEntry(button); // Remove a entrada antes de editar
        }

        function deleteEntry(button) {
            const card = button.parentElement.parentElement;
            glossaryCards.removeChild(card);
        }
    </script>
</body>

</html>
