<?php

$archive = fopen('courses-list.txt', 'r');



// Lendo linha a linha:
// while(!feof($archive)){
//     $course = fgets($archive);
//     echo $course;
// }



// Lendo o arquivo todo de uma vez:
//$archiveSize = filesize('courses-list.txt');
//$course = fread($archive, $archiveSize);
//echo $course;


// Ler um arquivo todo de uma vez, embora seja bem simples, nem sempre é a solução mais inteligente.
// Tod0 o conteúdo do arquivo é armazenado na RAM desta forma, então ao ler um arquivo muito grande, podemos acabar consumindo mais recursos do que o desejado.
// Uma forma de resolver este problema, caso o seu código esteja organizado para informar todos os dados de uma vez, é estudar sobre Generators no PHP, mas isso foge do escopo deste treinamento.



fclose($archive);

// Já lê o arquivo todo de uma vez:
$courses = file_get_contents('courses-list.txt');
$arrayCourses = file('courses-list.txt');
var_dump($arrayCourses);
echo $courses;