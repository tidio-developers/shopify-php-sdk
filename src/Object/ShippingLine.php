<?php

namespace Robwittman\Shopify\Object;

use Robwittman\Shopify\Enum\Fields\ShippingLineFields;

class ShippingLine extends AbstractObject
{
    public static function getFieldsEnum()
    {
        return ShippingLineFields::getInstance();
    }
}
