<?php 


//require obriga o arquivo a vim, se não lança um fatal error
//require_once não deixa importar o mesmo arquivo mais de uma vez, ele confere se o arquivo já foi importado antes 
//include lança um warning caso não seja encontrado o arquivo mas continua o código
//include_once não deixa importar o mesmo arquivo mais de uma vez, ele confere se o arquivo já foi importado antes 


require_once 'src/conta.php';

$conta = criarConta('123.456.789-10', 'Vinicius Dias', 500);

var_dump($conta);

$conta['123.456.789-10']['saldo'] -= 1200;
var_dump($conta);
