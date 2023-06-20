<?php 

spl_autoload_register(function (string $nomeCompletoDaClasse) {
    $caminhoArquivo = str_replace('Agencia\\', 'class\\', $nomeCompletoDaClasse);
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
    $caminhoArquivo .= '.php';
    
    if(file_exists($caminhoArquivo)) {
        require_once $caminhoArquivo;
    }
});

use Agencia\Modelo\Conta\{Conta, ContaPoupanca, Titular, ContaCorrente};
use Agencia\Modelo\{Endereco, Funcionario};
use Agencia\Modelo\ControlaBonificacao;

$endereco = new Endereco('sao paulo', 'rua tal', '100', 'morumbi');

$juninho = new Titular(1, 'juninho', $endereco, 'programador', 3000);
$juliana = new Titular(2, 'juliana', $endereco, 'programadora', 3000);
$anaMaria = new Titular(3, 'ana maria', $endereco, 'UX', 3000);

$primeiraConta = new ContaPoupanca($juninho);
$primeiraConta->depositar(3000);

$segundaConta = new ContaPoupanca($juliana, 1);

$terceiraConta = new ContaPoupanca($anaMaria, 1);

$primeiraConta->sacar(100);
$quartaConta = new Funcionario(1, 'juninho funcionario', $endereco, 'programador', 3000.50);