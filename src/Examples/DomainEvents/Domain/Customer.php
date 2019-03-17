<?php

declare(strict_types=1);

namespace D3\Examples\DomainEvents\Domain;

use D3\Examples\DomainEvents\Domain\Customer\CustomerId;

final class Customer
{
    private $id;

    public function __construct(CustomerId $id)
    {
        $this->id = $id;
    }

    public function id(): CustomerId
    {
        return $this->id;
    }
}