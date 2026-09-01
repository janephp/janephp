<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class MonitoringPortfoliosPortfolioIdCompaniesPostBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The company Safe Number or Connect ID
     *
     * @var string
     */
    public string $id;
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
        return ['id' => 'id', 'personalReference' => 'personalReference', 'freeText' => 'freeText', 'personalLimit' => 'personalLimit'];
    }
}