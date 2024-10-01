<?php

namespace Robwittman\Shopify\Object;

use Robwittman\Shopify\Enum\Fields\PriceRuleFields;

class PriceRule extends AbstractObject
{
    public static function getFieldsEnum()
    {
        return PriceRuleFields::getInstance();
    }
}
