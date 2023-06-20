<?php 

namespace Agencia\Modelo;

use Agencia\Modelo\Conta\Titular;
use Agencia\Modelo\Endereco;

class Funcionario extends Titular {
    private $cargo;
    private $salario;

    public function __construct(int $idConta, string $nome, Endereco $endereco, string $cargo, float $salario) {
        parent::__construct($idConta, $nome, $endereco);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function getCargo() {
        return $this->cargo;
    }

    public function setNome($nome) {
        $this->nome = $nome;
        $this->verificarNome();
    }

    public function getSalario() {
        return $this->salario;
    }

    public function calculaBonificacao() {
        return $this->salario * 0.1;
    }
}