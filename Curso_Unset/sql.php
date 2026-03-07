<?php

// Configurações de conexão (ajuste com base no seu MAMP)
$host = 'localhost';  // Ou '127.0.0.1'
$port = 3306;         // Porta padrão MySQL no MAMP
$dbname = 'emir_db';  // Crie um banco no phpMyAdmin primeiro
$user = 'root';
$pass = 'root';

try {
    // Conexão PDO (recomendado para PHP 8.1)
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexão estabelecida com sucesso!";

    // Exemplo: Query simples para testar
    $stmt = $pdo->query('SHOW TABLES');
    echo "<pre>";
    print_r($stmt->fetchAll());
    echo "</pre>";

} catch (PDOException $e) {
    echo "Erro de conexão: " . $e->getMessage();
}
