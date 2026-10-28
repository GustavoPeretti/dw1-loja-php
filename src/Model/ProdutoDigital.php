<?php
    namespace App\Model;

    use App\Model\Produto;
    use Override;

    class ProdutoDigital extends Produto {
        #[Override]
        public function __construct(
            int $id,
            string $nome,
            float $preco,
            int $estoque,
            private string $link
        ) {
            parent::__construct($id, $nome, $preco, $estoque);
        }

        public function frete(int $quantidade = 1): float {
            return 0;
        }

        public function getLink(): string {
            return $this->link;
        }
    }

?>
