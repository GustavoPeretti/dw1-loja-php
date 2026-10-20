<?php
    require './carrinho.php';
    require './cliente.php';

    $carrinho = new Carrinho();

    $carrinho->adicionar(new Produto('Smartphone', 3000));
    $carrinho->adicionar(new Produto('Computador', 5000));

    var_dump($carrinho);
    echo "Total: R$ " . $carrinho->total();

    echo "<br><br><br><br>";

    $gustavo = new Cliente("Gustavo", "gustavo@gmail.com");

    $gustavo->getConta()->depositar(5000);
    $gustavo->getConta()->sacar(4999);

    echo "Saldo de " . $gustavo->getNome() . ": R$ " . $gustavo->getConta()->getSaldo();
?>
