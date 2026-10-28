<?php
    namespace App\Model;

    use App\Model\Produto;
    use Override;

    class ProdutoFisico extends Produto {
        #[Override]
        public function __construct(
            int $id,
            string $nome,
            float $preco,
            int $estoque,
            private float $peso
        ) {
            parent::__construct($id, $nome, $preco, $estoque);
        }

        public function frete(int $quantidade = 1): float {
            return $quantidade * $this->peso * 5;
        }

        public function getPeso(): float {
            return $this->peso;
        }
    }

?>
