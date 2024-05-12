<?php

declare(strict_types=1);

namespace App\Domain\Geo\Model;

use App\Domain\Geo\ValueObject\City\CityCountry;
use App\Domain\Geo\ValueObject\City\CityIsCapital;
use App\Domain\Geo\ValueObject\City\CityName;
use App\Domain\Geo\ValueObject\City\CityUuid;

class City
{
    private CityUuid $uuid;

    private CityName $name;

    private CityCountry $country;

    private CityIsCapital $isCapital;

    public function __construct(CityUuid $uuid, CityName $name, CityCountry $country, CityIsCapital $isCapital)
    {
        $this->uuid      = $uuid;
        $this->name      = $name;
        $this->country   = $country;
        $this->isCapital = $isCapital;
    }

    /**
     * @return CityUuid
     */
    public function getUuid(): CityUuid
    {
        return $this->uuid;
    }

    /**
     * @return CityName
     */
    public function getName(): CityName
    {
        return $this->name;
    }
}