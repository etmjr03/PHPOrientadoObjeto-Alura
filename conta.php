<?php 

require_once './functions/criar-conta.php';
require_once './class/Conta.php';
require_once './class/Titular.php';

$primeiraConta = new Conta(new Titular(1, 'juninho'));
$primeiraConta->depositar(3000);

$segundaConta = new Conta(new Titular(2, 'juliana'));

$terceiraConta = new Conta(new Titular(3, 'ana maria'));