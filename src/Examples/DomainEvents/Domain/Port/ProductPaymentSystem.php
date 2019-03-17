<?php

declare(strict_types=1);

namespace D3\Examples\DomainEvents\Domain\Port;

use D3\Examples\DomainEvents\Domain\Customer;
use D3\Examples\DomainEvents\Domain\Product;
use D3\Examples\DomainEvents\Domain\Vendor;

interface ProductPaymentSystem
{
    public function pay(Product $product, Customer $customer, Vendor $vendor): void;
}