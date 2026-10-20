<?php
    interface Pagavel {
        public function pagar(float $valor) : bool;

    }

    class Pix implements Pagavel {
        public function pagar(float $valor) : bool {
            echo "Pix de R$ $valor";

            return true;
        }
    }

    class Cartao implements Pagavel {
        public function pagar(float $valor) : bool {
            echo "Cartão de R$ $valor";

            return true;
        }
    }

    $p = new Pix();
    $p->pagar(10);

    echo "<br>";

    $c = new Cartao();
    $c->pagar(10);
?>
