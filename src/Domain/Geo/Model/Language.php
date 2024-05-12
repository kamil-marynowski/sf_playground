<?php

declare(strict_types=1);

namespace App\Domain\Geo\Model;

use App\Domain\Geo\ValueObject\Language\LanguageIsoCode;
use App\Domain\Geo\ValueObject\Language\LanguageName;
use App\Domain\Geo\ValueObject\Language\LanguageUuid;

class Language
{
    private LanguageUuid $uuid;

    private LanguageName $name;

    private LanguageIsoCode $isoCode;

    /**
     * @param LanguageUuid $uuid
     * @param LanguageName $name
     * @param LanguageIsoCode $isoCode
     */
    public function __construct(LanguageUuid $uuid, LanguageName $name, LanguageIsoCode $isoCode)
    {
        $this->uuid    = $uuid;
        $this->name    = $name;
        $this->isoCode = $isoCode;
    }
}