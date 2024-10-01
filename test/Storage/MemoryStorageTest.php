<?php

namespace Robwittman\Shopify\Test\Storage;

use Robwittman\Shopify\Test\TestCase;
use Robwittman\Shopify\Storage\MemoryStorage;

class MemoryStorageTest extends TestCase
{
    public function testGetSet()
    {
        $storage = new MemoryStorage();
        $storage->set('test', 'test-data');
        $this->assertEquals($storage->get('test'), 'test-data');
    }
}
