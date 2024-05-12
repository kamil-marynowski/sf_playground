<?php

declare(strict_types=1);

namespace App\Domain\Geo\ValueObject\Language;

use Ramsey\Uuid\UuidInterface;

class LanguageUuid
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