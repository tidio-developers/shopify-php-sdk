<?php

namespace Robwittman\Shopify\Test\Service;

use Robwittman\Shopify\Test\TestCase;
use Robwittman\Shopify\Service\AbandonedCheckoutsService;
use Robwittman\Shopify\Object\AbandonedCheckout;

class AbandonedCheckoutServiceTest extends TestCase
{
    public function testList()
    {
        $api = $this->getApiMock('lists/AbandonedCheckoutsList.json');
        $service = new AbandonedCheckoutsService($api);
        $checkouts = $service->all();
        $this->assertContainsOnlyInstancesOf(
            AbandonedCheckout::class,
            $checkouts
        );
    }
}
