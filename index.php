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

</body>

</html>