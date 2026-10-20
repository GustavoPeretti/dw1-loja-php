<?php
    abstract class Produto {
        public function __construct(
            protected string $nome,
            protected float $preco
        ) {}

        abstract public function frete() : float;

        public function descricao(): string {
            return "{$this->nome}: R$ {$this->preco}";
        }

    }

    class ProdutoFisico extends Produto {
        public function __construct(
            string $nome,
            float $preco,
            private float $peso
        ) {
            parent::__construct($nome, $preco);
        }

        public function frete(): float {
            return $this->peso * 5;
        }
    }

    class ProdutoDigital extends Produto {
        public function __construct(
            string $nome,
            float $preco,
            private string $link
        ) {
            parent::__construct($nome, $preco);
        }

        #[Override]
        public function descricao(): string {
            return parent::descricao() . " <a href=\"{$this->link}\">(download)</a>";
        }

        public function frete(): float {
            return 0;
        }
    }

    $t = new ProdutoFisico("Tênis", 249.9, 1.2);
    echo $t->descricao();

    echo "<br>";

    $e = new ProdutoDigital("E-book", 249.9, 'https://gustavoo.com.br');
    echo $e->descricao()

?>
