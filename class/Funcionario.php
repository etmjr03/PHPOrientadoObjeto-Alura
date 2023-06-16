<?php 

class Funcionario extends Titular {
    private $cargo;

    public function __construct(int $idConta, string $nome, Endereco $endereco, string $cargo) {
        $this->idConta = $idConta;
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->cargo = $cargo;
    }

    public function getCargo() {
        return $this->cargo;
    }
}