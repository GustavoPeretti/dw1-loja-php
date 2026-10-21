<?php
    namespace src;

    class Boleto implements Pagavel {
        public function pagar(float $valor): bool {
            echo "Código de barras fictício";

            return true;
        }
    }
?>