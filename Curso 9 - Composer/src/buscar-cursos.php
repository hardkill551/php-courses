<?php

require '../vendor/autoload.php';

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client();

$anwser = $client->request('GET', 'http://alura.com.br/cursos-online-programacao.php');

$html = $anwser->getBody();
$crawler = new Crawler();
$crawler->addHtmlContent($html);

$courses = $crawler->filter('span.card-curso__nome');


foreach ($courses as $course) {
    echo $course->textContent . PHP_EOL;
}
