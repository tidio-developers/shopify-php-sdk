<?php

namespace Robwittman\Shopify\Test\Service;

use Robwittman\Shopify\Test\TestCase;
use Robwittman\Shopify\Object\ProductImage;
use Robwittman\Shopify\Service\ProductImageService;

class ProductImageServiceTest extends TestCase
{
    public function testList()
    {
        $api = $this->getApiMock('lists/ProductImagesList.json');
        $service = new ProductImageService($api);
        $images = $service->all(1);
        $this->assertContainsOnlyInstancesOf(
            ProductImage::class,
            $images
        );
    }

    public function testGet()
    {
        $api = $this->getApiMock('objects/ProductImage.json');
        $service = new ProductImageService($api);
        $image = $service->get(1, 2);
        $this->assertInstanceOf(ProductImage::class, $image);
    }
}
