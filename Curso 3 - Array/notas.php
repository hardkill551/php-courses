<?php

    $array = [
        'Joao' => 1,
        'Vinicus' => 3,
        'Hugo' => 4,
        'Italo' => 10,
        'Leticia' => 5,
        'Gabi' => 123,
        'Carlos' => 8,
        'Pedro' => 3,
        'Maria' => 5,
    ];
    asort($array);
    arsort($array);
    var_dump($array);
    ksort($array);
    krsort($array);
    var_dump($array);


    if(is_array($array)){
        echo "Sim é um array" . PHP_EOL;
    } else echo "Não é um array" . PHP_EOL;

    $arrayDefinido = [
        0 => "Um",
        1 => "Dois",
        2 => "Três"
    ];

    var_dump(array_is_list($array));
    var_dump(array_is_list($arrayDefinido));

