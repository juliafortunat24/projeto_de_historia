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
    <h1>Idade Média</h1>
    <div class="conteudo">
        <img id="imagemidm" src="idademedia.jpeg" alt="">
        <div class="texto">
            <p>A Idade Média é o período da história geral que se inicia no século V, logo após a queda do Império Romano do Ocidente, e termina no século XV, com a conquista de Constantinopla pelo Império Turco-Otomano. Foi um período marcado pela síntese da herança romana com a cultura dos povos bárbaros que invadiram o Império Romano.
            A Igreja Católica tornou-se uma instituição poderosa e influente não apenas na religião, mas também na sociedade medieval. A invasão bárbara provocou a fuga da cidade em direção ao campo. A Europa ocidental ruralizava-se, e a riqueza era a terra. A agricultura tornou-se a principal atividade econômica, e a produção dos feudos era para o próprio sustento.
            A partir do século XIII, por conta dos renascimentos comercial e urbano, o mundo medieval começou a entrar em crise. A centralização do poder nas mãos dos reis derrotou os senhores feudais, pacificou as revoltas servis e abriu as portas da Europa para a Idade Moderna.
            </p>
        </div>
    </div>
</body>
</html>