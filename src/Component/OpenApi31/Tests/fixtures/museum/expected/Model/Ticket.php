<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class Ticket implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Unique identifier for museum ticket. Generated when purchased.
     *
     * @var string
     */
    public string $ticketId;
    /**
     * @var \DateTime
     */
    public \DateTime $ticketDate;
    /**
     * Type of ticket being purchased. Use `general` for regular museum entry and `event` for tickets to special events.
     *
     * @var string
     */
    public string $ticketType;
    /**
     * Identifier for a special event.
     *
     * @var string
     */
    public string $eventId;
    public function definedProperties(): array
    {
        return ['ticketId' => 'ticketId', 'ticketDate' => 'ticketDate', 'ticketType' => 'ticketType', 'eventId' => 'eventId'];
    }
}