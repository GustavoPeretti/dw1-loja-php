<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nome = $_POST["nome"];
        echo $nome;
    }
?>

<form method="post">
    <label for="nome">Nome</label>
    <input name="nome" placeholder="Nome" type="text">
    <button>Enviar</button>
</form>
