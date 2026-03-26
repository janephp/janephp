<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

class MuseumTicketsConfirmation
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
     * Unique identifier for museum ticket. Generated when purchased.
     *
     * @var string
     */
    protected $ticketId;
    /**
     * @var \DateTime
     */
    protected $ticketDate;
    /**
     * Type of ticket being purchased. Use `general` for regular museum entry and `event` for tickets to special events.
     *
     * @var string
     */
    protected $ticketType;
    /**
     * Identifier for a special event.
     *
     * @var string
     */
    protected $eventId;
    /**
     * Confirmation message after a ticket purchase.
     *
     * @var string
     */
    protected $message;
    /**
     * Unique confirmation code used to verify ticket purchase.
     *
     * @var string
     */
    protected $confirmationCode;
    /**
     * Unique identifier for museum ticket. Generated when purchased.
     *
     * @return string
     */
    public function getTicketId(): string
    {
        return $this->ticketId;
    }
    /**
     * Unique identifier for museum ticket. Generated when purchased.
     *
     * @param string $ticketId
     *
     * @return self
     */
    public function setTicketId(string $ticketId): self
    {
        $this->initialized['ticketId'] = true;
        $this->ticketId = $ticketId;
        return $this;
    }
    /**
     * @return \DateTime
     */
    public function getTicketDate(): \DateTime
    {
        return $this->ticketDate;
    }
    /**
     * @param \DateTime $ticketDate
     *
     * @return self
     */
    public function setTicketDate(\DateTime $ticketDate): self
    {
        $this->initialized['ticketDate'] = true;
        $this->ticketDate = $ticketDate;
        return $this;
    }
    /**
     * Type of ticket being purchased. Use `general` for regular museum entry and `event` for tickets to special events.
     *
     * @return string
     */
    public function getTicketType(): string
    {
        return $this->ticketType;
    }
    /**
     * Type of ticket being purchased. Use `general` for regular museum entry and `event` for tickets to special events.
     *
     * @param string $ticketType
     *
     * @return self
     */
    public function setTicketType(string $ticketType): self
    {
        $this->initialized['ticketType'] = true;
        $this->ticketType = $ticketType;
        return $this;
    }
    /**
     * Identifier for a special event.
     *
     * @return string
     */
    public function getEventId(): string
    {
        return $this->eventId;
    }
    /**
     * Identifier for a special event.
     *
     * @param string $eventId
     *
     * @return self
     */
    public function setEventId(string $eventId): self
    {
        $this->initialized['eventId'] = true;
        $this->eventId = $eventId;
        return $this;
    }
    /**
     * Confirmation message after a ticket purchase.
     *
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    /**
     * Confirmation message after a ticket purchase.
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    /**
     * Unique confirmation code used to verify ticket purchase.
     *
     * @return string
     */
    public function getConfirmationCode(): string
    {
        return $this->confirmationCode;
    }
    /**
     * Unique confirmation code used to verify ticket purchase.
     *
     * @param string $confirmationCode
     *
     * @return self
     */
    public function setConfirmationCode(string $confirmationCode): self
    {
        $this->initialized['confirmationCode'] = true;
        $this->confirmationCode = $confirmationCode;
        return $this;
    }
}