<?php
    $csv = "Vinícius Dias, 24, vinicius@alura.com.br, 12345";
    var_dump(explode(", ", $csv));
    $array = explode(", ", $csv);
    [$name, $age, $email, $password] = $array;
    echo "$name $age $email $password";
    echo PHP_EOL;
    $string = implode(PHP_EOL, $array);
    $string = implode(', ', $array);
    echo $string;

