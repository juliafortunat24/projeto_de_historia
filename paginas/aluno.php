<?php
session_start();

if ($_SESSION['usuario_sessao']=="" && $_SESSION['tipo_sessao']=="") {
    header("Location: ../index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Pagína Inicial</title>
      <link rel="icon" href="../img/img_para_colocar_no_title-removebg-preview.png" type="image/x-icon">
      <link rel="stylesheet" href="aluno.css">
      <link href="../css/aluno.css" rel="stylesheet">
      </head>
  </head>
  <body>
    <div>
      <img src="../img/logo2_semfundo.png" alt="">
    </div>
    <div class="container">
      <a class="period-box idade-primitiva" href="idadeprimitiva.php"><span>Idade Primitiva</span></a>
      <a class="period-box idade-antiga" href="idadeantiga.php"><span>Idade Antiga</span></a>
      <a class="period-box idade-media" href="idademedia.php"><span>Idade Média</span></a>
      <a class="period-box idade-moderna" href="idademoderna.php"><span>Idade Moderna</span></a>
      <a class="period-box idade-contemporanea" href="idadecontemporanea.php"><span>Idade Contemporânea</span></a>
    </div>
    <div id="logout">
      <form action="../bd/logout.php">
        <button >Sair</button>
      </form>
    </div>
  </body>
</html>