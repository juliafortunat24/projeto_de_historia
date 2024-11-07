<?php
session_start();

$host = 'localhost'; 
$user = 'root';
$password = ''; 
$dbname = 'projeto_historia'; 

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome_usuario = mysqli_real_escape_string($conn, $_POST['nome_usuario']);
    $tipo_usuario = mysqli_real_escape_string($conn, $_POST['tipo_usuario']);
    $pass_usuario = mysqli_real_escape_string($conn, $_POST['pass_usuario']);

    $pass_usuario_hash = password_hash($pass_usuario, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (nome_usuario, tipo_usuario, pass_usuario) 
            VALUES ('$nome_usuario', 'aluno', '$pass_usuario_hash')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['status'] = 'sucesso';
    } else {
        $_SESSION['status'] = 'erro';
        $_SESSION['erro_msg'] = $conn->error;
    }
    $conn->close();
    
    // Redireciona para a mesma página para exibir o alerta
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="../css/cadastro.css">
</head>
<body>
    <div class="cadastro">
        <form method="POST">
            <img src="../img/logo_semfundo.png" alt="Logo do Portal História" class="logo">

            <label for="nome_usuario">Nome:</label>
            <input type="text" id="nome_usuario" name="nome_usuario" required><br><br>
    
            <label for="pass_usuario">Senha:</label>
            <input type="password" id="pass_usuario" name="pass_usuario" required><br><br>
    
            <button type="submit">Cadastrar</button>
        </form>
    </div>
    <?php if (isset($_SESSION['status'])): ?>
        <script>
            <?php if ($_SESSION['status'] == 'sucesso'): ?>
                Swal.fire({
                    icon: 'success',
                    title: 'Cadastro realizado com sucesso!',
                    text: 'O usuário foi registrado com sucesso.',
                    confirmButtonText: 'Ok'
                });
            <?php elseif ($_SESSION['status'] == 'erro'): ?>
                Swal.fire({
                    icon: 'error',
                    title: 'Erro ao cadastrar',
                    text: '<?php echo $_SESSION['erro_msg']; ?>',
                    confirmButtonText: 'Tentar novamente'
                });
            <?php endif; ?>
        </script>
        <?php unset($_SESSION['status']); ?>
    <?php endif; ?>

</body>
</html>
