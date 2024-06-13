<?php

namespace Robwittman\Shopify\Test\Service;

use Robwittman\Shopify\Test\TestCase;
use Robwittman\Shopify\Object\Shop;
use Robwittman\Shopify\Service\ShopService;

class ShopServiceTest extends TestCase
{
    public function testGet()
    {
        $api = $this->getApiMock('objects/Shop.json');
        $service = new ShopService($api);
        $shop = $service->get(1234);
        $this->assertInstanceOf(Shop::class, $shop);
    }
}
