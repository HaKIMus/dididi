<?php

declare(strict_types=1);

namespace D3\Examples\DomainEvents\Infrastructure\Domain\Adapter;

use D3\Examples\DomainEvents\Domain\Customer;
use D3\Examples\DomainEvents\Domain\Port\ProductPaymentSystem;
use D3\Examples\DomainEvents\Domain\Product;
use D3\Examples\DomainEvents\Domain\Vendor;

final class DummyProductPaymentSystem implements ProductPaymentSystem
{
    private $payments = [];

    public function pay(Product $product, Customer $customer, Vendor $vendor): void
    {
        $this->payments[] = [
            'product' => $product,
            'customer' => $customer,
            'vendor' => $vendor,
        ];
    }
}