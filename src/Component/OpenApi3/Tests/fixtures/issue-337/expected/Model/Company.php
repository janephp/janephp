<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class Company implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The connectId of the company that triggered the `notificationEvent`. A connectId is the primary Company identifier that is used to uniquely identify all companies across Creditsafe's Universe and Partner Network.
     *
     * @var string
     */
    public string $id;
    /**
     * The Safe Number (Creditsafe's identifier on all Companies owned in the Creditsafe Universe) of the company that triggered the `notificationEvent`.
     *
     * @var string
     */
    public string $safeNumber;
    /**
     * The name of the company that triggered the `notificationEvent`.
     *
     * @var string
     */
    public string $name;
    /**
     * ISO/Alpha 2 format country code of the company that triggered the `notificationEvent`.
     *
     * @var string
     */
    public string $countryCode;
    /**
     * The portfolio Id of the portfolio that contains the company that triggered the `notificationEvent`.
     *
     * @var float
     */
    public float $portfolioId;
    /**
     * The name of the portfolio that contains the company that triggered the `notificationEvent`.
     *
     * @var string
     */
    public string $portfolioName;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'safeNumber' => 'safeNumber', 'name' => 'name', 'countryCode' => 'countryCode', 'portfolioId' => 'portfolioId', 'portfolioName' => 'portfolioName'];
    }
}