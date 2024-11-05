<?php
include '../bd/database.php';

// Verifica se a requisição é para inserir uma nova entrada
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action'])) {
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

$sql = "SELECT * FROM glossario";
$result = $connection->query($sql);
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
    <header>
        <h1 class="text-center my-4">Glossário</h1>
    </header>

    <div class="container">
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

        <section class="cards-section" id="glossaryCards">
            <?php if ($result->num_rows > 0) {
                while ($linha = $result->fetch_assoc()) {
                    echo "<div class='card mb-3'>
                            <div class='card-body'>
                                <h5 class='card-title'>" . htmlspecialchars($linha['titulo']) . "</h5>
                                <p class='card-text'>" . htmlspecialchars($linha['descricao']) . "</p>
                                <form method='post' action='' class='d-inline'>
                                    <input type='hidden' name='action' value='delete'>
                                    <input type='hidden' name='id_palavra' value='" . $linha['id_palavra'] . "'>
                                    <button type='submit' class='btn btn-danger'>Excluir</button>
                                </form>
                                <button class='btn btn-warning' onclick=\"fillEditForm(" . $linha['id_palavra'] . ", '" . addslashes($linha['titulo']) . "', '" . addslashes($linha['descricao']) . "')\">Editar</button>
                            </div>
                        </div>";
                }
            } ?>
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
