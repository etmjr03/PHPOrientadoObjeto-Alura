<?php 

spl_autoload_register(function (string $nomeCompletoDaClasse) {
    $caminhoArquivo = str_replace('Agencia\\', 'class\\', $nomeCompletoDaClasse);
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
    $caminhoArquivo .= '.php';
    
    if(file_exists($caminhoArquivo)) {
        require_once $caminhoArquivo;
    }
});

use Agencia\Modelo\Conta\Conta;
use Agencia\Modelo\Conta\ContaPoupanca;
use Agencia\Modelo\Endereco;
use Agencia\Modelo\Conta\Titular;
use Agencia\Modelo\Funcionario;
use Agencia\Modelo\Conta\ContaCorrente;

$endereco = new Endereco('sao paulo', 'rua tal', '100', 'morumbi');

$juninho = new Titular(1, 'juninho', $endereco);
$juliana = new Titular(2, 'juliana', $endereco);
$anaMaria = new Titular(3, 'ana maria', $endereco);

$primeiraConta = new ContaPoupanca($juninho);
$primeiraConta->depositar(3000);

$segundaConta = new ContaPoupanca($juliana, 1);

$terceiraConta = new ContaPoupanca($anaMaria, 1);

$primeiraConta->sacar(100);