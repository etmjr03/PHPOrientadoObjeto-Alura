<?php 

namespace Agencia\Modelo;

use Agencia\Modelo\Conta\Titular;
use Agencia\Modelo\Endereco;

class Funcionario extends Titular {
    private $cargo;

    public function __construct(int $idConta, string $nome, Endereco $endereco, string $cargo) {
        parent::__construct($idConta, $nome, $endereco);
        $this->cargo = $cargo;
    }

    public function getCargo() {
        return $this->cargo;
    }

    public function setNome() {
        $this->verificarNome();
        $this->nome = $nome;
    }
}