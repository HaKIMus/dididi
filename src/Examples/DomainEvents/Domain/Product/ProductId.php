<?php

declare(strict_types=1);

namespace D3\Examples\DomainEvents\Domain\Product;

final class ProductId
{
    private $id;

    private function __construct(string $id)
    {
        $this->id = $id;
    }

    public static function generate(): self
    {
        return new self(uniqid('id_'));
    }

    public function id(): string
    {
        return $this->id;
    }

    public function __toString(): string
    {
        return $this->id;
    }
}