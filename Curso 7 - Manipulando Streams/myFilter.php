<?php

require 'CreateFilter.php';

$arquivoCursos = fopen('courses-list.txt', 'r');

stream_filter_register('alura.partes', CreateFilter::class);
stream_filter_append($arquivoCursos, 'alura.partes');

echo fread($arquivoCursos, filesize('courses-list.txt'));