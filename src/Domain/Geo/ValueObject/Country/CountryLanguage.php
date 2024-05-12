<?php

declare(strict_types=1);

namespace App\Domain\Geo\ValueObject\Country;

use App\Domain\Geo\Model\Language;

class CountryLanguage
{
    private Language $value;

    public function __construct(Language $language)
    {
        $this->value = $language;
    }

    public function getValue(): Language
    {
        return $this->value;
    }
}