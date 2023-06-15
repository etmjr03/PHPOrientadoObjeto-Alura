<?php

class Conta {
    private int $idConta;
    private string $nome;
    private float $saldo;
    private static $numeroDeContas = 0;

    public function __construct(int $idConta, string $nome) {
        $this->idconta = $idConta;
        $this->nome = $nome;
        $this->saldo = 0;
        $this->verificarNome();

        self::$numeroDeContas++;
    }

    public function __destruct() {
        self::$numeroDeContas--;
    }

    public function sacar(float $valorSaque): void {
        if($valorSaque > $this->saldo) {
            echo "Saldo insuficiente, seu saldo é: $this->saldo";
            return;
        }
            $this->saldo -= $valorSaque;
            // echo "Saque realizado com sucesso! Seu saldo atual é: $this->saldo <br>";
    }

    public function depositar(float $valorDeposito): void {
        if($valorDeposito <= 0) {
            echo "O valor de depósito deve ser maior que 0";
            return;
        }
            $this->saldo += $valorDeposito;
            // echo "Deposito realizado com sucesso! Seu saldo atual é: $this->saldo <br>";
    }

    public function transferir(float $valorTransferencia, Conta $contaDestino): void {
        if($this->saldo < $valorTransferencia) {
            echo "Não é possível realizar a transferência, saldo indisponível! Seu saldo é: $this->saldo <br>";
            return;
        }
            $this->sacar($valorTransferencia);
            $contaDestino->depositar($valorTransferencia);
            echo "Transferência realizada com sucesso! <br>";
    }

    public function getIdConta(): int{
        return $this->idconta;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getSaldo(): float {
        return $this->saldo;
    }

    public function setSaldo(float $saldo): void {
        $this->saldo = $saldo;
    }

    private function verificarNome() {
        if(strlen($this->nome) < 5) {
            echo '<p class="text-center" style="color: #ee0505"> não é um nome permitido, seu sobrenome e nome deve
            ter pelo menos 5 letras!</p>';
            exit;
        }
    }

    public static function getNumeroConta() {
        return self::$numeroDeContas;
    }
}