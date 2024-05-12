<?php

declare(strict_types=1);

namespace App\Domain\Geo\ValueObject\City;

use App\Domain\Geo\Model\Country;

class CityCountry
{
    private Country $value;

    public function __construct(Country $value)
    {
        $this->value = $value;
    }

    public function getValue(): Country
    {
        return $this->value;
    }
}