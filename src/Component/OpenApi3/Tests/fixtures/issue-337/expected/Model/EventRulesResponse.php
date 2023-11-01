<?php

namespace CreditSafe\API\Model;

class EventRulesResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Shows whether the notification event rule has been enabled for the given portfolio.
     *
     * @var bool
     */
    protected $isActive;
    /**
     * The unique identifier for the notification event rule.
     *
     * @var float
     */
    protected $ruleCode;
    /**
     * The ISO/Alpha 2 format country code for the notification event rule. "XX" is used for global rules that apply to companies from all countries.
     *
     * @var string
     */
    protected $ruleCountryCode;
    /**
     * The unique identifier of the `ruleType` for the notification event rule.
     *
     * @var float
     */
    protected $ruleType;
    /**
     * A short description of the `ruleType` for the notification event rule.
     *
     * @var string
     */
    protected $ruleTypeName;
    /**
     * The name for the notification event rule.
     *
     * @var string
     */
    protected $name;
    /**
     * Some notification event rules may include input parameters used to tailor the notifications generated to your preference.
     *
     * @var string
     */
    protected $param0;
    /**
     * Some notification event rules may include input parameters used to tailor the notifications generated to your preference.
     *
     * @var string
     */
    protected $param1;
    /**
     * Shows whether the notification event rule has been enabled for the given portfolio.
     *
     * @return bool
     */
    public function getIsActive() : bool
    {
        return $this->isActive;
    }
    /**
     * Shows whether the notification event rule has been enabled for the given portfolio.
     *
     * @param bool $isActive
     *
     * @return self
     */
    public function setIsActive(bool $isActive) : self
    {
        $this->initialized['isActive'] = true;
        $this->isActive = $isActive;
        return $this;
    }
    /**
     * The unique identifier for the notification event rule.
     *
     * @return float
     */
    public function getRuleCode() : float
    {
        return $this->ruleCode;
    }
    /**
     * The unique identifier for the notification event rule.
     *
     * @param float $ruleCode
     *
     * @return self
     */
    public function setRuleCode(float $ruleCode) : self
    {
        $this->initialized['ruleCode'] = true;
        $this->ruleCode = $ruleCode;
        return $this;
    }
    /**
     * The ISO/Alpha 2 format country code for the notification event rule. "XX" is used for global rules that apply to companies from all countries.
     *
     * @return string
     */
    public function getRuleCountryCode() : string
    {
        return $this->ruleCountryCode;
    }
    /**
     * The ISO/Alpha 2 format country code for the notification event rule. "XX" is used for global rules that apply to companies from all countries.
     *
     * @param string $ruleCountryCode
     *
     * @return self
     */
    public function setRuleCountryCode(string $ruleCountryCode) : self
    {
        $this->initialized['ruleCountryCode'] = true;
        $this->ruleCountryCode = $ruleCountryCode;
        return $this;
    }
    /**
     * The unique identifier of the `ruleType` for the notification event rule.
     *
     * @return float
     */
    public function getRuleType() : float
    {
        return $this->ruleType;
    }
    /**
     * The unique identifier of the `ruleType` for the notification event rule.
     *
     * @param float $ruleType
     *
     * @return self
     */
    public function setRuleType(float $ruleType) : self
    {
        $this->initialized['ruleType'] = true;
        $this->ruleType = $ruleType;
        return $this;
    }
    /**
     * A short description of the `ruleType` for the notification event rule.
     *
     * @return string
     */
    public function getRuleTypeName() : string
    {
        return $this->ruleTypeName;
    }
    /**
     * A short description of the `ruleType` for the notification event rule.
     *
     * @param string $ruleTypeName
     *
     * @return self
     */
    public function setRuleTypeName(string $ruleTypeName) : self
    {
        $this->initialized['ruleTypeName'] = true;
        $this->ruleTypeName = $ruleTypeName;
        return $this;
    }
    /**
     * The name for the notification event rule.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name for the notification event rule.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Some notification event rules may include input parameters used to tailor the notifications generated to your preference.
     *
     * @return string
     */
    public function getParam0() : string
    {
        return $this->param0;
    }
    /**
     * Some notification event rules may include input parameters used to tailor the notifications generated to your preference.
     *
     * @param string $param0
     *
     * @return self
     */
    public function setParam0(string $param0) : self
    {
        $this->initialized['param0'] = true;
        $this->param0 = $param0;
        return $this;
    }
    /**
     * Some notification event rules may include input parameters used to tailor the notifications generated to your preference.
     *
     * @return string
     */
    public function getParam1() : string
    {
        return $this->param1;
    }
    /**
     * Some notification event rules may include input parameters used to tailor the notifications generated to your preference.
     *
     * @param string $param1
     *
     * @return self
     */
    public function setParam1(string $param1) : self
    {
        $this->initialized['param1'] = true;
        $this->param1 = $param1;
        return $this;
    }
}