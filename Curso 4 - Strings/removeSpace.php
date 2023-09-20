<?php
    $email = "vinicius@alura.com.br ";
    $csv = ",.Vinícius Dias, 24, vinicius@alura.com.br, 12345,.";

    echo trim($email) . PHP_EOL;
    echo trim($csv, ",.") . PHP_EOL;
    echo ltrim($csv, ",.") . PHP_EOL;
    echo rtrim($csv, ",.") . PHP_EOL;