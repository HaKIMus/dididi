<?php

declare(strict_types=1);

namespace D3\Examples\ValueObjects\Domain\ValueObject;

final class CompletedAt
{
    private $completedAt;

    public function __construct(\DateTimeImmutable $completedAt)
    {
        $this->completedAt = $completedAt;
    }

    public function completedAt(): \DateTimeImmutable
    {
        return $this->completedAt;
    }

    public function __toString(): string
    {
        return $this->completedAt->format('d-m-Y H:i:s P');
    }

    public function equals(CompletedAt $completedAt): bool
    {
        return $completedAt === $this;
    }
}