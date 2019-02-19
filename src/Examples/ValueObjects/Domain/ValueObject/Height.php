<?php

declare(strict_types=1);

namespace D3\Examples\ValueObjects\Domain\ValueObject;

final class Height
{
    public const MEASURE_CENTIMETRE = 'cm';
    public const MEASURE_METRE = 'm';

    private $length;

    private $measure;

    public function __construct(float $length, string $measure)
    {
        $this->length = $length;
        $this->measure = $measure;
    }

    public function height(): string
    {
        return $this->length . ' ' . $this->measure;
    }

    public function __toString(): string
    {
        return $this->length . ' ' . $this->measure;
    }

    public function equals(Height $height): bool
    {
        return $height === $this;
    }
}