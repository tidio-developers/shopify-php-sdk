<?php

namespace Robwittman\Shopify\Test\Service;

use Robwittman\Shopify\Test\TestCase;
use Robwittman\Shopify\Object\Product;
use Robwittman\Shopify\Service\ProductService;

class ProductServiceTest extends TestCase
{
    public function testList()
    {
        $api = $this->getApiMock('lists/ProductsList.json');
        $service = new ProductService($api);
        $products = $service->all();
        $this->assertContainsOnlyInstancesOf(
            Product::class,
            $products
        );
    }

    public function testGet()
    {
        $api = $this->getApiMock('objects/Product.json');
        $service = new ProductService($api);
        $product = $service->get(1);
        $this->assertInstanceOf(Product::class, $product);
    }
}
