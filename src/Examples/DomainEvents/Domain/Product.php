<?php

declare(strict_types=1);

namespace D3\Examples\DomainEvents\Domain;

use D3\Examples\DomainEvents\Domain\Product\ProductId;

final class Product
{
    private $id;

    public function __construct(ProductId $id)
    {
        $this->id = $id;
    }

    public function id(): ProductId
    {
        return $this->id;
    }

    public function dummyPrice(): int
    {
        return 100;
    }
}