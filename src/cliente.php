<?php
    require "./conta.php";

    class Cliente {
        private Conta $conta;

        public function __construct(
            private string $nome,
            private string $email,
        ) {
            $this->setNome($nome);
            $this->setEmail($email);
            $this->conta = new Conta();
        }

        public function getNome() : string {
            return $this->nome;
        }

        public function setNome(string $nome) : void {
            $this->nome = $nome;
        }

        public function getEmail(): string {
            return $this->email;
        }

        public function setEmail(string $email) : void {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                throw new InvalidArgumentException("E-mail inválido.");
            }

            $this->email = $email;
        }

        public function getConta() : Conta {
            return $this->conta;
        }
    }

    echo "<br><br><br><br>";

    $gustavo = new Cliente("Gustavo", "gustavo@gmail.com");

    $gustavo->getConta()->depositar(5000);
    $gustavo->getConta()->sacar(4999);

    echo "Saldo de " . $gustavo->getNome() . ": R$ " . $gustavo->getConta()->getSaldo();
?>
