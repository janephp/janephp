<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class MonitoringPortfoliosPortfolioIdCompaniesIdPatchBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $personalReference;
    /**
     * @var string
     */
    public string $freeText;
    /**
     * @var string
     */
    public string $personalLimit;
    public function definedProperties(): array
    {
        return ['personalReference' => 'personalReference', 'freeText' => 'freeText', 'personalLimit' => 'personalLimit'];
    }
}