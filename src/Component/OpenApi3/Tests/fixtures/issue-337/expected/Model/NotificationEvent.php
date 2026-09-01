<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class NotificationEvent implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var Company
     */
    public Company $company;
    /**
     * The unique identifier of the event that triggered the generation of the `notificationEvent`. This identifier is consistent across all portfolios in the Global Monitoring product.
     *
     * @var float
     */
    public float $eventId;
    /**
     * The date that the event occured.
     *
     * @var \DateTime
     */
    public \DateTime $eventDate;
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
     * The unique identifier for the `notificationEvent`. This identifier is tied to a specific `eventId` and `portfolioId`.
     *
     * @var float
     */
    public float $notificationEventId;
    /**
     * The unique identifier for the `ruleCode` that triggered the generation of the `notificationEvent`.
     *
     * @var float
     */
    public float $ruleCode;
    /**
     * The name of the notification event rule that triggered the generation of the `notificationEvent`.
     *
     * @var string
     */
    public string $ruleName;
    public function definedProperties(): array
    {
        return ['company' => 'company', 'eventId' => 'eventId', 'eventDate' => 'eventDate', 'newValue' => 'newValue', 'oldValue' => 'oldValue', 'notificationEventId' => 'notificationEventId', 'ruleCode' => 'ruleCode', 'ruleName' => 'ruleName'];
    }
}