<?php

namespace CreditSafe\API\Model;

class MonitoringPortfoliosPortfolioIdEventRulesCountryCodePutBodyItem extends \ArrayObject
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
     * 
     *
     * @var string
     */
    protected $ruleCode;
    /**
     * 
     *
     * @var string
     */
    protected $isActive;
    /**
     * 
     *
     * @var string
     */
    protected $param0;
    /**
     * 
     *
     * @var string
     */
    protected $param1;
    /**
     * 
     *
     * @var string
     */
    protected $param2;
    /**
     * 
     *
     * @return string
     */
    public function getRuleCode() : string
    {
        return $this->ruleCode;
    }
    /**
     * 
     *
     * @param string $ruleCode
     *
     * @return self
     */
    public function setRuleCode(string $ruleCode) : self
    {
        $this->initialized['ruleCode'] = true;
        $this->ruleCode = $ruleCode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getIsActive() : string
    {
        return $this->isActive;
    }
    /**
     * 
     *
     * @param string $isActive
     *
     * @return self
     */
    public function setIsActive(string $isActive) : self
    {
        $this->initialized['isActive'] = true;
        $this->isActive = $isActive;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getParam0() : string
    {
        return $this->param0;
    }
    /**
     * 
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
     * 
     *
     * @return string
     */
    public function getParam1() : string
    {
        return $this->param1;
    }
    /**
     * 
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
    /**
     * 
     *
     * @return string
     */
    public function getParam2() : string
    {
        return $this->param2;
    }
    /**
     * 
     *
     * @param string $param2
     *
     * @return self
     */
    public function setParam2(string $param2) : self
    {
        $this->initialized['param2'] = true;
        $this->param2 = $param2;
        return $this;
    }
}