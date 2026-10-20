<?php
    abstract class Produto {
        public function __construct(
            protected string $nome,
            protected float $preco
        ) {}

        abstract public function frete() : float;

        abstract public function total() : float;

        public function descricao(): string {
            return "{$this->nome}: R$ {$this->preco}";
        }

    }

    class ProdutoFisico extends Produto {
        public function __construct(
            string $nome,
            float $preco,
            protected float $peso
        ) {
            parent::__construct($nome, $preco);
        }

        public function frete(): float {
            return $this->peso * 5;
        }

        public function total(): float {
            return $this->preco + $this->frete();
        }
    }
    
    class ProdutoComDesconto extends ProdutoFisico {
        public function __construct(
            string $nome,
            float $preco,
            float $peso,
            private float $desconto
        ) {
            parent::__construct($nome, $preco, $peso);
        }

        public function total(): float {
            return ($this->preco + $this->frete()) * (1 - $this->desconto);
        }
    }

    $pd = new ProdutoComDesconto("Tênis", 249.9, 0.5, 0.5);

    echo $pd->total();

    echo "<br><br><br>";

    $lista = [
        (new ProdutoFisico("Camiseta", 25, 0.25)),
        (new ProdutoComDesconto("Camiseta", 25, 0.25, 0.1)),
    ];

    foreach ($lista as $item) {
        echo "{$item->descricao()}<br>{$item->total()}<br><br>";
    }
?>
