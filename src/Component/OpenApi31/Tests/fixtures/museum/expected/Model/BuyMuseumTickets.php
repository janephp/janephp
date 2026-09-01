<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Museum\Model;

use Jane\Component\OpenApi31\Tests\Expected\Museum\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Museum\Runtime\AdditionalPropertiesInterface;
class BuyMuseumTickets implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Email address for ticket purchaser.
     *
     * @var string
     */
    public string $email;
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
        return ['email' => 'email', 'ticketId' => 'ticketId', 'ticketDate' => 'ticketDate', 'ticketType' => 'ticketType', 'eventId' => 'eventId'];
    }
}