<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class MonitoringPortfoliosPortfolioIdSyncPostBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $importCsv;
    /**
     * @var string
     */
    public string $email;
    public function definedProperties(): array
    {
        return ['importCsv' => 'importCsv', 'email' => 'email'];
    }
}