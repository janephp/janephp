<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportGroupStructure implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<GbCompanyReportExampleResponseReportGroupStructureSubsidiaryCompaniesItem>
     */
    public array $subsidiaryCompanies;
    public function definedProperties(): array
    {
        return ['subsidiaryCompanies' => 'subsidiaryCompanies'];
    }
}