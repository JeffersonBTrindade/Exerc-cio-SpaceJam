<?php

namespace Forseti\ExSpacejam\Parser;

use Forseti\ExSpacejam\Traits\ForsetiLoggerTrait;
use Symfony\Component\DomCrawler\Crawler;

abstract class AbstractParser
{
    use ForsetiLoggerTrait;
    protected $crawler;

    public function __construct($capturaHtml)
    {
        $this->crawler = new Crawler();
        $this->crawler->addHtmlContent($capturaHtml);
    }
}