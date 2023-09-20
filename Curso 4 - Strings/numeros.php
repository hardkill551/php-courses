<?php

$anoDeNascimento = "2003     ";//funciona
$anoDeNascimento = "    2003";//funciona
$anoDeNascimento = "a    2003";//não funciona
$anoDeNascimento = "2003    a";//funciona com um aviso
$anoDeNascimento = "2g00d3";//funciona com um aviso e pega só o número 2
$anoDeNascimento = "1 9 9 7";//funciona com um aviso e pega só o número 1
$anoDeNascimento = "2003";//funciona
$anoAtual = 2023;
$idade = $anoAtual - $anoDeNascimento;


if($anoDeNascimento == 2003){
    echo "SIM";
} else {
    echo "NÃO";
}
echo PHP_EOL;
if($anoDeNascimento === 2003){
    echo "SIM";
} else {
    echo "NÃO";
}

echo PHP_EOL;



echo $idade . PHP_EOL;











$anoDeNascimento = "a2003";//funciona



if($anoDeNascimento == 0){ //antes do php 8, retornaria SIM pois ele converteria o anoDeNascimento para o valor 0, agora ele converte o valor 0 para uma string fazendo a comparação 'a2023' ser diferente de '0'
    echo "SIM";
} else {
    echo "NÃO";
}
echo PHP_EOL;
