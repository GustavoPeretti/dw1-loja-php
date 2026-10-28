<?php
  require __DIR__ . '/../autoload.php';

  use App\Dao\ProdutoDao;
  use App\Database\Conexao;

  $produtos = (new ProdutoDao(Conexao::get()))->listar();
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">

<main class="container">
<?php require __DIR__ . '/../nav.php'; ?>

<a href="novo.php">+ Novo produto</a>

<table>
  <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Preço</th>
    <th>Estoque</th>
    <th></th>
  </tr>
  <?php foreach ($produtos as $p): ?>
    <tr>
      <td><?= $p->getId() ?></td>
      <td><?= htmlspecialchars($p->getNome()) ?></td>
      <td>R$ <?= number_format($p->getPreco(), 2, ',', '.') ?></td>
      <td><?= $p->getEstoque() ?></td>
      <td>
        <a href="editar.php?id=<?= $p->getId() ?>">Editar</a>
        <a href="excluir.php?id=<?= $p->getId() ?>" onclick="return confirm('Excluir?')">Excluir</a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>
</main>
