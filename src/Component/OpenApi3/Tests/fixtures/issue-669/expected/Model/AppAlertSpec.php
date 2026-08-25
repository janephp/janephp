<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppAlertSpec implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var string
     */
    protected $rule = 'UNSPECIFIED_RULE';
    /**
     * Is the alert disabled?
     *
     * @var bool
     */
    protected $disabled;
    /**
     * @var string
     */
    protected $operator = 'UNSPECIFIED_OPERATOR';
    /**
     * Threshold value for alert
     *
     * @var float
     */
    protected $value;
    /**
     * @var string
     */
    protected $window = 'UNSPECIFIED_WINDOW';
    /**
     * @return string
     */
    public function getRule(): string
    {
        return $this->rule;
    }
    /**
     * @param string $rule
     *
     * @return self
     */
    public function setRule(string $rule): self
    {
        $this->initialized['rule'] = true;
        $this->rule = $rule;
        return $this;
    }
    /**
     * Is the alert disabled?
     *
     * @return bool
     */
    public function getDisabled(): bool
    {
        return $this->disabled;
    }
    /**
     * Is the alert disabled?
     *
     * @param bool $disabled
     *
     * @return self
     */
    public function setDisabled(bool $disabled): self
    {
        $this->initialized['disabled'] = true;
        $this->disabled = $disabled;
        return $this;
    }
    /**
     * @return string
     */
    public function getOperator(): string
    {
        return $this->operator;
    }
    /**
     * @param string $operator
     *
     * @return self
     */
    public function setOperator(string $operator): self
    {
        $this->initialized['operator'] = true;
        $this->operator = $operator;
        return $this;
    }
    /**
     * Threshold value for alert
     *
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }
    /**
     * Threshold value for alert
     *
     * @param float $value
     *
     * @return self
     */
    public function setValue(float $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * @return string
     */
    public function getWindow(): string
    {
        return $this->window;
    }
    /**
     * @param string $window
     *
     * @return self
     */
    public function setWindow(string $window): self
    {
        $this->initialized['window'] = true;
        $this->window = $window;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['rule' => ['rule', 'getRule', 'setRule'], 'disabled' => ['disabled', 'getDisabled', 'setDisabled'], 'operator' => ['operator', 'getOperator', 'setOperator'], 'value' => ['value', 'getValue', 'setValue'], 'window' => ['window', 'getWindow', 'setWindow']];
    }
}