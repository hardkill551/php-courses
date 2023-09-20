<?php

$courseArchive = fopen('courses-list.txt', 'r');

echo stream_filter_append($courseArchive, 'string.toupper');
echo fread($courseArchive, filesize('courses-list.txt'));
fclose($courseArchive);