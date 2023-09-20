<?php

    $array = [
        'Gabi',
        'Carlos',
        'Pedro',
        'Maria'
    ];

    $array2 = [
        'Joao',
        'Vinicius',
        'Hugo',
        'Italo',
        'Leticia'
    ];

    $alunos = array_merge($array, $array2);
    $alunos2 = $array + $array2;
    $alunos3 = [...$array, ...$array2];
    var_dump($alunos);
    var_dump($alunos2);
    var_dump($alunos3);