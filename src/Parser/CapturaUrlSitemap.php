<?php

namespace Forseti\ExSpacejam\Parser;

use Forseti\ExSpacejam\PageObject\CapturaHtml;

class CapturaUrlSitemap extends AbstractParser
{
    public function getUrlSiteMap()
    {
        $this->crawler->filterXPath('//body/center/table[2]/tr[5]/td[3]/a')->attr('href');
        return "https://www.spacejam.com/" . $this->getUrlSiteMap();
    }
}