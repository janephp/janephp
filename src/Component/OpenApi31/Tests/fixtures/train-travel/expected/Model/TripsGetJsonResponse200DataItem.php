<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

class TripsGetJsonResponse200DataItem
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Unique identifier for the trip
     *
     * @var string
     */
    protected $id;
    /**
     * The starting station of the trip
     *
     * @var string
     */
    protected $origin;
    /**
     * The destination station of the trip
     *
     * @var string
     */
    protected $destination;
    /**
     * The date and time when the trip departs
     *
     * @var \DateTime
     */
    protected $departureTime;
    /**
     * The date and time when the trip arrives
     *
     * @var \DateTime
     */
    protected $arrivalTime;
    /**
     * The name of the operator of the trip
     *
     * @var string
     */
    protected $operator;
    /**
     * The cost of the trip
     *
     * @var float
     */
    protected $price;
    /**
     * Indicates whether bicycles are allowed on the trip
     *
     * @var bool
     */
    protected $bicyclesAllowed;
    /**
     * Indicates whether dogs are allowed on the trip
     *
     * @var bool
     */
    protected $dogsAllowed;
    /**
     * @var string
     */
    protected $self;
    /**
     * Unique identifier for the trip
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Unique identifier for the trip
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
     * The starting station of the trip
     *
     * @return string
     */
    public function getOrigin(): string
    {
        return $this->origin;
    }
    /**
     * The starting station of the trip
     *
     * @param string $origin
     *
     * @return self
     */
    public function setOrigin(string $origin): self
    {
        $this->initialized['origin'] = true;
        $this->origin = $origin;
        return $this;
    }
    /**
     * The destination station of the trip
     *
     * @return string
     */
    public function getDestination(): string
    {
        return $this->destination;
    }
    /**
     * The destination station of the trip
     *
     * @param string $destination
     *
     * @return self
     */
    public function setDestination(string $destination): self
    {
        $this->initialized['destination'] = true;
        $this->destination = $destination;
        return $this;
    }
    /**
     * The date and time when the trip departs
     *
     * @return \DateTime
     */
    public function getDepartureTime(): \DateTime
    {
        return $this->departureTime;
    }
    /**
     * The date and time when the trip departs
     *
     * @param \DateTime $departureTime
     *
     * @return self
     */
    public function setDepartureTime(\DateTime $departureTime): self
    {
        $this->initialized['departureTime'] = true;
        $this->departureTime = $departureTime;
        return $this;
    }
    /**
     * The date and time when the trip arrives
     *
     * @return \DateTime
     */
    public function getArrivalTime(): \DateTime
    {
        return $this->arrivalTime;
    }
    /**
     * The date and time when the trip arrives
     *
     * @param \DateTime $arrivalTime
     *
     * @return self
     */
    public function setArrivalTime(\DateTime $arrivalTime): self
    {
        $this->initialized['arrivalTime'] = true;
        $this->arrivalTime = $arrivalTime;
        return $this;
    }
    /**
     * The name of the operator of the trip
     *
     * @return string
     */
    public function getOperator(): string
    {
        return $this->operator;
    }
    /**
     * The name of the operator of the trip
     *
     * @param string $operator
     *
     * @return self
     */
    public function setOperator(string $operator): self
    {
        $this->initialized['operator'] = true;
        $this->operator = $operator;
        return $this;
    }
    /**
     * The cost of the trip
     *
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }
    /**
     * The cost of the trip
     *
     * @param float $price
     *
     * @return self
     */
    public function setPrice(float $price): self
    {
        $this->initialized['price'] = true;
        $this->price = $price;
        return $this;
    }
    /**
     * Indicates whether bicycles are allowed on the trip
     *
     * @return bool
     */
    public function getBicyclesAllowed(): bool
    {
        return $this->bicyclesAllowed;
    }
    /**
     * Indicates whether bicycles are allowed on the trip
     *
     * @param bool $bicyclesAllowed
     *
     * @return self
     */
    public function setBicyclesAllowed(bool $bicyclesAllowed): self
    {
        $this->initialized['bicyclesAllowed'] = true;
        $this->bicyclesAllowed = $bicyclesAllowed;
        return $this;
    }
    /**
     * Indicates whether dogs are allowed on the trip
     *
     * @return bool
     */
    public function getDogsAllowed(): bool
    {
        return $this->dogsAllowed;
    }
    /**
     * Indicates whether dogs are allowed on the trip
     *
     * @param bool $dogsAllowed
     *
     * @return self
     */
    public function setDogsAllowed(bool $dogsAllowed): self
    {
        $this->initialized['dogsAllowed'] = true;
        $this->dogsAllowed = $dogsAllowed;
        return $this;
    }
    /**
     * @return string
     */
    public function getSelf(): string
    {
        return $this->self;
    }
    /**
     * @param string $self
     *
     * @return self
     */
    public function setSelf(string $self): self
    {
        $this->initialized['self'] = true;
        $this->self = $self;
        return $this;
    }
}