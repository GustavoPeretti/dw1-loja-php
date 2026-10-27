<?php
    require __DIR__ . '/../autoload.php';

    use App\Database\Conexao;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $stmt = Conexao::get()->prepare('
            INSERT INTO produtos (nome, preco, estoque)
            VALUES (:n, :p, :e)
        ');

        $stmt->execute([
            ':n' => trim($_POST['nome']),
            ':p' => (float) $_POST['preco'],
            ':e' => (int) $_POST['estoque'],
        ]);

        header('Location: index.php');
        exit;
    }
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">

<main class="container">
<form method="post">
  <label>Nome <input name="nome" required></label>
  <label>Preço <input name="preco" type="number" step="0.01" required></label>
  <label>Estoque <input name="estoque" type="number" required></label>
  <button>Salvar</button>
</form>
</main>
