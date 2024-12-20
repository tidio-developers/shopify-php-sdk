<?php

namespace Robwittman\Shopify\Test\Service;

use Robwittman\Shopify\Test\TestCase;
use Robwittman\Shopify\Service\UsageChargeService;
use Robwittman\Shopify\Object\UsageCharge;

class UsageChargeServiceTest extends TestCase
{
    public function testList()
    {
        $api = $this->getApiMock('lists/UsageChargesList.json');
        $service = new UsageChargeService($api);
        $charges = $service->all(1);
        $this->assertContainsOnlyInstancesOf(
            UsageCharge::class,
            $charges
        );
    }

    public function testGet()
    {
        $api = $this->getApiMock('objects/UsageCharge.json');
        $service = new UsageChargeService($api);
        $charge = $service->get(1, 1234);
        $this->assertInstanceOf(UsageCharge::class, $charge);
    }
}
