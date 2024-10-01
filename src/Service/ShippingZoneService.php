<?php

namespace Robwittman\Shopify\Service;

use Robwittman\Shopify\Object\ShippingZone;
use Robwittman\Shopify\Exception\ShopifySdkException;

class ShippingZoneService extends AbstractService
{
    /**
     * Return a list of shipping zones
     *
     * @link   https://help.shopify.com/api/reference/shipping_zone#index
     * @throws ShopifySdkException
     */
    public function all()
    {
        throw new ShopifySdkException("ShippingZoneService not implemented");
    }
}
