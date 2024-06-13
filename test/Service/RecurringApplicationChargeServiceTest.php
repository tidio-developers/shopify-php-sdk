<?php

namespace Robwittman\Shopify\Test\Service;

use Robwittman\Shopify\Test\TestCase;
use Robwittman\Shopify\Object\RecurringApplicationCharge;
use Robwittman\Shopify\Service\RecurringApplicationChargeService;

class RecurringApplicationChargeServiceTest extends TestCase
{
    public function testList()
    {
        $api = $this->getApiMock('lists/RecurringApplicationChargesList.json');
        $service = new RecurringApplicationChargeService($api);
        $charges = $service->all();
        $this->assertContainsOnlyInstancesOf(
            RecurringApplicationCharge::class,
            $charges
        );
    }

    public function testGet()
    {
        $api = $this->getApiMock('objects/RecurringApplicationCharge.json');
        $service = new RecurringApplicationChargeService($api);
        $charge = $service->get(1);
        $this->assertInstanceOf(RecurringApplicationCharge::class, $charge);
    }
}
