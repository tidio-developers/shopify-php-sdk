<?php

namespace Robwittman\Shopify\Test\Service;

use Robwittman\Shopify\Test\TestCase;
use Robwittman\Shopify\Object\User;
use Robwittman\Shopify\Service\UserService;

class UserServiceTest extends TestCase
{
    public function testList()
    {
        $api = $this->getApiMock('lists/UsersList.json');
        $service = new UserService($api);
        $users = $service->all();
        $this->assertContainsOnlyInstancesOf(
            User::class,
            $users
        );
    }

    public function testGet()
    {
        $api = $this->getApiMock('objects/User.json');
        $service = new UserService($api);
        $user = $service->get(1234);
        $this->assertInstanceOf(User::class, $user);
    }
}
