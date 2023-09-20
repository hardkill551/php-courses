<?php
use Alura\Banco\Model\Address;

require_once 'autoload.php';

$firstAddress = new Address('Rua 1', 'Bairro 1', 'Cidade 1', 'Número 1');
$secondAddress = new Address('Rua 2', 'Bairro 2', 'Cidade 2', 'Número 2');
$thirdAddress = new Address('Rua 3', 'Bairro 3', 'Cidade 3', 'Número 3');

echo $firstAddress->number . PHP_EOL;
$firstAddress->number = "OUTRO";
echo $firstAddress . PHP_EOL;