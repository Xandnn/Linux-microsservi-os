<?php

echo "Olá, mundo!<br>";
echo "Meu primeiro código em PHP rodando em Docker Swarm.<br><br>";

$host = "mysql";       // nome do serviço no docker-compose
$db   = "app_db";
$user = "app_user";
$pass = "app_pass";

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$db;charset=utf8",
        $user,
        $pass
    );

    echo "✅ Conectado ao MySQL com sucesso!";
} catch (PDOException $e) {
    echo "❌ Erro ao conectar no MySQL: " . $e->getMessage();
}
