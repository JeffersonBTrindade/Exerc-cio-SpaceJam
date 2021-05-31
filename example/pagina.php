<?php

use Forseti\ExSpacejam\PageObject\CapturaHtml;
use Forseti\ExSpacejam\Parser\CapturaTabela;
use Forseti\ExSpacejam\Parser\CapturaUrlSitemap;


require __DIR__ . "/../vendor/autoload.php";

$capturaHtml = new CapturaHtml();
$sitemapParser = new CapturaTabela($capturaHtml->getHtmlSitemap());

$teste = $sitemapParser->getIterator();
//var_dump($teste);

$tabela = $capturaHtml->getParser()->getIterator()->current();
var_dump($tabela->descricao);
var_dump($tabela->link);
