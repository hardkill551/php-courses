<?php

require_once 'autoload.php';

use Alura\Banco\Model\Account\{Customer, SavingAccount, CurrentAccount};
use Alura\Banco\Model\{Address, CPF};

$address = new Address('Petrópolis', 'um bairro', 'minha rua', '71B');
$vinicius = new Customer('Vinicius Dias', new CPF('123.456.789-10'), $address);
$firstAccount = new CurrentAccount($vinicius, 0);
$firstAccount->deposit(500);
$firstAccount->withdraw(300); // isso é ok

echo $firstAccount->getName() . PHP_EOL;
echo $firstAccount->getCpf() . PHP_EOL;
echo $firstAccount->getBalance() . PHP_EOL;

$patricia = new Customer('Patricia', new CPF('698.549.548-10'),  $address);
$secondAccount = new SavingAccount($patricia, 0);
$firstAccount->transfer(100, $secondAccount);
var_dump($secondAccount);

$outroaddress = new Address('A', 'b', 'c', '1D');
$outra = new CurrentAccount(new Customer( 'Abcdefg', new CPF('123.654.789-01'), $outroaddress), 1);
unset($secondAccount);
echo CurrentAccount::countAccount();
