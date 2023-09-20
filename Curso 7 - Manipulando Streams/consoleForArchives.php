<?php

// $keyboard = fopen('php://stdin', 'r');
// $newCourse = trim(fgets($keyboard));
$newCourse = trim(fgets(STDIN));
file_put_contents('courses-list3.txt', PHP_EOL . $newCourse, FILE_APPEND);

echo PHP_EOL . file_get_contents('courses-list3.txt');