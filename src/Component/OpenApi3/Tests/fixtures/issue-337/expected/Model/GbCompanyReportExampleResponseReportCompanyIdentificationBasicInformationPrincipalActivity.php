<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationPrincipalActivity implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $description;
    /**
     * @var string
     */
    public string $classification;
    public function definedProperties(): array
    {
        return ['description' => 'description', 'classification' => 'classification'];
    }
}