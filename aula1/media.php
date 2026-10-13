<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];

        $media = ($numero1 + $numero2) / 2;

        echo $media;
    }
?>

<form method="post">
    <label for="numero1">Número 1</label>
    <input name="numero1" placeholder="Número 1" type="number">

    <br>

    <label for="numero2">Número 2</label>
    <input name="numero2" placeholder="Número 2" type="number">
    
    <button>Enviar</button>
</form>
