<?php

    $person = [
        0 => [
        "Nome" => 'João',
        'Idade' => 19,
        'Carro' => 'BMW'
        ],
        1 => [
        "Nome" => 'Pedro',
        'Idade' => 32,
        'Carro' => 'FIAT UNO'
        ]
        
    ];
    foreach($person as $item){
        echo "---------------------". PHP_EOL;

        foreach($item as $ind => $data){
            echo "$ind: $data".PHP_EOL;
        }
    }
    echo "---------------------". PHP_EOL;


