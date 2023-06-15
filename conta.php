<?php 

require_once './functions/criar-conta.php';
require_once './class/Conta.php';

$primeiraConta = new Conta(1, 'juninho');
$primeiraConta->depositar(3000);

$segundaConta = new Conta(2, 'juliana');

$terceiraConta = new Conta(3, 'ana maria');

new Conta(4, 'ana carla');