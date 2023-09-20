<?php
    $nome = "Vinícius Dias";
    $email = 'Vinicius@alura.com.br';
    $senha = 'ááááá';

    echo strlen($senha) . PHP_EOL; // strlen pega o tamanho em bytes, então se houver um caractere com acento, conta como 2 caracteres pois tem 2 bytes!
    echo mb_strlen($senha) . PHP_EOL; // mb_strlen corrige o problema acima!

    if(mb_strlen($senha)<8){
        echo 'Senha insegura!!' . PHP_EOL;
    } else {
        echo "Senha segura!" . PHP_EOL;
    }



    [$nome, $sobrenome] = explode(" ", $nome);

    echo 'Nome: ' . $nome . PHP_EOL;
    echo "Sobrenome: " . $sobrenome . PHP_EOL;

    $posicaoDoArroba = strpos($email, "@");
    
    $inicioDaString = substr($email, 0, $posicaoDoArroba);
    echo mb_strtolower($inicioDaString) . PHP_EOL;
    $dominioDaString = substr($email, $posicaoDoArroba+1);
    echo mb_strtoupper($dominioDaString);