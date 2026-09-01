<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportAdditionalInformationMortgageDetailsItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $mortgageType;
    /**
     * @var string
     */
    public string $dateChargeCreated;
    /**
     * @var string
     */
    public string $dateChargeRegistered;
    /**
     * @var string
     */
    public string $status;
    /**
     * @var string
     */
    public string $personsEntitled;
    /**
     * @var string
     */
    public string $amountSecured;
    /**
     * @var string
     */
    public string $details;
    public function definedProperties(): array
    {
        return ['mortgageType' => 'mortgageType', 'dateChargeCreated' => 'dateChargeCreated', 'dateChargeRegistered' => 'dateChargeRegistered', 'status' => 'status', 'personsEntitled' => 'personsEntitled', 'amountSecured' => 'amountSecured', 'details' => 'details'];
    }
}