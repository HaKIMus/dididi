<?php

declare(strict_types=1);

namespace D3\Examples\DomainEvents\Domain;

use D3\Examples\DomainEvents\Domain\Event\PaidForProduct;
use D3\Examples\DomainEvents\Domain\Port\EventStore;
use D3\Examples\DomainEvents\Domain\Port\ProductPaymentSystem;

final class Shopping
{
    private $eventStore;

    public function __construct(EventStore $eventStore)
    {
        $this->eventStore = $eventStore;
    }

    public function payForProduct(
        ProductPaymentSystem $paymentSystem,
        Product $product,
        Customer $customer,
        Vendor $vendor
    ): void {
        $paymentSystem->pay($product, $customer, $vendor);

        $event = PaidForProduct::createEventWith($product->id(), $customer->id(), $vendor->id());
        $this->eventStore->append($event);
    }
}