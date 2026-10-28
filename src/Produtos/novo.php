<?php
    require __DIR__ . '/../autoload.php';

    use App\Dao\ProdutoDao;
    use App\Database\Conexao;
    use App\Model\ProdutoDigital;
    use App\Model\ProdutoFisico;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($_POST['tipo'] === 'digital') {
            $produto = new ProdutoDigital(
                0,
                $_POST['nome'],
                $_POST['preco'],
                $_POST['estoque'],
                $_POST['link']
            );
        } else {
            $produto = new ProdutoFisico(
                0,
                $_POST['nome'],
                $_POST['preco'],
                $_POST['estoque'],
                $_POST['peso']
            );
        }

        (new ProdutoDao(Conexao::get()))->inserir($produto);

        header('Location: index.php');
        exit;
    }
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">

<main class="container">
<?php require __DIR__ . '/../nav.php'; ?>

<form method="post">
  <label>Nome <input name="nome" required></label>
  <label>Tipo
    <select name="tipo">
      <option value="fisico">Físico</option>
      <option value="digital">Digital</option>
    </select>
  </label>
  <label>Peso (kg) <input name="peso" type="number" step="0.001" min="0"></label>
  <label>Link <input name="link" type="text"></label>
  <label>Preço <input name="preco" type="number" step="0.01" required></label>
  <label>Estoque <input name="estoque" type="number" required></label>
  <button>Salvar</button>
</form>
</main>
