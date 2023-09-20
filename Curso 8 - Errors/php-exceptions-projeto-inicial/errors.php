<?php

//ini_set('error_reporting', E_ALL); mostrar todos os erros, inclusive notice   
//ini_set('display_errors', 1); padrão que vá vem quando se instala o php, quando estiver no ambiente de produção, geralmente desliga, mas em dev, tem que ter
//ini_set('log_errors', 1); colocar no ambiente de produção
//ini_set('error_log', '/var/log/minha-aplicacao);

error_reporting(E_ALL);
set_error_handler(function($errno, $errstr, $errfile, $errlive) {
    
    switch($errno){
        
        case E_WARNING:
            echo "Warning: $errstr in $errfile on line $errlive" . PHP_EOL;
            break;
        case E_NOTICE:
            echo "Notice: $errstr in $errfile on line $errlive" . PHP_EOL;
            break;
        default:
            echo "Unknown error: $errstr in $errfile on line $errlive" . PHP_EOL;
    }
    return true;
});
echo $variavel;
echo @$array[12]; //O arroba faz o erro não aparecer, nunca usar!!
//echo CONSTANTE; iniciando uma constante sem definir ela antes, fatal error




