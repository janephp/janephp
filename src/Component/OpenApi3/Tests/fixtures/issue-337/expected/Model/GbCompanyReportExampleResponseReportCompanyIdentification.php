<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportCompanyIdentification implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformation
     */
    public GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformation $basicInformation;
    /**
     * @var list<GbCompanyReportExampleResponseReportCompanyIdentificationActivityClassificationsItem>
     */
    public array $activityClassifications;
    /**
     * @var list<GbCompanyReportExampleResponseReportCompanyIdentificationPreviousNamesItem>
     */
    public array $previousNames;
    public function definedProperties(): array
    {
        return ['basicInformation' => 'basicInformation', 'activityClassifications' => 'activityClassifications', 'previousNames' => 'previousNames'];
    }
}