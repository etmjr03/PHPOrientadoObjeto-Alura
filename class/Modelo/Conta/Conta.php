<?php

namespace Agencia\Modelo\Conta;

use Agencia\Modelo\Conta\Titular;

abstract class Conta {
    private $titular;
    protected float $saldo;
    private static $numeroDeContas = 0;

    // Conta corrente  = 1, Conta poupança = 2

    public function __construct(Titular $titular) {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct() {
        self::$numeroDeContas--;
    }

    public function sacar(float $valorSaque): void {

        $tarifaSaque = $valorSaque * $this->percentualTarifa();
        $taxaDeSaque = $valorSaque + $tarifaSaque;

        if($taxaDeSaque > $this->saldo) {
            echo "Saldo insuficiente, seu saldo é: $this->saldo";
            return;
        }
            $this->saldo -= $taxaDeSaque;
            echo "Saque realizado com sucesso! Seu saldo atual é: $this->saldo <br>
            O valor de saque foi: {$tarifaSaque}";
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

    public function getNomeTitular(): string {
        return $this->titular->getNome();
    }

    public function getIdConta(): string {
        return $this->titular->getIdConta();
    }

    public function getSaldo(): float {
        return $this->saldo;
    }

    public function setSaldo(float $saldo): void {
        $this->saldo = $saldo;
    }

    public static function getNumeroConta() {
        return self::$numeroDeContas;
    }

    public function getEndereco() {
        return $this->titular->getEnderecoTitular();
    }

    abstract protected function percentualTarifa();
    
}