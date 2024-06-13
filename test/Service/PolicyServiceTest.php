<?php

namespace Robwittman\Shopify\Test\Service;

use Robwittman\Shopify\Test\TestCase;
use Robwittman\Shopify\Service\PolicyService;
use Robwittman\Shopify\Object\Policy;

class PolicyServiceTest extends TestCase
{
    public function testList()
    {
        $api = $this->getApiMock('lists/PoliciesList.json');
        $service = new PolicyService($api);
        $policies = $service->all();
        $this->assertContainsOnlyInstancesOf(
            Policy::class,
            $policies
        );
    }
}
