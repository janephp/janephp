<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportShareCapitalStructure implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var GbCompanyReportExampleResponseReportShareCapitalStructureIssuedShareCapital
     */
    public GbCompanyReportExampleResponseReportShareCapitalStructureIssuedShareCapital $issuedShareCapital;
    /**
     * @var float
     */
    public float $numberOfSharesIssued;
    /**
     * @var list<GbCompanyReportExampleResponseReportShareCapitalStructureShareHoldersItem>
     */
    public array $shareHolders;
    public function definedProperties(): array
    {
        return ['issuedShareCapital' => 'issuedShareCapital', 'numberOfSharesIssued' => 'numberOfSharesIssued', 'shareHolders' => 'shareHolders'];
    }
}