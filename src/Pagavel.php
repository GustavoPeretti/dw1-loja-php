<?php
    namespace src;

    interface Pagavel {
        public function pagar(float $valor) : bool;
    }
?>
