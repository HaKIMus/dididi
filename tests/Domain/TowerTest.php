<?php

declare(strict_types=1);

namespace D3\Tests\Domain;

use D3\Domain\Tower;
use D3\Domain\ValueObject\CompletedAt;
use D3\Domain\ValueObject\Height;
use D3\Domain\ValueObject\Id;
use D3\Domain\ValueObject\Name;
use PHPUnit\Framework\TestCase;

final class TowerTest extends TestCase
{
    /**
     * @dataProvider defaultTowerConstructionParametersProvider
     */
    public function testConstructionOfTower(
        Id $id,
        Name $name,
        Height $height,
        CompletedAt $completedAt
    ): void {
        $tower = new Tower(
            $id,
            $name,
            $height,
            $completedAt
        );

        $expectedInfo = json_encode([
            'id' => (string) $id,
            'name' => (string) $name,
            'height' => (string) $height,
            'completedAt' => (string) $completedAt,
        ]);

        $this->assertJson($tower->informationAboutTheTower());
        $this->assertJsonStringEqualsJsonString($expectedInfo, $tower->informationAboutTheTower());
    }

    public function defaultTowerConstructionParametersProvider(): array
    {
        $name = new Name('Default');
        $completedAt = new CompletedAt(new \DateTimeImmutable('now'));
        $height = new Height(100.00, Height::MEASURE_METRE);

        $id = new Id($name, $completedAt);

        return [
            [$id, $name, $height, $completedAt]
        ];
    }
}