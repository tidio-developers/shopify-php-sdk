<?php

namespace Robwittman\Shopify\Object;

use Robwittman\Shopify\Enum\Fields\CollectionListingFields;

class CollectionListing extends AbstractObject
{
    public static function getFieldsEnum()
    {
        return CollectionListingFields::getInstance();
    }
}
