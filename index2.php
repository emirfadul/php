<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<header>
    <h1>Curso PHP - Gustavo Guanabara</h1>
</header>

<div class="cards-container">
    <form action="login.php" method="POST">
        <input type="text" name="usuario" placeholder="Usuário" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <button type="submit">Entrar</button>
    </form>
</div>


</div>

<?php
// Inicia a sessão para manter o usuário logado
session_start();

// Verifica se os dados foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Captura os dados do formulário
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $usuario_correto = "emirfadul";
    $senha_correta = "021205";

    if ($usuario_correto == $usuario && $senha_correta == $senha) {
        echo 'emir';
        header("Location: conteudo.html");
        exit;
    } else {
        // Erro: Redireciona de volta com uma mensagem
        echo "Usuário ou senha inválidos!";
    }
}
?>


</body>

</html>