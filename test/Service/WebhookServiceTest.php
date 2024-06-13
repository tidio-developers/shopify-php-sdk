<?php

namespace Robwittman\Shopify\Test\Service;

use Robwittman\Shopify\Test\TestCase;
use Robwittman\Shopify\Service\WebhookService;
use Robwittman\Shopify\Object\Webhook;

class WebhookServiceTest extends TestCase
{
    public function testList()
    {
        $api = $this->getApiMock('lists/WebhooksList.json');
        $service = new WebhookService($api);
        $webhooks = $service->all();
        $this->assertContainsOnlyInstancesOf(
            Webhook::class,
            $webhooks
        );
    }

    public function testGet()
    {
        $api = $this->getApiMock('objects/Webhook.json');
        $service = new WebhookService($api);
        $webhook = $service->get(1234);
        $this->assertInstanceOf(Webhook::class, $webhook);
    }
}
