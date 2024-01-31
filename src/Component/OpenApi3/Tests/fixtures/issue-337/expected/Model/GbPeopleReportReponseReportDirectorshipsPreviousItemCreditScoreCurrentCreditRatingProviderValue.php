<?php

namespace CreditSafe\API\Model;

class GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScoreCurrentCreditRatingProviderValue extends \ArrayObject
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
    protected $maxValue;
    /**
     * 
     *
     * @var string
     */
    protected $minValue;
    /**
     * 
     *
     * @var string
     */
    protected $value;
    /**
     * 
     *
     * @return string
     */
    public function getMaxValue() : string
    {
        return $this->maxValue;
    }
    /**
     * 
     *
     * @param string $maxValue
     *
     * @return self
     */
    public function setMaxValue(string $maxValue) : self
    {
        $this->initialized['maxValue'] = true;
        $this->maxValue = $maxValue;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMinValue() : string
    {
        return $this->minValue;
    }
    /**
     * 
     *
     * @param string $minValue
     *
     * @return self
     */
    public function setMinValue(string $minValue) : self
    {
        $this->initialized['minValue'] = true;
        $this->minValue = $minValue;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }
    /**
     * 
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value) : self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}