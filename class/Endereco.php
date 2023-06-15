<?php 

class Endereco {
    private string $cidade;
    private string $rua;
    private string $numero;
    private string $bairro;

    public function __construct(string $cidade, string $rua, string $numero, string $bairro) {
        $this->cidade = $cidade;
        $this->rua = $rua;
        $this->numero = $numero;
        $this->bairro = $bairro;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function getRua() {
        return $this->rua;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function getBairro() {
        return $this->bairro;
    }
}