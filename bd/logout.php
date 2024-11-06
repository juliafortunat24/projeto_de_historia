<?php
session_start(); 

if (isset($_SESSION['nome_usuario'])) {
    session_unset(); 
    session_destroy();

    header("Location: ../paginas/pagina_inicial.php");
    exit();
} else {
    header("Location: ../index.php");
    exit();
}
?> 