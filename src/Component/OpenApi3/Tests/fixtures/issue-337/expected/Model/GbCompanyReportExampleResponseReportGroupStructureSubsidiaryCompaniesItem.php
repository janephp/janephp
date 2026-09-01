<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportGroupStructureSubsidiaryCompaniesItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $country;
    /**
     * @var string
     */
    public string $id;
    /**
     * @var string
     */
    public string $safeNumber;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $type;
    /**
     * @var string
     */
    public string $status;
    /**
     * @var string
     */
    public string $registrationNumber;
    public function definedProperties(): array
    {
        return ['country' => 'country', 'id' => 'id', 'safeNumber' => 'safeNumber', 'name' => 'name', 'type' => 'type', 'status' => 'status', 'registrationNumber' => 'registrationNumber'];
    }
}