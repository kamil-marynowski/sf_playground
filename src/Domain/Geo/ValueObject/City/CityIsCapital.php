<?php

declare(strict_types=1);

namespace App\Domain\Geo\ValueObject\City;

class CityIsCapital
{
    private bool $value;

    public function __construct(bool $value)
    {
        $this->value = $value;
    }

    public function getValue(): bool
    {
        return $this->value;
    }
}