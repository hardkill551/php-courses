<?php

echo "Hello World!" . PHP_EOL;
print "Hello World!" . PHP_EOL;

$screen = fopen("php://stdout", "w");
$screenError = fopen("php://stderr", "w");

fwrite($screen, "Hello World!" . PHP_EOL);
fwrite(STDOUT, "Hello World!" . PHP_EOL);

$courses = fopen('zip://archive.zip#courses-list2.txt', 'r');

stream_copy_to_stream($courses, $screen); // screen or STDOUT