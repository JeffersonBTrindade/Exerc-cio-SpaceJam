<?php

namespace Forseti\ExSpacejam\PageObject;

use Forseti\ExSpacejam\Enum\Urls;
use Forseti\ExSpacejam\Parser\CapturaTabela;

class CapturaHtml extends AbstractPageObject
{
    public function getResponseHome()
    {
        return $response = $this->request("GET", Urls::HOME);
    }

    public function getResponseSitemap()
    {
        return $response = $this->request("GET", Urls::SITEMAP);
    }

    public function getHtmlHome()
    {
        return $this->getResponseHome()->getBody()->getContents();
    }

    public function getHtmlSitemap()
    {
        return $this->getResponseSitemap()->getBody()->getContents();
    }

    public function getParser()
    {
        return new CapturaTabela($this->getHtmlSitemap());
    }
}