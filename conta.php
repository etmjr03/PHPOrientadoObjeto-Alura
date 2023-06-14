<?php 

require_once './functions/criar-conta.php';
require_once './class/Conta.php';

$primeiraConta = new Conta();
$primeiraConta->setIdConta(1);
$primeiraConta->setNome('juninho');
$primeiraConta->depositar(3000);

$segundaConta = new Conta();
$segundaConta->setIdConta(2);
$segundaConta->setNome('juliana');
$segundaConta->depositar(1000);