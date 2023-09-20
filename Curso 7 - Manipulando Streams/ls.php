<?php

$currentDirectory = dir('.');
echo $currentDirectory->path . PHP_EOL;
while($archive = $currentDirectory->read()) {
    echo $archive . PHP_EOL;
}