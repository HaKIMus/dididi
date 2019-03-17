<?php

declare(strict_types=1);

namespace D3\Tests\Examples\DomainEvents\Domain;

use D3\Examples\DomainEvents\Domain\Customer;
use D3\Examples\DomainEvents\Domain\Port\EventStore;
use D3\Examples\DomainEvents\Domain\Product;
use D3\Examples\DomainEvents\Domain\Shopping;
use D3\Examples\DomainEvents\Domain\Vendor;
use D3\Examples\DomainEvents\Domain\Vendor\VendorId;
use D3\Examples\DomainEvents\Infrastructure\Domain\Adapter\DummyEventStore;
use D3\Examples\DomainEvents\Infrastructure\Domain\Adapter\DummyProductPaymentSystem;
use PHPUnit\Framework\TestCase;

class ShoppingTest extends TestCase
{
    /**
     * @var Shopping
     */
    private $shoppingObject;

    /**
     * @var EventStore
     */
    private $eventStore;

    public function setUp(): void
    {
        $eventStore = new DummyEventStore();

        $this->eventStore = $eventStore;

        $this->shoppingObject = new Shopping($eventStore);
    }

    public function testPayingForProductShouldTriggerAnEvent(): void
    {
        $paymentSystem = new DummyProductPaymentSystem();

        $product = new Product(Product\ProductId::generate());
        $customer = new Customer(Customer\CustomerId::generate());
        $vendor = new Vendor(VendorId::generate());

        $this->shoppingObject->payForProduct(
            $paymentSystem,
            $product,
            $customer,
            $vendor
        );

        dump($this->eventStore->storedEvents());
        $this->assertCount(1, $this->eventStore->storedEvents());
    }
}