<?php

namespace Robwittman\Shopify\Enum\Fields;

class EmailMarketingConsentFields extends AbstractObjectEnum
{
    const STATE = 'state';
    const OPT_IN_LEVEL = 'opt_in_level';
    const CONSENT_UPDATED_AT = 'consent_updated_at';

    public function getFieldTypes()
    {
        return array(
            'state' => 'string',
            'opt_in_level' => 'string',
            'consent_updated_at' => 'DateTime',
        );
    }
}
