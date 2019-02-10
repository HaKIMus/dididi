<?php

declare(strict_types=1);

namespace D3\Tests\Examples\Tower\Domain\ValueObject;

use D3\Examples\Tower\Domain\ValueObject\CompletedAt;
use D3\Examples\Tower\Domain\ValueObject\Id;
use D3\Examples\Tower\Domain\ValueObject\Name;
use PHPUnit\Framework\TestCase;

final class IdTest extends TestCase
{
    public function testIdsBasedOnTheSameResourcesAreNotEqual(): void
    {
        $name = new Name('Test');
        $completedAt = new CompletedAt(new \DateTimeImmutable('now'));

        $id1 = new Id($name, $completedAt);
        $id2 = new Id($name, $completedAt);

        $this->assertNotEquals($id1, $id2);
    }
}