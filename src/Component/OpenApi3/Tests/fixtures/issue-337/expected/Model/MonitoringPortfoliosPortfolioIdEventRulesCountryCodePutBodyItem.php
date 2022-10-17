<?php

namespace CreditSafe\API\Model;

class MonitoringPortfoliosPortfolioIdEventRulesCountryCodePutBodyItem extends \ArrayObject
{
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
        $this->param2 = $param2;
        return $this;
    }
}