<?php

$trans = ["hello" => "hi", "hi" => "hello"];
$string = "hi all, I said hello";
echo strtr($string, $trans) .  PHP_EOL;

echo str_replace(array_keys($trans), array_values($trans), $string);

