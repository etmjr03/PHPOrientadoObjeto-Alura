<?php 

namespace Agencia\modelo\conta;

use Agencia\Modelo\Conta\Conta;   

class ContaPoupanca extends Conta {
    protected function percentualTarifa(): float {
        return 0.05;
    }
}