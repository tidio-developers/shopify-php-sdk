<?php

namespace Robwittman\Shopify\Enum\Fields;

class AssetFields extends AbstractObjectEnum
{
    const ATTACHMENT = 'attachment';
    const CONTENT_TYPE = 'content_type';
    const CREATED_AT = 'created_at';
    const KEY = 'key';
    const PUBLIC_URL = 'public_url';
    const SIZE = 'size';
    const THEME_ID = 'theme_id';
    const UPDATED_AT = 'updated_at';
    const VALUE = 'value';

    public function getFieldTypes()
    {
        return array(
            'attachment' => 'string',
            'content_type' => 'string',
            'created_at' => 'DateTime',
            'key' => 'string',
            'public_url' => 'string',
            'size' => 'string',
            'theme_id' => 'integer',
            'updated_at' => 'DateTime',
            'value' => 'string'
        );
    }
}
