<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;


    try {
        funcao2();
    } catch (\Throwable $errorOrException) {
        echo $errorOrException->getMessage() . PHP_EOL;
        echo $errorOrException->getLine() . PHP_EOL;
        echo $errorOrException->getTraceAsString() . PHP_EOL;

    }

    try {
        funcao2();
    } catch (\Exception | \Error $th) {
        echo "Aconteceu um erro na função 2, voltando para a função 1" . PHP_EOL;
    }

    try {
        funcao2();
    } catch (\RuntimeException | \DivisionByZeroError $th) {
        echo "Aconteceu um erro na função 2, voltando para a função 1" . PHP_EOL;
    }

    try {
        funcao2();
    } catch (\RuntimeException $th) {
        echo "Aconteceu um erro na função 2, voltando para a função 1" . PHP_EOL;
    } catch (\DivisionByZeroError) {
        echo "Não foi possível dividir por zero" . PHP_EOL;
    }

    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;

    $divisao = intdiv(5, 0);
    $arrayFixo = new SplFixedArray(2);
    $arrayFixo[3] = "Valor";


    for ($i = 1; $i <= 5; $i++) {
        echo $i . PHP_EOL;
    }

    //var_dump(debug_backtrace());
    print_r(debug_backtrace());
    echo 'Saindo da função 2' . PHP_EOL;
}



echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
