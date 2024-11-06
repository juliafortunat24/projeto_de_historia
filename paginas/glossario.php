<?php
session_start();
include '../bd/database.php';

// Verifica se a requisição é para inserir, editar ou excluir uma entrada
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && isset($_SESSION['tipo_sessao']) && $_SESSION['tipo_sessao'] === 'administrador') {
    if ($_POST['action'] == 'add') {
        $titulo = $_POST['term'];
        $descricao = $_POST['definition'];
        $sql = "INSERT INTO glossario (titulo, descricao) VALUES (?, ?)";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param('ss', $titulo, $descricao);
        $stmt->execute();
        header("Location: glossario.php");
        exit();
    } elseif ($_POST['action'] == 'delete') {
        $id_palavra = $_POST['id_palavra'];
        $sql = "DELETE FROM glossario WHERE id_palavra = ?";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param('i', $id_palavra);
        $stmt->execute();
        header("Location: glossario.php");
        exit();
    } elseif ($_POST['action'] == 'edit') {
        $id_palavra = $_POST['id_palavra'];
        $titulo = $_POST['term'];
        $descricao = $_POST['definition'];
        $sql = "UPDATE glossario SET titulo = ?, descricao = ? WHERE id_palavra = ?";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param('ssi', $titulo, $descricao, $id_palavra);
        $stmt->execute();
        header("Location: glossario.php");
        exit();
    }
}

// Consulta os termos do glossário
$sql = "SELECT * FROM glossario";
$result = $connection->query($sql);

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
    <title>Glossário</title>
    <link rel="stylesheet" href="../css/glossario.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="pos-f-t">
    <div class="offcanvas offcanvas-start bg-dark text-white custom-offcanvas" tabindex="-1" id="offcanvasNavbar"
         aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
    <h1 class="text-center my-4">Glossário</h1>
</header>

<div class="container">
    <!-- Verifica se o usuário é administrador para mostrar o formulário de adição -->
    <?php if (isset($_SESSION['tipo_sessao']) && $_SESSION['tipo_sessao'] === 'administrador'): ?>
        <div class="mb-4">
            <h2>Adicionar Nova Entrada</h2>
            <form method="post" action="">
                <input type="hidden" name="action" value="add">
                <div class="mb-3">
                    <label for="term" class="form-label">Termo</label>
                    <input type="text" class="form-control" name="term" id="term" required>
                </div>
                <div class="mb-3">
                    <label for="definition" class="form-label">Definição</label>
                    <textarea class="form-control" name="definition" id="definition" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Adicionar</button>
            </form>
        </div>
    <?php endif; ?>

    <section class="cards-section" id="glossaryCards">
        <?php if ($result->num_rows > 0): ?>
            <?php while ($linha = $result->fetch_assoc()): ?>
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($linha['titulo']) ?></h5>
                        <p class="card-text"><?= htmlspecialchars($linha['descricao']) ?></p>
                        <!-- Verifica se o usuário é administrador para mostrar os botões de edição e exclusão -->
                        <?php if (isset($_SESSION['tipo_sessao']) && $_SESSION['tipo_sessao'] === 'administrador'): ?>
                            <form method="post" action="" class="d-inline">
                                <input type="hidden" name="action" value="delete">
                                <input type="hidden" name="id_palavra" value="<?= $linha['id_palavra'] ?>">
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                            <button class="btn btn-warning" onclick="fillEditForm(<?= $linha['id_palavra'] ?>, '<?= addslashes($linha['titulo']) ?>', '<?= addslashes($linha['descricao']) ?>')">Editar</button>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p class="text-center">Nenhuma entrada no glossário.</p>
        <?php endif; ?>
    </section>
</div>

<script>
    function fillEditForm(id, term, definition) {
        document.getElementById('term').value = term;
        document.getElementById('definition').value = definition;
        const form = document.querySelector('form');
        form.action = '';
        form.innerHTML += `<input type="hidden" name="action" value="edit"><input type="hidden" name="id_palavra" value="${id}">`;
    }
</script>
</body>
</html>
