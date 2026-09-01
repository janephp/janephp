<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportExtendedGroupStructureItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $id;
    /**
     * @var string
     */
    public string $country;
    /**
     * @var string
     */
    public string $safeNumber;
    /**
     * @var string
     */
    public string $companyName;
    /**
     * @var string
     */
    public string $registeredNumber;
    /**
     * @var string
     */
    public string $latestAnnualAccounts;
    /**
     * @var float
     */
    public float $level;
    /**
     * @var string
     */
    public string $status;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'country' => 'country', 'safeNumber' => 'safeNumber', 'companyName' => 'companyName', 'registeredNumber' => 'registeredNumber', 'latestAnnualAccounts' => 'latestAnnualAccounts', 'level' => 'level', 'status' => 'status'];
    }
}