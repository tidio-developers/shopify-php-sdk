<?php

namespace Robwittman\Shopify\Enum\Fields;

class CustomerFields extends AbstractObjectEnum
{
    const EMAIL_MARKETING_CONSENT = 'email_marketing_consent';
    const ADDRESSES = 'addresses';
    const CREATED_AT = 'created_at';
    const DEFAULT_ADDRESS = 'default_address';
    const EMAIL = 'email';
    const PHONE = 'phone';
    const FIRST_NAME = 'first_name';
    const ID = 'id';
    const METAFIELD = 'metafield';
    const MULTIPASS_IDENTIFER = 'multipass_identifier';
    const LAST_NAME = 'last_name';
    const LAST_ORDER_ID = 'last_order_id';
    const LAST_ORDER_NAME = 'last_order_name';
    const NOTE = 'note';
    const ORDERS_COUNT = 'orders_count';
    const STATE = 'state';
    const TAGS = 'tags';
    const TAX_EXEMPT = 'tax_exempt';
    const TOTAL_SPENT = 'total_spent';
    const UPDATED_AT = 'updated_at';
    const VERIFIED_EMAIL = 'verified_email';

    public function getFieldTypes()
    {
        return array(
            'email_marketing_consent' => 'EmailMarketingConsent',
            'addresses' => 'Address[]',
            'created_at' => 'DateTime',
            'default_address' => 'Address',
            'email' => 'string',
            'phone' => 'string',
            'first_name' => 'string',
            'id' => 'integer',
            'metafield' => 'Metafield[]',
            'multipass_identifier' => 'string',
            'last_name' => 'string',
            'last_order_id' => 'integer',
            'last_order_name' => 'string',
            'note' => 'string',
            'orders_count' => 'integer',
            'state' => 'string',
            'tags' => 'string',
            'tax_exempt' => 'boolean',
            'total_spent' => 'string',
            'updated_at' => 'DateTime',
            'verified_email' => 'boolean'
        );
    }
}
