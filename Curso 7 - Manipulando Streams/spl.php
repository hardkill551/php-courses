<?php

$courseArchive = new SplFileObject('courses.csv');

while (!$courseArchive->eof()) {
    $line = $courseArchive->fgetcsv(';');
    echo mb_convert_encoding($line[0], 'UTF-8', 'windows-1252') . PHP_EOL;
}

$date = new DateTime();
$date->setTimestamp($courseArchive->getMTime());
echo $date->format('Y-m-d H:i:s');