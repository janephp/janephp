<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class UserDetails implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The ISO/Alpha 2 format country code for the user's country.
     *
     * @var string
     */
    public string $countryCode;
    /**
     * The date that the Global Monitoring user account was created.
     *
     * @var \DateTime
     */
    public \DateTime $createdDate;
    /**
     * The unique identifier for the user's customer account, used across the Creditsafe product suite.
     *
     * @var float
     */
    public float $csCustomerId;
    /**
     * The unique identifier for the user's account, used across the Creditsafe product suite.
     *
     * @var float
     */
    public float $csUserId;
    /**
     * If auto-tracker is enabled, any companies that you pull a credit report for are automatically added to the portfolio that you have selected as default.
     *
     * @var bool
     */
    public bool $isAutoTracker;
    /**
     * The language code for the user's preferred language.
     *
     * @var string
     */
    public string $languageCode;
    /**
     * The date the the user last accessed the Global Monitoring product.
     *
     * @var \DateTime
     */
    public \DateTime $lastAccessDate;
    /**
     * The date that the user's details were last modified.
     *
     * @var \DateTime
     */
    public \DateTime $modifiedDate;
    /**
     * The date that the user's contract is currently set to expire. From this date onward, the user will be unable to access to Global Monitoring product.
     *
     * @var \DateTime
     */
    public \DateTime $contractEndDate;
    /**
     * The internal identifier used to reference the user's account through the Global Monitoring product.
     *
     * @var float
     */
    public float $userId;
    public function definedProperties(): array
    {
        return ['countryCode' => 'countryCode', 'createdDate' => 'createdDate', 'csCustomerId' => 'csCustomerId', 'csUserId' => 'csUserId', 'isAutoTracker' => 'isAutoTracker', 'languageCode' => 'languageCode', 'lastAccessDate' => 'lastAccessDate', 'modifiedDate' => 'modifiedDate', 'contractEndDate' => 'contractEndDate', 'userId' => 'userId'];
    }
}