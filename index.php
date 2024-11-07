<?php 
include './bd/database.php';
session_start();

if($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST['nome'];
    $senha = md5($_POST['senha']);

    $query = "SELECT * FROM usuarios WHERE nome_usuario = '$nome' AND pass_usuario = '$senha'";

    $result = mysqli_query($connection, $query);

    if ($result->num_rows > 0) {
        $usuario_logado = $result->fetch_assoc();
        $_SESSION['usuario_sessao'] = $usuario_logado['nome_usuario'];
        $_SESSION['tipo_sessao'] = $usuario_logado['tipo_usuario'];
        header('Location: ./paginas/pagina_inicial.php');
    } else {
        echo 'ERROR';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal História</title>
    <link rel="icon" href="../img/img_para_colocar_no_title-removebg-preview.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>
    <div class="login">
        <img src="./img/logo_semfundo.png" alt="Logo do Portal História" class="logo">
        
        <form action="" method="POST">
            <label for="nome">Nome:</label>
            <input name="nome" type="text" required>

            <label for="senha">Senha:</label>
            <input name="senha" type="password" required>

            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>