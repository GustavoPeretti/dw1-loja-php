<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $numero = $_POST["numero"];

        for ($i = 0; $i <= 10; $i++) {
            $resultado = $numero * $i;

            echo "$numero * $i = $resultado<br>";
        }

    }
?>

<form method="post">
    <label for="numero">Número</label>
    <input name="numero" placeholder="Número" type="number">
    <button>Enviar</button>
</form>
