<?php

class Conta {
    public int $idConta;
    public string $nome;
    public float $saldo = 0;

    public function sacar(float $valorSaque) {
        if($valorSaque > $this->saldo) {
            echo "Saldo insuficiente, seu saldo é: $this->saldo";
            return;
        }
            $this->saldo -= $valorSaque;
            // echo "Saque realizado com sucesso! Seu saldo atual é: $this->saldo <br>";
    }

    public function depositar(float $valorDeposito) {
        if($valorDeposito <= 0) {
            echo "O valor de depósito deve ser maior que 0";
            return;
        }
            $this->saldo += $valorDeposito;
            // echo "Deposito realizado com sucesso! Seu saldo atual é: $this->saldo <br>";
    }

    public function transferir(float $valorTransferencia, Conta $contaDestino) {
        if($this->saldo < $valorTransferencia) {
            echo "Não é possível realizar a transferência, saldo indisponível! Seu saldo é: $this->saldo <br>";
            return;
        }
            $this->sacar($valorTransferencia);
            $contaDestino->depositar($valorTransferencia);
            echo "Transferência realizada com sucesso! <br>";
    }
}