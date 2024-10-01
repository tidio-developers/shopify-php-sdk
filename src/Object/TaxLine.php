<?php

namespace Robwittman\Shopify\Object;

use Robwittman\Shopify\Enum\Fields\TaxLineFields;

class TaxLine extends AbstractObject
{
    public static function getFieldsEnum()
    {
        return TaxLineFields::getInstance();
    }
}
