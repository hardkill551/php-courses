<?php
    $array = [
        1,
        3,
        4,
        10,
        5,
        123,
        8,
        3,
        5,

    ];

    $arrayOrdenado = $array;
    sort($arrayOrdenado);

    echo "Array Desordenado: " . PHP_EOL;
    var_dump($array);

    echo "Array Ordenado: " . PHP_EOL;
    var_dump($arrayOrdenado);