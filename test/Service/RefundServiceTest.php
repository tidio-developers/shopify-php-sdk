<?php

namespace Robwittman\Shopify\Test\Service;

use Robwittman\Shopify\Test\TestCase;
use Robwittman\Shopify\Object\Refund;
use Robwittman\Shopify\Service\RefundService;

class RefundServiceTest extends TestCase
{
    public function testList()
    {
        $api = $this->getApiMock('lists/RefundsList.json');
        $service = new RefundService($api);
        $refunds = $service->all(1);
        $this->assertContainsOnlyInstancesOf(
            Refund::class,
            $refunds
        );
    }

    public function testGet()
    {
        $api = $this->getApiMock('objects/Refund.json');
        $service = new RefundService($api);
        $refund = $service->get(1, 1234);
        $this->assertInstanceOf(Refund::class, $refund);
    }
}
