<?php

declare(strict_types=1);

namespace D3\Examples\DomainEvents\Domain\Event;

use D3\Examples\DomainEvents\Domain\Customer\CustomerId;
use D3\Examples\DomainEvents\Domain\DomainEvent;
use D3\Examples\DomainEvents\Domain\Product\ProductId;
use D3\Examples\DomainEvents\Domain\Vendor\VendorId;

final class PaidForProduct implements DomainEvent
{
    private $productId;

    private $customerId;

    private $vendorId;

    private $occurredOn;

    private function __construct(ProductId $productId, CustomerId $customer, VendorId $vendor)
    {
        $this->productId = $productId;
        $this->customerId = $customer;
        $this->vendorId = $vendor;

        $this->occurredOn = new \DateTimeImmutable('now');
    }

    public static function createEventWith(ProductId $productId, CustomerId $customer, VendorId $vendor): self
    {
        return new self($productId, $customer, $vendor);
    }

    public function productId(): ProductId
    {
        return $this->productId;
    }

    public function customerId(): CustomerId
    {
        return $this->customerId;
    }

    public function vendorId(): VendorId
    {
        return $this->vendorId;
    }

    public function occurredOn(): \DateTimeImmutable
    {
        return $this->occurredOn;
    }
}