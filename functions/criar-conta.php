<?php

function criarConta(int $idConta, string $nome, float $saldo): array {
    return [
        $idConta => [
            'nome' => $nome,
            'saldo' => number_format($saldo, 2, '.', '')
        ],
    ];
}