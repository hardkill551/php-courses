<?php

    $array = [
        'Joao' => 1,
        'Vinicius' => 2,
        'Hugo' => 4,
        'Italo' => 10,
        'Leticia' => 5,
        'Gabi' => 123,
        'Carlos' => 8,
        'Pedro' => 3,
        'Maria' => 5,
    ];
    $array2 = [
        'Joao' => 1,
        'Hugo' => 4,
        'Italo' => 10,
        'Leticia' => 5,
        'Gabi' => 123,
        'Carlos' => 8,
        'Pedro' => 2,
        'Maria' => 5,
    ];
    var_dump(array_diff($array, $array2));
    var_dump(array_diff_key($array, $array2));
    var_dump(array_diff_assoc($array, $array2));

    $faltantes = array_diff_key($array, $array2);
    $nomeAlunos = array_keys($faltantes);
    $notaAlunos = array_values($faltantes);
    var_dump($faltantes);
    var_dump($nomeAlunos);
    var_dump($notaAlunos);
    var_dump(array_combine($notaAlunos,$nomeAlunos));
    var_dump(array_flip($faltantes));


