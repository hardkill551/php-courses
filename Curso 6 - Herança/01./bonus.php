<?php

require_once 'autoload.php';

use Alura\Banco\Model\CPF;
use Alura\Banco\Model\Employee\{Developer, Manager, Director, VideoEditor};
use Alura\Banco\Service\BonusController;

$oneEmployee = new Developer('Vinicius Dias', new CPF('123.456.789-10'), 1000);
$oneManager = new Manager('Joana Dias', new CPF('123.426.789-10'), 3000);
$oneDirector = new Director('Pedro Dias', new CPF('321.426.789-10'), 5000);
$oneEditor = new VideoEditor('Pedro Dias', new CPF('321.426.789-10'), 3500);

$oneEmployee->upgradeLevel();

$controller = new BonusController();
$controller->addBonus($oneManager);
$controller->addBonus($oneEmployee);
$controller->addBonus($oneDirector);
$controller->addBonus($oneEditor);

echo $controller->getBonusTotal() . PHP_EOL;