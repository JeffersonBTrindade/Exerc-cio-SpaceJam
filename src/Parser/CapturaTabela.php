<?php

namespace Forseti\ExSpacejam\Parser;

use Forseti\ExSpacejam\Iterator\TabalaIterator;

class CapturaTabela extends AbstractParser
{
    public function getIterator()
    {
        return new TabalaIterator($this->crawler->filterXPath("//body/center/table"));
    }
}