<?php 

require_once './functions/criar-conta.php';
require_once './class/Conta.php';
require_once './class/Endereco.php';
require_once './class/Titular.php';

$endereco = new Endereco('sao paulo', 'rua tal', '100', 'morumbi');

$juninho = new Titular(1, 'juninho', $endereco);
$juliana = new Titular(2, 'juliana', $endereco);
$anaMaria = new Titular(3, 'ana maria', $endereco);

$primeiraConta = new Conta($juninho);
$primeiraConta->depositar(3000);

$segundaConta = new Conta($juliana);

$terceiraConta = new Conta($anaMaria);