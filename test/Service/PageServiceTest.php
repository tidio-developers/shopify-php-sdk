<?php

namespace Robwittman\Shopify\Test\Service;

use Robwittman\Shopify\Test\TestCase;
use Robwittman\Shopify\Object\Page;
use Robwittman\Shopify\Service\PageService;

class PageServiceTest extends TestCase
{
    public function testList()
    {
        $api = $this->getApiMock('lists/PagesList.json');
        $service = new PageService($api);
        $pages = $service->all();
        $this->assertContainsOnlyInstancesOf(
            Page::class,
            $pages
        );
    }

    public function testGet()
    {
        $api = $this->getApiMock('objects/Page.json');
        $service = new PageService($api);
        $page = $service->get(1);
        $this->assertInstanceOf(Page::class, $page);
    }
}
