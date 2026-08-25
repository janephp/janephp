<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class Booking implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Unique identifier for the booking
     *
     * @var string
     */
    protected $id;
    /**
     * Identifier of the booked trip
     *
     * @var string
     */
    protected $tripId;
    /**
     * Name of the passenger
     *
     * @var string
     */
    protected $passengerName;
    /**
     * Indicates whether the passenger has a bicycle.
     *
     * @var bool
     */
    protected $hasBicycle;
    /**
     * Indicates whether the passenger has a dog.
     *
     * @var bool
     */
    protected $hasDog;
    /**
     * Unique identifier for the booking
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Unique identifier for the booking
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Identifier of the booked trip
     *
     * @return string
     */
    public function getTripId(): string
    {
        return $this->tripId;
    }
    /**
     * Identifier of the booked trip
     *
     * @param string $tripId
     *
     * @return self
     */
    public function setTripId(string $tripId): self
    {
        $this->initialized['tripId'] = true;
        $this->tripId = $tripId;
        return $this;
    }
    /**
     * Name of the passenger
     *
     * @return string
     */
    public function getPassengerName(): string
    {
        return $this->passengerName;
    }
    /**
     * Name of the passenger
     *
     * @param string $passengerName
     *
     * @return self
     */
    public function setPassengerName(string $passengerName): self
    {
        $this->initialized['passengerName'] = true;
        $this->passengerName = $passengerName;
        return $this;
    }
    /**
     * Indicates whether the passenger has a bicycle.
     *
     * @return bool
     */
    public function getHasBicycle(): bool
    {
        return $this->hasBicycle;
    }
    /**
     * Indicates whether the passenger has a bicycle.
     *
     * @param bool $hasBicycle
     *
     * @return self
     */
    public function setHasBicycle(bool $hasBicycle): self
    {
        $this->initialized['hasBicycle'] = true;
        $this->hasBicycle = $hasBicycle;
        return $this;
    }
    /**
     * Indicates whether the passenger has a dog.
     *
     * @return bool
     */
    public function getHasDog(): bool
    {
        return $this->hasDog;
    }
    /**
     * Indicates whether the passenger has a dog.
     *
     * @param bool $hasDog
     *
     * @return self
     */
    public function setHasDog(bool $hasDog): self
    {
        $this->initialized['hasDog'] = true;
        $this->hasDog = $hasDog;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['id' => ['id', 'getId', 'setId'], 'tripId' => ['trip_id', 'getTripId', 'setTripId'], 'passengerName' => ['passenger_name', 'getPassengerName', 'setPassengerName'], 'hasBicycle' => ['has_bicycle', 'getHasBicycle', 'setHasBicycle'], 'hasDog' => ['has_dog', 'getHasDog', 'setHasDog']];
    }
}