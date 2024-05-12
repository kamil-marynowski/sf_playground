<?php

declare(strict_types=1);

namespace App\Domain\Geo\Model;

use App\Domain\Geo\ValueObject\Country\CountryCapital;
use App\Domain\Geo\ValueObject\Country\CountryCurrency;
use App\Domain\Geo\ValueObject\Country\CountryLanguage;
use App\Domain\Geo\ValueObject\Country\CountryName;
use App\Domain\Geo\ValueObject\Country\CountryUuid;

class Country
{
    private CountryUuid $uuid;

    private CountryName $name;

    private CountryLanguage $language;

    private CountryCapital $capital;

    private CountryCurrency $currency;

    public function __construct(
        CountryUuid $uuid,
        CountryName $name,
        CountryLanguage $language,
        CountryCapital $capital,
        CountryCurrency $currency
    )
    {
        $this->uuid     = $uuid;
        $this->name     = $name;
        $this->language = $language;
        $this->capital  = $capital;
        $this->currency = $currency;
    }
}