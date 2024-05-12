<?php

declare(strict_types=1);

namespace App\Domain\Geo\ValueObject\Country;

use Ramsey\Uuid\UuidInterface;

class CountryUuid
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