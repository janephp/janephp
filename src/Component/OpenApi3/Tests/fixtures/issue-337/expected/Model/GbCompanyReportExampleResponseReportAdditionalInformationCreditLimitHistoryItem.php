<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportAdditionalInformationCreditLimitHistoryItem extends \ArrayObject
{
    /**
     * 
     *
     * @var string
     */
    protected $date;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportAdditionalInformationCreditLimitHistoryItemCompanyValue
     */
    protected $companyValue;
    /**
     * 
     *
     * @return string
     */
    public function getDate() : string
    {
        return $this->date;
    }
    /**
     * 
     *
     * @param string $date
     *
     * @return self
     */
    public function setDate(string $date) : self
    {
        $this->date = $date;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportAdditionalInformationCreditLimitHistoryItemCompanyValue
     */
    public function getCompanyValue() : GbCompanyReportExampleResponseReportAdditionalInformationCreditLimitHistoryItemCompanyValue
    {
        return $this->companyValue;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportAdditionalInformationCreditLimitHistoryItemCompanyValue $companyValue
     *
     * @return self
     */
    public function setCompanyValue(GbCompanyReportExampleResponseReportAdditionalInformationCreditLimitHistoryItemCompanyValue $companyValue) : self
    {
        $this->companyValue = $companyValue;
        return $this;
    }
}