<?php

namespace Robwittman\Shopify\Test\Service;

use Robwittman\Shopify\Test\TestCase;
use Robwittman\Shopify\Object\Event;
use Robwittman\Shopify\Service\EventService;

class EventServiceTest extends TestCase
{
    public function testList()
    {
        $api = $this->getApiMock('lists/EventsList.json');
        $service = new EventService($api);
        $events = $service->all();
        $this->assertContainsOnlyInstancesOf(
            Event::class,
            $events
        );
    }

    public function testGet()
    {
        $api = $this->getApiMock('objects/Event.json');
        $service = new EventService($api);
        $event = $service->get(1);
        $this->assertInstanceOf(Event::class, $event);
    }
}
