<?php

$course = "Design Patterns PHP I: Boas práticas de programação" . PHP_EOL;

file_put_contents('courses-list3.txt', $course);
file_put_contents('courses-list3.txt', $course, FILE_APPEND);

echo file_get_contents('courses-list3.txt');
