<?php

$archive = fopen('courses-list2.txt', 'w'); // Como de abertura r faz com que o arquivo seja para ser lido, w server para ser ecrito, mas o cursos vai para o inicio do arquivo e vai sobrescrever o que já está lá, a continuar a escrever colocando o cursor no final do arquivo e continuando a escrever
// r = read / não cria o arquivo
// w = write
// a = append
// r+ = read and write / não cria o arquivo
// w+ = write and read
// a+ = append and read
$course = "Design Patterns PHP II: Boas práticas de programação" . PHP_EOL;

fwrite($archive, $course);

$newCourse = file_get_contents('courses-list2.txt');
echo $newCourse;
fclose($archive);