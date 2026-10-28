<?php
    namespace App\Model;

    abstract class Produto
    {
        public function __construct(
            protected int $id,
            protected string $nome,
            protected float $preco,
            protected int $estoque
        ) {}

        abstract public function frete(int $quantidade = 1): float;

        public function total(int $quantidade = 1): float {
            return $this->preco * $quantidade + $this->frete($quantidade);
        }
        
        public function temEstoque(int $quantidade = 1): bool {
            return $this->estoque >= $quantidade;
        }

        public function getId(): ?int {
            return $this->id;
        }

        public function getNome(): string {
            return $this->nome;
        }

        public function getPreco(): float {
            return $this->preco;
        }

        public function getEstoque(): int {
            return $this->estoque;
        }
    }
?>
