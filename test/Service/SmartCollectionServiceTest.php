<?php

namespace Robwittman\Shopify\Test\Service;

use Robwittman\Shopify\Test\TestCase;
use Robwittman\Shopify\Object\SmartCollection;
use Robwittman\Shopify\Service\SmartCollectionService;

class SmartCollectionServiceTest extends TestCase
{
    public function testList()
    {
        $api = $this->getApiMock('lists/SmartCollectionsList.json');
        $service = new SmartCollectionService($api);
        $smartCollections = $service->all();
        $this->assertContainsOnlyInstancesOf(
            SmartCollection::class,
            $smartCollections
        );
    }

    public function testGet()
    {
        $api = $this->getApiMock('objects/SmartCollection.json');
        $service = new SmartCollectionService($api);
        $smartCollection = $service->get(1234);
        $this->assertInstanceOf(SmartCollection::class, $smartCollection);
    }
}
