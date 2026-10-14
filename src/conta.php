<?php
    class Conta {
        private float $saldo;

        public function __construct() {
            $this->saldo = 0;
        }

        public function getSaldo(): float {
            return $this->saldo;
        }

        public function depositar(float $valor) : void {
            if ($valor <= 0) {
                throw new InvalidArgumentException("Valor deve ser positivo.");
            }

            $this->saldo += $valor;
        }

        public function sacar(float $valor) : void {
            if ($valor <= 0) {
                throw new InvalidArgumentException("Valor deve ser positivo.");
            }

            if (($this->saldo - $valor) < 0) {
                throw new InvalidArgumentException("Saldo insuficiente.");
            }

            $this->saldo -= $valor;
        }
    }

    $conta = new Conta();

    $conta->depositar(5000);
    $conta->sacar(4999);

    echo "Saldo: R$ " . $conta->getSaldo();
?>
