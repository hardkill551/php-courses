<?php

$string = "Texto com qualquer coisa poxa e caramba";
$string2 = str_replace('poxa', "***", $string);
$string3 = str_replace(['poxa', 'caramba'], "***", $string);
$string4 = str_replace(['poxa', 'caramba'], ['***'], $string);
$string5 = str_replace(['poxa', 'caramba'], ['p', 'c'], $string);

echo $string5;


$string6 = strtr($string, 'poxa', '***@'); //trabalha com caracteres!
$string7 = strtr($string, ['poxa' => 'p', 'caramba' => "c"]);

echo $string7;