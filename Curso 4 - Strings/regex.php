<?php
$telefones = [
    '    (24) 99999 - 9999',
    '234fa (21) 99999 - 9999 asdfas ',
    '(24) 2222 - 2222'
];

foreach ($telefones as $telefone){
    $regex = "/^(\([0-9]{2}\)) 9?[0-9]{4} - [0-9]{4}$/";
    $telefoneValido = preg_match($regex,
    $telefone,
    $verificacoes // Cria um array trazendos o que passou no regex
);
    var_dump($verificacoes);
    if($telefoneValido){
        echo "Telefone Válido" . PHP_EOL;
    } else {
        echo "Telefone Inválido" . PHP_EOL;
    }
    echo preg_replace($regex, '(XX) \2', $telefone) . PHP_EOL;
}


