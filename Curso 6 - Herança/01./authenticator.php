<?php
use Alura\Banco\Model\Account\Customer;
use Alura\Banco\Model\Address;
use Alura\Banco\Model\CPF;
use Alura\Banco\Model\Employee\Director;
use Alura\Banco\Model\Employee\Manager;
use Alura\Banco\Service\Authenticator;

require_once 'autoload.php';

$authenticator = new Authenticator();
$oneDirector = new Director('Pedro Dias', new CPF('321.426.789-10'), 10000);
$oneManager = new Manager('Pedro Dias', new CPF('321.426.789-10'), 10000);
$oneCustomer = new Customer('Pedro Dias', new CPF('321.426.789-10'), new Address('Rua 1', 'Bairro 1', 'Cidade 1', 'Estado 1'));

$authenticator->authenticate($oneDirector, '4321');