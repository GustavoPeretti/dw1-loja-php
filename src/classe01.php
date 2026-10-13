<?php
    class Produto {
        public string $nome;
        public float $preco;
        public int $estoque;

        public function __construct(string $nome, float $preco, int $estoque = 0) {
            if ($preco < 0)  {
                throw new InvalidArgumentException("O preço não pode ser negativo.");
            }

            if ($estoque < 0)  {
                throw new InvalidArgumentException("O estoque não pode ser negativo.");
            }

            $this->nome = $nome;
            $this->preco = $preco;
            $this->estoque = $estoque;
        }
    
        public function aplicarDesconto(float $fator): void {
            $this->preco -= $this->preco * $fator;
        }
    }

    $camiseta = new Produto("Camiseta", 25.90, 15);
    $calca = new Produto("Calça", 25.90, 15);

    $camiseta->aplicarDesconto(0.5);
    $calca->aplicarDesconto(0.2);

    $produtos = [$camiseta, $calca];
    
    foreach ($produtos as $produto) {
        var_dump($produto);
    }
?>
