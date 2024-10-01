<?php

namespace Robwittman\Shopify\Test\Service;

use Robwittman\Shopify\Test\TestCase;
use Robwittman\Shopify\Object\CustomCollection;
use Robwittman\Shopify\Service\CustomCollectionService;

class CustomCollectionServiceTest extends TestCase
{
    public function testList()
    {
        $api = $this->getApiMock('lists/CustomCollectionsList.json');
        $service = new CustomCollectionService($api);
        $collections = $service->all();
        $this->assertContainsOnlyInstancesOf(
            CustomCollection::class,
            $collections
        );
    }

    public function testGet()
    {
        $api = $this->getApiMock('objects/CustomCollection.json');
        $service = new CustomCollectionService($api);
        $collection = $service->get(1);
        $this->assertInstanceOf(CustomCollection::class, $collection);
    }
}
