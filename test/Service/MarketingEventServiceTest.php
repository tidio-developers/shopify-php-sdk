<?php

namespace Robwittman\Shopify\Test\Service;

use Robwittman\Shopify\Test\TestCase;
use Robwittman\Shopify\Object\MarketingEvent;
use Robwittman\Shopify\Service\MarketingEventService;

class MarketingEventServiceTest extends TestCase
{
    public function testList()
    {
        $api = $this->getApiMock('lists/MarketingEventsList.json');
        $service = new MarketingEventService($api);
        $events = $service->all();
        $this->assertContainsOnlyInstancesOf(
            MarketingEvent::class,
            $events
        );
    }

    public function testGet()
    {
        $api = $this->getApiMock('objects/MarketingEvent.json');
        $service = new MarketingEventService($api);
        $event = $service->get(1);
        $this->assertInstanceOf(MarketingEvent::class, $event);
    }
}
