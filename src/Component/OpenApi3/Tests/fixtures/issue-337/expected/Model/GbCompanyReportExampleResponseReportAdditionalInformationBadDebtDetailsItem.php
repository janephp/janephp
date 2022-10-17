<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItem extends \ArrayObject
{
    /**
     * 
     *
     * @var string
     */
    protected $statementDate;
    /**
     * 
     *
     * @var string
     */
    protected $registrationNumber;
    /**
     * 
     *
     * @var string
     */
    protected $companyName;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItemAmount
     */
    protected $amount;
    /**
     * 
     *
     * @return string
     */
    public function getStatementDate() : string
    {
        return $this->statementDate;
    }
    /**
     * 
     *
     * @param string $statementDate
     *
     * @return self
     */
    public function setStatementDate(string $statementDate) : self
    {
        $this->statementDate = $statementDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRegistrationNumber() : string
    {
        return $this->registrationNumber;
    }
    /**
     * 
     *
     * @param string $registrationNumber
     *
     * @return self
     */
    public function setRegistrationNumber(string $registrationNumber) : self
    {
        $this->registrationNumber = $registrationNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCompanyName() : string
    {
        return $this->companyName;
    }
    /**
     * 
     *
     * @param string $companyName
     *
     * @return self
     */
    public function setCompanyName(string $companyName) : self
    {
        $this->companyName = $companyName;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItemAmount
     */
    public function getAmount() : GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItemAmount
    {
        return $this->amount;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItemAmount $amount
     *
     * @return self
     */
    public function setAmount(GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItemAmount $amount) : self
    {
        $this->amount = $amount;
        return $this;
    }
}