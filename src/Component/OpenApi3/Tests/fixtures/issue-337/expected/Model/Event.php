<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class Event implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The unique identifier for the event.
     *
     * @var float
     */
    public float $eventId;
    /**
     * The Safe Number (Creditsafe's identifier on all Companies owned in the Creditsafe Universe) of the company that triggered the event.
     *
     * @var float
     */
    public float $companyId;
    /**
     * The portfolio Id of the portfolio that contains the company that you requested event information for.
     *
     * @var float
     */
    public float $portfolioId;
    /**
     * A short description of the company event.
     *
     * @var string
     */
    public string $ruleName;
    /**
     * The local event code for the event.
     *
     * @var string
     */
    public string $localEventCode;
    /**
     * The global event code that has been mapped to the local event.
     *
     * @var string
     */
    public string $globalEventCode;
    /**
     * Some events contain an `oldValue` and `newValue` (e.g. a change in Credit Limit).
     *
     * @var string
     */
    public string $newValue;
    /**
     * Some events contain an `oldValue` and `newValue` (e.g. a change in Credit Limit).
     *
     * @var string
     */
    public string $oldValue;
    /**
     * The date that the event occured.
     *
     * @var \DateTime
     */
    public \DateTime $eventDate;
    /**
     * The date that the event was created in the Creditsafe database.
     *
     * @var \DateTime
     */
    public \DateTime $createdDate;
    public function definedProperties(): array
    {
        return ['eventId' => 'eventId', 'companyId' => 'companyId', 'portfolioId' => 'portfolioId', 'ruleName' => 'ruleName', 'localEventCode' => 'localEventCode', 'globalEventCode' => 'globalEventCode', 'newValue' => 'newValue', 'oldValue' => 'oldValue', 'eventDate' => 'eventDate', 'createdDate' => 'createdDate'];
    }
}