<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class SpecialEvent implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Identifier for a special event.
     *
     * @var string
     */
    public string $eventId;
    /**
     * Name of the special event.
     *
     * @var string
     */
    public string $name;
    /**
     * Location where the special event is held.
     *
     * @var string
     */
    public string $location;
    /**
     * Description of the special event.
     *
     * @var string
     */
    public string $eventDescription;
    /**
     * List of planned dates for the special event.
     *
     * @var list<\DateTime>
     */
    public array $dates;
    /**
     * Price of a ticket for the special event.
     *
     * @var float
     */
    public float $price;
    public function definedProperties(): array
    {
        return ['eventId' => 'eventId', 'name' => 'name', 'location' => 'location', 'eventDescription' => 'eventDescription', 'dates' => 'dates', 'price' => 'price'];
    }
}