<?php
    require __DIR__ . '/autoload.php';

    use App\Support\CarrinhoSessao;

    $c = new CarrinhoSessao();
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">

<main class="container">
<?php
    foreach ($c->itens() as $id => $qtd) {
        echo "Produto #$id: $qtd";
        echo "<br>";
    }
?>
</main>
