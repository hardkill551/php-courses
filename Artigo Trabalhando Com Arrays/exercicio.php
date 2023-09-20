<?php
    $dados = [
        [
            "pais" => "Brasil",
            "medalhas" => [
                "ouro" => 3,
                "prata" => 5,
                "bronze" => 3
            ]
        ],
        [
            "pais" => "Costa rica",
            "medalhas" => [
                "ouro" => 5,
                "prata" => 4,
                "bronze" => 4
            ]
        ],
        [
            "pais" => "Estados unidos",
            "medalhas" => [
                "ouro" => 4,
                "prata" => 3,
                "bronze" => 5
            ]
        ],
        [
            "pais" => "Trindade e tobago",
            "medalhas" => [
                "ouro" => 4,
                "prata" => 3,
                "bronze" => 4
            ]
        ]
            ];
            echo "Quantia de países participantes: " . count($dados) . PHP_EOL;

            $dados = array_map(function ($item){
                $item['pais'] = mb_strtoupper($item['pais']);
                return $item;
            }, $dados);

            foreach($dados as &$item){
                echo $item['pais'] . PHP_EOL;
            }

            function ordena($item1, $item2){
                $medalhas1 = $item1['medalhas'];
                $medalhas2 = $item2['medalhas'];

                return $medalhas2['ouro'] - $medalhas1['ouro'] !== 0
                ? $medalhas2['ouro'] - $medalhas1['ouro']
                : ($medalhas2['prata'] - $medalhas1['prata'] !== 0
                ? $medalhas2['prata'] - $medalhas1['prata'] 
                : $medalhas2['bronze'] - $medalhas1['bronze']);
                }
                usort($dados, 'ordena');
                var_dump($dados);
            $valorInicial = 0;
            $numeroDeMedalhas = array_reduce($dados, function ($medalhasAcumuladas, $itemAtual) {
                $medalhasDoPais = array_reduce($itemAtual['medalhas'], function ($medalhasAcumuladasDoPaisAtual, $medalhasDoPaisAtual) {
                    return $medalhasAcumuladasDoPaisAtual + $medalhasDoPaisAtual;
                }, 0);
            
                return $medalhasAcumuladas + $medalhasDoPais;
            }, 0);
            $paisesComNomeSemEspaco = array_filter($dados, function ($item) {
                echo strpos($item['pais'], ' ') . PHP_EOL;
                return strpos($item['pais'], ' ') === false;
                 
            });
            var_dump($paisesComNomeSemEspaco);
            echo "Total de medalhas entregues: $numeroDeMedalhas";

