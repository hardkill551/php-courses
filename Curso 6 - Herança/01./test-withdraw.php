<?php


use Alura\Banco\Model\Account\{Customer, SavingAccount};
use Alura\Banco\Model\{Address, CPF};
require_once 'autoload.php';

$account = new SavingAccount(new Customer('Vinicius Dias', new CPF('123.456.789-10'), new Address('Petrópolis', 'um bairro', 'minha rua', '71B')));
$account->deposit(500);
$account->withdraw(600);
var_dump($account);