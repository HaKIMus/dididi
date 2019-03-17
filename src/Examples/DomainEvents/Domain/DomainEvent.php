<?php

declare(strict_types=1);

namespace D3\Examples\DomainEvents\Domain;

interface DomainEvent
{
    public function occurredOn(): \DateTimeImmutable;
}