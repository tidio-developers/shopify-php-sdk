<?php

namespace Robwittman\Shopify\Test\Service;

use Robwittman\Shopify\Test\TestCase;
use Robwittman\Shopify\Object\Redirect;
use Robwittman\Shopify\Service\RedirectService;

class RedirectServiceTest extends TestCase
{
    public function testList()
    {
        $api = $this->getApiMock('lists/RedirectsList.json');
        $service = new RedirectService($api);
        $redirects = $service->all();
        $this->assertContainsOnlyInstancesOf(
            Redirect::class,
            $redirects
        );
    }

    public function testGet()
    {
        $api = $this->getApiMock('objects/Redirect.json');
        $service = new RedirectService($api);
        $redirect = $service->get(1);
        $this->assertInstanceOf(Redirect::class, $redirect);
    }
}
