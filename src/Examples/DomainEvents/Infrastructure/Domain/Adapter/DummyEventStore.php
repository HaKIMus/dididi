<?php

declare(strict_types=1);

namespace D3\Examples\DomainEvents\Infrastructure\Domain\Adapter;

use D3\Examples\DomainEvents\Domain\DomainEvent;
use D3\Examples\DomainEvents\Domain\Port\EventStore;

class DummyEventStore implements EventStore
{
    private $events = [];

    public function append(DomainEvent $event): void
    {
        $this->events[] = $event;
    }

    public function storedEvents(): array
    {
        return $this->events;
    }
}