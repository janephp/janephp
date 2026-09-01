<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppAlertSpec implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $rule = 'UNSPECIFIED_RULE';
    /**
     * Is the alert disabled?
     *
     * @var bool
     */
    public bool $disabled;
    /**
     * @var string
     */
    public string $operator = 'UNSPECIFIED_OPERATOR';
    /**
     * Threshold value for alert
     *
     * @var float
     */
    public float $value;
    /**
     * @var string
     */
    public string $window = 'UNSPECIFIED_WINDOW';
    public function definedProperties(): array
    {
        return ['rule' => 'rule', 'disabled' => 'disabled', 'operator' => 'operator', 'value' => 'value', 'window' => 'window'];
    }
}