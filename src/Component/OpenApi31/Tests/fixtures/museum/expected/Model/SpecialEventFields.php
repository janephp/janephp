<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class SpecialEventFields implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
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
        return ['name' => 'name', 'location' => 'location', 'eventDescription' => 'eventDescription', 'dates' => 'dates', 'price' => 'price'];
    }
}