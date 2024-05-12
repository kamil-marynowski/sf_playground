<?php

declare(strict_types=1);

namespace App\Domain\Geo\ValueObject\Country;

class CountryCurrency
{
    private string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}