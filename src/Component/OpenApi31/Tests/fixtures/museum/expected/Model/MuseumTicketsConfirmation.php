<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Museum\Model;

use Jane\Component\OpenApi31\Tests\Expected\Museum\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Museum\Runtime\AdditionalPropertiesInterface;
class MuseumTicketsConfirmation implements AdditionalPropertiesInterface
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
    /**
     * Confirmation message after a ticket purchase.
     *
     * @var string
     */
    public string $message;
    /**
     * Unique confirmation code used to verify ticket purchase.
     *
     * @var string
     */
    public string $confirmationCode;
    public function definedProperties(): array
    {
        return ['ticketId' => 'ticketId', 'ticketDate' => 'ticketDate', 'ticketType' => 'ticketType', 'eventId' => 'eventId', 'message' => 'message', 'confirmationCode' => 'confirmationCode'];
    }
}