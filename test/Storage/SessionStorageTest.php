<?php

namespace Robwittman\Shopify\Test\Storage;

use Robwittman\Shopify\Test\TestCase;
use Robwittman\Shopify\Storage\SessionStorage;

class SessionStorageTest extends TestCase
{
    public function testGetSet()
    {
        $storage = new SessionStorage();
        $storage->set('test', 'test-data');
        $this->assertEquals($storage->get('test'), 'test-data');
    }
}
