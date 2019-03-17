<?php

declare(strict_types=1);

namespace D3\Examples\DomainEvents\Domain\Port;

use D3\Examples\DomainEvents\Domain\DomainEvent;

interface EventStore
{
    public function append(DomainEvent $event): void;

    public function storedEvents(): array;
}