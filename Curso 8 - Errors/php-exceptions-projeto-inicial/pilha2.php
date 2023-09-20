<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;


    try {
        funcao2();
    } catch (\RuntimeException | \DivisionByZeroError$errorOrException) {
        echo $errorOrException->getMessage() . PHP_EOL;
        echo $errorOrException->getLine() . PHP_EOL;
        echo $errorOrException->getTraceAsString() . PHP_EOL;

    }
    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;


    for ($i = 1; $i <= 5; $i++) {
        echo $i . PHP_EOL;
    }

    //var_dump(debug_backtrace());
    print_r(debug_backtrace());
    echo 'Saindo da função 2' . PHP_EOL;
    throw new \DivisionByZeroError("Impossível Dividir por zero", 404);

}



echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
