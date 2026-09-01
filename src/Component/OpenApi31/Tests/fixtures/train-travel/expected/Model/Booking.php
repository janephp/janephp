<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class Booking implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Unique identifier for the booking
     *
     * @var string
     */
    public string $id;
    /**
     * Identifier of the booked trip
     *
     * @var string
     */
    public string $tripId;
    /**
     * Name of the passenger
     *
     * @var string
     */
    public string $passengerName;
    /**
     * Indicates whether the passenger has a bicycle.
     *
     * @var bool
     */
    public bool $hasBicycle;
    /**
     * Indicates whether the passenger has a dog.
     *
     * @var bool
     */
    public bool $hasDog;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'tripId' => 'trip_id', 'passengerName' => 'passenger_name', 'hasBicycle' => 'has_bicycle', 'hasDog' => 'has_dog'];
    }
}