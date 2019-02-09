<?php

declare(strict_types=1);

namespace D3\Domain\ValueObject;

final class Name
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function __toString(): string
    {
        return $this->name;
    }

    public function equals(Name $name): bool
    {
        return $name === $this;
    }
}