<?php

require_once 'src/Cliente.php';
require_once 'src/Conta.php';
require_once 'src/Cpf.php';

$vinicius = new Cliente(new Cpf("421.654.125-69"), "Vinicius Dias");
$umaNovaConta = new Conta($vinicius);
var_dump($umaNovaConta);
$umaNovaConta->depositar(500);
$umaNovaConta->sacar(300);
$bianca = new Cliente(new Cpf("853.723.812-69"), "Bianca Dias");
$segundaConta = new Conta($bianca, 3000);


var_dump($segundaConta);
$carlos = new Cliente(new Cpf("196.765.326-63"), "Carlos Dias");
$segundaConta->transferir(2000, $umaNovaConta);

var_dump($umaNovaConta);
var_dump($segundaConta);
new Conta($carlos, 2000); //Não existe varíavel ativa, então o destrutor destrói essa conta por ela não ter nada referenciando ela

echo "A quantia de contas criadas são: " . Conta::numeroDeContas() . PHP_EOL;
