<?php

declare(strict_types=1);

namespace D3\Domain;

use D3\Domain\ValueObject\CompletedAt;
use D3\Domain\ValueObject\Height;
use D3\Domain\ValueObject\Id;
use D3\Domain\ValueObject\Name;

final class Tower
{
    public const UNKNOWN_TOWER_NAME = 'Unknown';

    private $name;

    private $id;

    private $height;

    private $completedAt;

    public function __construct(Id $id, Name $name, Height $height, CompletedAt $completedAt)
    {
        $this->id = $id;
        $this->name = $name;
        $this->height = $height;
        $this->completedAt = $completedAt;
    }

    public function informationAboutTheTower(): string
    {
        return json_encode([
           'id' => (string) $this->id,
           'name' => (string) $this->name,
           'height' => (string) $this->height,
           'completedAt' => (string) $this->completedAt,
        ]);
    }
}