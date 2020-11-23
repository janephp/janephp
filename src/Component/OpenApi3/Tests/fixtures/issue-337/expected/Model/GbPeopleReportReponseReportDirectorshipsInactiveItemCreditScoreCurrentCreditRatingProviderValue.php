<?php

namespace CreditSafe\API\Model;

class GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScoreCurrentCreditRatingProviderValue
{
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
        $this->value = $value;
        return $this;
    }
}