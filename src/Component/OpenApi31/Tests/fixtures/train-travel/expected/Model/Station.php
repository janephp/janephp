<?php

namespace Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model;

use Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Runtime\AdditionalPropertiesInterface;
class Station implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Unique identifier for the station.
     *
     * @var string
     */
    public string $id;
    /**
     * The name of the station
     *
     * @var string
     */
    public string $name;
    /**
     * The address of the station.
     *
     * @var string
     */
    public string $address;
    /**
     * The country code of the station.
     *
     * @var string
     */
    public string $countryCode;
    /**
     * The timezone of the station in the [IANA Time Zone Database format](https://www.iana.org/time-zones).
     *
     * @var string
     */
    public string $timezone;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'name' => 'name', 'address' => 'address', 'countryCode' => 'country_code', 'timezone' => 'timezone'];
    }
}