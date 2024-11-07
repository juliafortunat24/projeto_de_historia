<?php
include './bd/database.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Coletar dados do formulário
    $nome_usuario = mysqli_real_escape_string($conn, $_POST['nome_usuario']);
    $tipo_usuario = mysqli_real_escape_string($conn, $_POST['tipo_usuario']);
    $pass_usuario = mysqli_real_escape_string($conn, $_POST['pass_usuario']);

    // Hash da senha antes de salvar no banco
    $pass_usuario_hash = password_hash($pass_usuario, PASSWORD_DEFAULT);

    // Inserir os dados no banco de dados
    $sql = "INSERT INTO usuarios (nome_usuario, tipo_usuario, pass_usuario) 
            VALUES ('$nome_usuario', '$tipo_usuario', '$pass_usuario_hash')";

    if ($conn->query($sql) === TRUE) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao cadastrar: " . $conn->error;
    }
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <h2>Cadastro de Novo Usuário</h2>
    <form action="cadastro.php" method="POST">
        <label for="nome_usuario">Nome:</label>
        <input type="text" id="nome_usuario" name="nome_usuario" required><br><br>

        <label for="tipo_usuario">Tipo de Usuário:</label>
        <select id="tipo_usuario" name="tipo_usuario" required>
            <option value="aluno">Aluno</option>
            <option value="administrador">Administrador</option>
        </select><br><br>

        <label for="pass_usuario">Senha:</label>
        <input type="password" id="pass_usuario" name="pass_usuario" required><br><br>

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>