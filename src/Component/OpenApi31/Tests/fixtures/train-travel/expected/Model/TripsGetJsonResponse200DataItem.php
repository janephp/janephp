<?php

namespace Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model;

use Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Runtime\AdditionalPropertiesInterface;
class TripsGetJsonResponse200DataItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Unique identifier for the trip
     *
     * @var string
     */
    public string $id;
    /**
     * The starting station of the trip
     *
     * @var string
     */
    public string $origin;
    /**
     * The destination station of the trip
     *
     * @var string
     */
    public string $destination;
    /**
     * The date and time when the trip departs
     *
     * @var \DateTime
     */
    public \DateTime $departureTime;
    /**
     * The date and time when the trip arrives
     *
     * @var \DateTime
     */
    public \DateTime $arrivalTime;
    /**
     * The name of the operator of the trip
     *
     * @var string
     */
    public string $operator;
    /**
     * The cost of the trip
     *
     * @var float
     */
    public float $price;
    /**
     * Indicates whether bicycles are allowed on the trip
     *
     * @var bool
     */
    public bool $bicyclesAllowed;
    /**
     * Indicates whether dogs are allowed on the trip
     *
     * @var bool
     */
    public bool $dogsAllowed;
    /**
     * @var string
     */
    public string $self;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'origin' => 'origin', 'destination' => 'destination', 'departureTime' => 'departure_time', 'arrivalTime' => 'arrival_time', 'operator' => 'operator', 'price' => 'price', 'bicyclesAllowed' => 'bicycles_allowed', 'dogsAllowed' => 'dogs_allowed', 'self' => 'self'];
    }
}