<?php

namespace Robwittman\Shopify\Service;

use Robwittman\Shopify\Object\Location;

class LocationService extends AbstractService
{
    /**
     * Get all locations
     *
     * @link   https://help.shopify.com/api/reference/location#index
     * @param  array $params
     * @return Location[]
     */
    public function all(array $params = [])
    {
        $endpoint = 'locations.json';
        $response = $this->request($endpoint, 'GET', $params);
        return $this->createCollection(Location::class, $response['locations']);
    }

    /**
     * Get a single location
     *
     * @link   https://help.shopify.com/api/reference/location#show
     * @param  integer $locationId
     * @param  array   $params
     * @return Location
     */
    public function get($locationId, array $params = [])
    {
        $endpoint = 'locations/'.$locationId.'.json';
        $response = $this->request($endpoint, 'GET', $params);
        return $this->createObject(Location::class, $response['location']);
    }
}
