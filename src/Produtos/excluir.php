<?php
    require __DIR__ . '/../autoload.php';

    use App\Database\Conexao;

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $stmt = Conexao::get()->prepare('
            DELETE FROM produtos WHERE id = :id
        ');

        $stmt->execute([
            ':id' => (int) $_GET['id'],
        ]);

        header('Location: index.php');
        exit;
    }
?>
