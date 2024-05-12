<?php

declare(strict_types=1);

namespace App\Domain\Geo\ValueObject\Country;

use App\Domain\Geo\Model\City;

class CountryCapital
{
    private City $value;

    public function __construct(City $value)
    {
        $this->value = $value;
    }

    public function getValue(): City
    {
        return $this->value;
    }
}