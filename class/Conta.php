<?php

class Conta {
    public int $idConta;
    public string $nome;
    public float $saldo;

    public function sacar(float $valorSaque) {
        if($valorSaque > $this->saldo) {
            echo "Saldo insuficiente, seu saldo é: $this->saldo";
        } else {
            $this->saldo -= $valorSaque;
            echo "Saque realizado com sucesso! Seu saldo atual é: $this->saldo <br>";
        }
    }

    public function depositar(float $valorDeposito) {
        if($valorDeposito <= 0) {
            echo "O valor de depósito deve ser maior que 0";
        } else {
            $this->saldo += $valorDeposito;
            echo "Deposito realizado com sucesso! Seu saldo atual é: $this->saldo <br>";
        }
    }
}