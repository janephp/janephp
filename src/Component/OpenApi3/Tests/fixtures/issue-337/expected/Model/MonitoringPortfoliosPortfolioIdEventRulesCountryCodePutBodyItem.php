<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class MonitoringPortfoliosPortfolioIdEventRulesCountryCodePutBodyItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $ruleCode;
    /**
     * @var string
     */
    public string $isActive;
    /**
     * @var string
     */
    public string $param0;
    /**
     * @var string
     */
    public string $param1;
    /**
     * @var string
     */
    public string $param2;
    public function definedProperties(): array
    {
        return ['ruleCode' => 'ruleCode', 'isActive' => 'isActive', 'param0' => 'param0', 'param1' => 'param1', 'param2' => 'param2...'];
    }
}