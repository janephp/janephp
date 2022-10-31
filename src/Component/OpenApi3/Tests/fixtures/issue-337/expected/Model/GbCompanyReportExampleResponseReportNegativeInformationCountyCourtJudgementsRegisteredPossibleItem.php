<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredPossibleItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var string
     */
    protected $ccjDate;
    /**
     * 
     *
     * @var string
     */
    protected $court;
    /**
     * 
     *
     * @var float
     */
    protected $ccjAmount;
    /**
     * 
     *
     * @var string
     */
    protected $caseNumber;
    /**
     * 
     *
     * @var string
     */
    protected $ccjStatus;
    /**
     * 
     *
     * @return string
     */
    public function getCcjDate() : string
    {
        return $this->ccjDate;
    }
    /**
     * 
     *
     * @param string $ccjDate
     *
     * @return self
     */
    public function setCcjDate(string $ccjDate) : self
    {
        $this->initialized['ccjDate'] = true;
        $this->ccjDate = $ccjDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCourt() : string
    {
        return $this->court;
    }
    /**
     * 
     *
     * @param string $court
     *
     * @return self
     */
    public function setCourt(string $court) : self
    {
        $this->initialized['court'] = true;
        $this->court = $court;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getCcjAmount() : float
    {
        return $this->ccjAmount;
    }
    /**
     * 
     *
     * @param float $ccjAmount
     *
     * @return self
     */
    public function setCcjAmount(float $ccjAmount) : self
    {
        $this->initialized['ccjAmount'] = true;
        $this->ccjAmount = $ccjAmount;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCaseNumber() : string
    {
        return $this->caseNumber;
    }
    /**
     * 
     *
     * @param string $caseNumber
     *
     * @return self
     */
    public function setCaseNumber(string $caseNumber) : self
    {
        $this->initialized['caseNumber'] = true;
        $this->caseNumber = $caseNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCcjStatus() : string
    {
        return $this->ccjStatus;
    }
    /**
     * 
     *
     * @param string $ccjStatus
     *
     * @return self
     */
    public function setCcjStatus(string $ccjStatus) : self
    {
        $this->initialized['ccjStatus'] = true;
        $this->ccjStatus = $ccjStatus;
        return $this;
    }
}