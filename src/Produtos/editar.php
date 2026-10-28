<?php
    require __DIR__ . '/../autoload.php';

    use App\Database\Conexao;

    $pdo = Conexao::get();
    $id = (int) ($_GET['id'] ?? 0);

    $stmt = $pdo->prepare('SELECT * FROM produtos WHERE id = :id');
    $stmt->execute([':id' => $id]);
    $p = $stmt->fetch();

    if (!$p) {
        http_response_code(404);
        exit('Não encontrado');
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $stmt = $pdo->prepare('
            UPDATE produtos
            SET nome = :n, preco = :p, estoque = :e
            WHERE id = :id
        ');

        $stmt->execute([
            ':n'  => $_POST['nome'],
            ':p'  => $_POST['preco'],
            ':e'  => $_POST['estoque'],
            ':id' => $id,
        ]);

        header('Location: index.php');
        exit;
    }
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">

<main class="container">
<?php require __DIR__ . '/../nav.php'; ?>

<form method="post">
  <label>Nome <input name="nome" required></label>
  <label>Preço <input name="preco" type="number" step="0.01" required></label>
  <label>Estoque <input name="estoque" type="number" required></label>
  <button>Salvar</button>
</form>
</main>
