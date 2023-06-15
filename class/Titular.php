<?php

class Titular {
    private string $nome;
    private string $idConta;

    public function __construct(int $idConta, string $nome) {
        $this->idConta = $idConta;
        $this->nome = $nome;
        $this->verificarNome();
    }

    private function verificarNome() {
        if(strlen($this->nome) < 5) {
            echo '<p class="text-center" style="color: #ee0505"> não é um nome permitido, seu sobrenome e nome deve
            ter pelo menos 5 letras!</p>';
            exit;
        }
    }

    public function getIdConta(): int {
        return $this->idConta;
    }

    public function getNome(): string {
        return $this->nome;
    }
}