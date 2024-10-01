<?php

namespace Robwittman\Shopify\Test\Service;

use Robwittman\Shopify\Test\TestCase;
use Robwittman\Shopify\Object\Transaction;
use Robwittman\Shopify\Service\TransactionService;

class TransactionServiceTest extends TestCase
{
    public function testList()
    {
        $api = $this->getApiMock('lists/TransactionsList.json');
        $service = new TransactionService($api);
        $transactions = $service->all(1);
        $this->assertContainsOnlyInstancesOf(
            Transaction::class,
            $transactions
        );
    }

    public function testGet()
    {
        $api = $this->getApiMock('objects/Transaction.json');
        $service = new TransactionService($api);
        $transaction = $service->get(1, 1234);
        $this->assertInstanceOf(Transaction::class, $transaction);
    }
}
