<?php

namespace Robwittman\Shopify\Test\Service;

use Robwittman\Shopify\Test\TestCase;
use Robwittman\Shopify\Object\Country;
use Robwittman\Shopify\Service\CountryService;

class CountryServiceTest extends TestCase
{
    public function testList()
    {
        $api = $this->getApiMock('lists/CountriesList.json');
        $service = new CountryService($api);
        $countries = $service->all();
        $this->assertContainsOnlyInstancesOf(
            Country::class,
            $countries
        );
    }

    public function testGet()
    {
        $api = $this->getApiMock('objects/Country.json');
        $service = new CountryService($api);
        $country = $service->get(1);
        $this->assertInstanceOf(Country::class, $country);
    }
}
