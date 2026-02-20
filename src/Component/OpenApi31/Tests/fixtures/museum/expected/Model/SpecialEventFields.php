<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

class SpecialEventFields
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
     * Name of the special event.
     *
     * @var string
     */
    protected $name;
    /**
     * Location where the special event is held.
     *
     * @var string
     */
    protected $location;
    /**
     * Description of the special event.
     *
     * @var string
     */
    protected $eventDescription;
    /**
     * List of planned dates for the special event.
     *
     * @var list<\DateTime>
     */
    protected $dates;
    /**
     * Price of a ticket for the special event.
     *
     * @var float
     */
    protected $price;
    /**
     * Name of the special event.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of the special event.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Location where the special event is held.
     *
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }
    /**
     * Location where the special event is held.
     *
     * @param string $location
     *
     * @return self
     */
    public function setLocation(string $location): self
    {
        $this->initialized['location'] = true;
        $this->location = $location;
        return $this;
    }
    /**
     * Description of the special event.
     *
     * @return string
     */
    public function getEventDescription(): string
    {
        return $this->eventDescription;
    }
    /**
     * Description of the special event.
     *
     * @param string $eventDescription
     *
     * @return self
     */
    public function setEventDescription(string $eventDescription): self
    {
        $this->initialized['eventDescription'] = true;
        $this->eventDescription = $eventDescription;
        return $this;
    }
    /**
     * List of planned dates for the special event.
     *
     * @return list<\DateTime>
     */
    public function getDates(): array
    {
        return $this->dates;
    }
    /**
     * List of planned dates for the special event.
     *
     * @param list<\DateTime> $dates
     *
     * @return self
     */
    public function setDates(array $dates): self
    {
        $this->initialized['dates'] = true;
        $this->dates = $dates;
        return $this;
    }
    /**
     * Price of a ticket for the special event.
     *
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }
    /**
     * Price of a ticket for the special event.
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
}