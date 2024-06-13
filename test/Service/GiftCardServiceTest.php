<?php

namespace Robwittman\Shopify\Test\Service;

use Robwittman\Shopify\Test\TestCase;
use Robwittman\Shopify\Object\GiftCard;
use Robwittman\Shopify\Service\GiftCardService;

class GiftCardServiceTest extends TestCase
{
    public function testList()
    {
        $api = $this->getApiMock('lists/GiftCardsList.json');
        $service = new GiftCardService($api);
        $giftCards = $service->all();
        $this->assertContainsOnlyInstancesOf(
            GiftCard::class,
            $giftCards
        );
    }

    public function testGet()
    {
        $api = $this->getApiMock('objects/GiftCard.json');
        $service = new GiftCardService($api);
        $giftCard = $service->get(1);
        $this->assertInstanceOf(GiftCard::class, $giftCard);
    }
}
