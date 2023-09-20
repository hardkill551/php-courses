<?php

$myCourses = file('courses-list.txt');
$othersCourses = file('courses-list2.txt');

$archiveCSV = fopen('courses.csv', 'w');

foreach ($myCourses as $course) {
    $line = [trim(mb_convert_encoding($course, 'windows-1252', 'UTF-8')), "Sim"];
    //fwrite($archiveCSV, implode(',', $line));
    fputcsv($archiveCSV, $line, ';');
}

foreach ($othersCourses as $course) {
    $line = [trim(mb_convert_encoding($course, 'windows-1252', 'UTF-8')), "Não"];
    //fwrite($archiveCSV, implode(',', $line));
    fputcsv($archiveCSV, $line, ';');
}