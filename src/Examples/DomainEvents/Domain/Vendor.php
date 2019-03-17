<?php

declare(strict_types=1);

namespace D3\Examples\DomainEvents\Domain;

use D3\Examples\DomainEvents\Domain\Vendor\VendorId;

final class Vendor
{
    private $id;

    public function __construct(VendorId $id)
    {
        $this->id = $id;
    }

    public function id(): VendorId
    {
        return $this->id;
    }
}