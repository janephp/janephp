<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportAdditionalInformationCreditLimitHistoryItemCompanyValue
{
    /**
     * 
     *
     * @var string
     */
    protected $currency;
    /**
     * 
     *
     * @var float
     */
    protected $value;
    /**
     * 
     *
     * @return string
     */
    public function getCurrency() : string
    {
        return $this->currency;
    }
    /**
     * 
     *
     * @param string $currency
     *
     * @return self
     */
    public function setCurrency(string $currency) : self
    {
        $this->currency = $currency;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getValue() : float
    {
        return $this->value;
    }
    /**
     * 
     *
     * @param float $value
     *
     * @return self
     */
    public function setValue(float $value) : self
    {
        $this->value = $value;
        return $this;
    }
}