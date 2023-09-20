<?php

require_once 'src/conta.php';

$umaNovaConta = new Conta1("NotError");
var_dump($umaNovaConta);

$umaNovaConta->saldo = 2000;
$umaNovaConta->cpfTitular = '678.190.654-71';
$umaNovaConta->nomeTitular = "João Dias";
var_dump($umaNovaConta);

$segundaConta = new Conta1("NotError");

$segundaConta->saldo = 6000;
$segundaConta->cpfTitular = '638.190.654-71';
$segundaConta->nomeTitular = "Pedro Lucas";

var_dump($segundaConta);


echo $segundaConta->saldo . PHP_EOL;

$segundaConta->saldo -= 500;

echo $segundaConta->saldo . PHP_EOL;



$a = 4;
$b = $a;
$b++;
echo $b . PHP_EOL;
echo $a . PHP_EOL;


$c = $segundaConta;
$c->saldo = 2000;
var_dump($segundaConta);
