<?php
    require './produto.php';

    class Carrinho {
        private array $itens = [];

        public function adicionar(Produto $produto, int $quantidade = 1): void {
            if (!$produto->temEstoque($quantidade)) {
                throw new Exception("Sem estoque");
            }

            $this->itens[]  = ['produto' => $produto, 'quantidade' => $quantidade];
        }
        public function total(): float {
            $total = 0;
            
            foreach ($this->itens as $item) {
                $total += $item['produto']->getPreco() * $item['quantidade'];
            }
            
            return $total;
        }
    }
?>
