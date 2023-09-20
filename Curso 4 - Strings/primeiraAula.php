<?php
    $nome = 'Gabriela Dias Almeida';
    $nomeProcurado = 'Dias';
    $bool = str_contains($nome, $nomeProcurado); // php8.0 para cima
    $boolOrPosition = strpos($nome, $nomeProcurado); // Ou vai retornar false caso não esteja lá o nome, ou vai retornar o index de onde está a palavra!

    var_dump($boolOrPosition);
    if($bool){
        echo "Contém o nome $nomeProcurado";

    } else{
        echo "Não contém o nome $nomeProcurado";
    }