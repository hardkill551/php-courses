<?php

namespace Hardkill551\BuscadorCursos;

use GuzzleHttp\ClientInterface;
use Symfony\Component\DomCrawler\Crawler;

class Buscador
{
    private $client;
    private $crawler;

    public function __construct(ClientInterface $client, Crawler $crawler)
    {
        $this->client = $client;
        $this->crawler = $crawler;
    }

    public function buscar($url): array
    {

        $anwser = $this->client->request('GET', $url);

        $html = $anwser->getBody();
        $this->crawler->addHtmlContent($html);

        $coursesElements = $this->crawler->filter('span.card-curso__nome');
        $courses = [];

        foreach ($coursesElements as $course) {
            $courses[] = $course->textContent;
        }
        return $courses;
    }
}
