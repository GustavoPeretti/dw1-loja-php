<?php
    class Produto {
        public function __construct(
            private string $nome,
            private float $preco
        ) {
            $this->setNome($nome);
            $this->setPreco($preco);
        }
    
        public function aplicarDesconto(float $fator): void {
            $this->preco -= $this->preco * $fator;
        }

        public function getPreco() : float {
            return $this->preco;
        }

        public function setPreco(float $preco) : void {
            if ($preco < 0) throw new InvalidArgumentException("O preço não pode ser negativo.");

            $this->preco = $preco;
        }

        public function getNome() : string {
            return $this->nome;
        }

        public function setNome(string $nome) : void {
            if (trim($nome) === '') throw new InvalidArgumentException("O nome não pode ser vazio.");

            $this->nome = $nome;
        }

    }

    $camiseta = new Produto("Camiseta", 25.90);
    $calca = new Produto("Calça", 25.90);

    $camiseta->aplicarDesconto(0.5);
    $calca->aplicarDesconto(0.2);

    $produtos = [$camiseta, $calca];
    
    foreach ($produtos as $produto) {
        var_dump($produto);
    }
?>
