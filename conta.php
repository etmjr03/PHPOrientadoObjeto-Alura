<?php 

require_once './functions/criar-conta.php';
require_once './class/Modelo/Conta/Conta.php';
require_once './class/Modelo/Endereco.php';
require_once './class/Modelo/Conta/Titular.php';
require_once './class/Modelo/Funcionario.php';

use Agencia\Modelo\Conta\Conta;
use Agencia\Modelo\Endereco;
use Agencia\Modelo\Conta\Titular;
use Agencia\Modelo\Funcionario;

$endereco = new Endereco('sao paulo', 'rua tal', '100', 'morumbi');

$juninho = new Titular(1, 'juninho', $endereco);
$juliana = new Titular(2, 'juliana', $endereco);
$anaMaria = new Titular(3, 'ana maria', $endereco);

$primeiraConta = new Conta($juninho);
$primeiraConta->depositar(3000);

$segundaConta = new Conta($juliana);

$terceiraConta = new Conta($anaMaria);