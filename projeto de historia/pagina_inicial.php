<?php
include 'database.php';
session_start();

$y = $_SESSION['usuario_sessao'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="mensagem">
    <?php
    if ($_SESSION['tipo_sessao'] == 'administrador') {
      echo "<h1>Bem-vindo, administrador $y </h1>";
      header('Location: administrador.php');
    } else {
      echo "<h1>Bem-vindo, aluno(a) $y </h1>";
      header('Location: aluno.php');
    }
    ?>
    <a href="index.php">LOGOUT</a>
  </div>
</body>

</html>