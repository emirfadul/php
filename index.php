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

<<<<<<< HEAD
=======
</div>

<?php
    // Inicia a sessão para manter o usuário logado
    session_start();

    // Verifica se os dados foram enviados via POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Captura os dados do formulário
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        // EXEMPLO SIMPLES (Em um sistema real, você consultaria o Banco de Dados)
        $usuario_correto = "emirfadul";
        $senha_correta = "021205";

    if ($usuario_correto == $usuario && $senha_correta == $senha) {
        echo 'emir';
        header("Location: cursos.html");
        exit;

//        echo '<div class="Card Individual">
//                <div class="card">
//                    <img src="/logo_php.png" alt="Descrição da imagem" class="card-image">
//
//                    <div class="card-content">
//                        <a href="/desafio10/index.php">
//                            <button class="card-button">DESAFIO 10</button>
//                        </a>
//                    </div>
//                </div>
//
//                <!-- Card Individual -->
//                <div class="card">
//                    <img src="/logo_php.png" alt="Descrição da imagem" class="card-image">
//
//                    <div class="card-content">
//                        <a href="desafio11/index.php">
//                            <button class="card-button">DESAFIO 11</button>
//                        </a>
//                    </div>
//                </div>
//
//                <!-- Card Individual -->
//                <div class="card">
//                    <img src="/logo_php.png" alt="Descrição da imagem" class="card-image">
//
//                    <div class="card-content">
//                        <a href="desafio12/index.php">
//                            <button class="card-button">DESAFIO 12</button>
//                        </a>
//                    </div>
//                </div>
//
//                <div class="card">
//                    <img src="/logo_php.png" alt="Descrição da imagem" class="card-image">
//
//                    <div class="card-content">
//                        <a href="desafio13/index.php">
//                            <button class="card-button">DESAFIO 13</button>
//                        </a>
//                    </div>
//                </div>
//
//            </div>';

    } else {
        // Erro: Redireciona de volta com uma mensagem
        echo "Usuário ou senha inválidos!";
        }
    }
?>

>>>>>>> 5fb21ea (acrescentei o botao voltar e coloquei em outro arquivo os cursos.)
</body>

</html>