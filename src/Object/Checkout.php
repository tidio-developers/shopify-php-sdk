<?php

namespace Robwittman\Shopify\Object;

use Robwittman\Shopify\Enum\Fields\CheckoutFields;

class Checkout extends AbstractObject
{
    public static function getFieldsEnum()
    {
        return CheckoutFields::getInstance();
    }
}
