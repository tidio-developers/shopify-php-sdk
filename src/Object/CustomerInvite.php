<?php

namespace Robwittman\Shopify\Object;

use Robwittman\Shopify\Enum\Fields\CustomerInviteFields;

class CustomerInvite extends AbstractObject
{
    public static function getFieldsEnum()
    {
        return CustomerInviteFields::getInstance();
    }
}
