<?php
    $host = "db";
    $dbname = "loja";
    $user = "root";
    $password = "asdfghjkl";

    try {
        $pdo = new PDO(
            "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
            $user, $password
        );

        echo "Sucesso ao conectar";
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
?>
