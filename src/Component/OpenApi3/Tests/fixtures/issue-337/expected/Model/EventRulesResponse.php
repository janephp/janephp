<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class EventRulesResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Shows whether the notification event rule has been enabled for the given portfolio.
     *
     * @var bool
     */
    public bool $isActive;
    /**
     * The unique identifier for the notification event rule.
     *
     * @var float
     */
    public float $ruleCode;
    /**
     * The ISO/Alpha 2 format country code for the notification event rule. "XX" is used for global rules that apply to companies from all countries.
     *
     * @var string
     */
    public string $ruleCountryCode;
    /**
     * The unique identifier of the `ruleType` for the notification event rule.
     *
     * @var float
     */
    public float $ruleType;
    /**
     * A short description of the `ruleType` for the notification event rule.
     *
     * @var string
     */
    public string $ruleTypeName;
    /**
     * The name for the notification event rule.
     *
     * @var string
     */
    public string $name;
    /**
     * Some notification event rules may include input parameters used to tailor the notifications generated to your preference.
     *
     * @var string
     */
    public string $param0;
    /**
     * Some notification event rules may include input parameters used to tailor the notifications generated to your preference.
     *
     * @var string
     */
    public string $param1;
    public function definedProperties(): array
    {
        return ['isActive' => 'isActive', 'ruleCode' => 'ruleCode', 'ruleCountryCode' => 'ruleCountryCode', 'ruleType' => 'ruleType', 'ruleTypeName' => 'ruleTypeName', 'name' => 'name', 'param0' => 'param0', 'param1' => 'param1'];
    }
}