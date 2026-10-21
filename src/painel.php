<?php
    if (session_status() === PHP_SESSION_NONE) session_start();

    if (!isset($_SESSION['usuario'])) {
        header('Location: login.php');    
    }
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">

<main class="container">
<?php
    echo "<h1>Olá, " . $_SESSION['usuario']['nome'] . "!</h1>";
?>

<br>

<a href="sair.php">Sair</a>
</main>
