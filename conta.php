<?php 

require_once './functions/criar-conta.php';
require_once './class/Conta.php';

$primeiraConta = new Conta();
$primeiraConta->idConta = 1;
$primeiraConta->nome = 'juninho';
$primeiraConta->depositar(3000);

$segundaConta = new Conta();
$segundaConta->idConta = 2;
$segundaConta->nome = 'Julia';