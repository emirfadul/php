<?php
session_start(); // Inicia a sessão

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];


if (($usuario == 'emirfadul') && ($senha == '021205')) {
  header("Location: conteudo.php");
      exit();
} else {
        echo "Senha incorreta!";
   }

?>
