<?php

require_once '../vendor/autoload.php';


use GuzzleHttp\Client;
use Hardkill551\BuscadorCursos\Buscador;
use Hardkill551\BuscadorCursos\Teste;
use Hardkill551\BuscadorCursos\Teste2;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['base_uri' => "http://alura.com.br/"]);

$crawler = new Crawler();

$url = "cursos-online-programacao.php";

$buscador = new Buscador($client, $crawler);

$courses = $buscador->buscar($url);

foreach ($courses as $course) {
    displayMessage($course);
}

Teste::teste();
Teste2::teste();
