<?php
    $dados = ['Vinicius', 10, 24];
    [$nome, $nota, $idade] = $dados; //mais comum
    list($nome, $nota, $idade) = $dados; //menos comum

    var_dump($nome, $nota, $idade);



    $dados = [
        'nome' => 'Vinicius',
        'nota' => 10,
        'idade' => 24];

    ['nome' => $nome, 'nota' => $nota, 'idade' => $idade] = $dados; //menos usual
    extract($dados); //Mais usual, Fazer somente se eu limpei a variavel antes, é perigoso usar em dados vindo de um formulario ou uma url

    var_dump(compact('nome', 'nota', 'idade'));
    var_dump($nome, $nota, $idade);



    $contas = [
        [
            'titular' => 'Vinicius Dias',
            'saldo' => 100
        ],
        [
            'titular' => 'Maria Joaquina',
            'saldo' => 1000
        ],
        [
            'titular' => 'João da Silva',
            'saldo' => 800
        ],
    ];

    foreach ($contas as ['titular' => $titular, 'saldo' => $saldo]) {
        echo "$titular possui $saldo reais" . PHP_EOL;
    }