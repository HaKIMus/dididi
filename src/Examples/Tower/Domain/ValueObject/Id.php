<?php

declare(strict_types=1);

namespace D3\Examples\Tower\Domain\ValueObject;

final class Id
{
    private $id;

    public function __construct(Name $name, CompletedAt $completedAt)
    {
        $this->id = $this->turnToUniqueId($name, $completedAt);
    }

    public function id(): string
    {
        return $this->id;
    }

    public function __toString(): string
    {
        return $this->id;
    }

    public function equals(Id $id): bool
    {
        return $id === $this;
    }

    private function turnToUniqueId(Name $name, CompletedAt $completedAt): string
    {
        $uniqueSuffix = $this->shortUniqueString();

        return $name . '-' . $completedAt . $uniqueSuffix;
    }

    private function shortUniqueString(): string
    {
        $str = "";

        for ($x=0; $x<10; $x++) {
            $str .= substr(
                str_shuffle("0123456789abcdefghijklmnopqrstuvwxyz"),
                0,
                1
            );
        }

        return $str;
    }
}