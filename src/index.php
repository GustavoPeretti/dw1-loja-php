<?php
    if (session_status() === PHP_SESSION_NONE) session_start();
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">

<main class="container">
<nav>
  <ul>
    <li><strong>Loja PHP</strong></li>
  </ul>
  <ul>
    <li><a href="login.php">Entrar</a></li>
    <li><a href="painel.php">Painel</a></li>
    <li><a href="carrinho.php">Carrinho</a></li>
    <li><a href="produtos/">Produtos</a></li>
  </ul>
</nav>
</main>
