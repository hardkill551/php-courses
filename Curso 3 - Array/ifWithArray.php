<?php

    $array = [
        'Joao' => 1,
        'Vinicius' => null,
        'Hugo' => '4',
        'Italo' => 10,
        'Leticia' => 5,
        'Gabi' => 123,
        'Carlos' => 8,
        'Pedro' => 3,
        'Maria' => 5,
    ];

    $include = key_exists('Gabi', $array);
    $include2 = array_key_exists('Gabi', $array);
    var_dump($include2);
    var_dump(isset($array['Vinicius']));
    $include = in_array(123, $array);
    var_dump($include);
    $include = in_array(4, $array, true);
    var_dump($include);


    // array_key_exists = verifica se a chave existe
    // in_array = verifica se o valor existe
    // isset = verifica se a chave existe e não é nula
    echo array_search(10, $array, true);


