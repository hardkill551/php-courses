<?php
    $person = [
        34 => [
        "Nome" => 'João',
        'Idade' => 19,
        'Carro' => 'BMW'
        ],
        1 => [
        "Nome" => 'Pedro',
        'Idade' => 32,
        'Carro' => 'FIAT UNO'
        ],
        0 => [
            "Nome" => 'Maria',
            'Idade' => 23,
            'Carro' => 'AUDI R8'
        ],
        234 => [
            "Nome" => 'Carlos',
            'Idade' => 67,
            'Carro' => 'CHEVET'
        ],
        25 => [
            "Nome" => 'Paulo',
            'Idade' => 5,
            'Carro' => 'CORSA'
        ]
        
    ];

    function ordenaNotas(array $nota1, array $nota2){
        if($nota1['Idade'] > $nota2['Idade']){
            return 1;
        }
        else if($nota2['Idade'] > $nota1['Idade']){
            return -1;
        }
        return 0;
    }
    function ordenaNotas2(array $nota1, array $nota2){
        return $nota1['Idade'] <=> $nota2['Idade'];
    }

    usort($person, 'ordenaNotas2');



    foreach($person as $item){
        echo "---------------------". PHP_EOL;

        foreach($item as $ind => $data){
            echo "$ind: $data".PHP_EOL;
        }
    }
    echo "---------------------". PHP_EOL;


