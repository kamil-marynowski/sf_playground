<?php

declare(strict_types=1);

namespace App\Domain\Geo\ValueObject\City;

use Ramsey\Uuid\UuidInterface;

class CityUuid
{
    private UuidInterface $value;

    public function __construct(UuidInterface $value)
    {
        $this->value = $value;
    }

    public function getValue(): UuidInterface
    {
        return $this->value;
    }
}