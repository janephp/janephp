<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportShareCapitalStructure extends \ArrayObject
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
     * @var GbCompanyReportExampleResponseReportShareCapitalStructureIssuedShareCapital
     */
    protected $issuedShareCapital;
    /**
     * 
     *
     * @var float
     */
    protected $numberOfSharesIssued;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportShareCapitalStructureShareHoldersItem[]
     */
    protected $shareHolders;
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportShareCapitalStructureIssuedShareCapital
     */
    public function getIssuedShareCapital() : GbCompanyReportExampleResponseReportShareCapitalStructureIssuedShareCapital
    {
        return $this->issuedShareCapital;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportShareCapitalStructureIssuedShareCapital $issuedShareCapital
     *
     * @return self
     */
    public function setIssuedShareCapital(GbCompanyReportExampleResponseReportShareCapitalStructureIssuedShareCapital $issuedShareCapital) : self
    {
        $this->initialized['issuedShareCapital'] = true;
        $this->issuedShareCapital = $issuedShareCapital;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getNumberOfSharesIssued() : float
    {
        return $this->numberOfSharesIssued;
    }
    /**
     * 
     *
     * @param float $numberOfSharesIssued
     *
     * @return self
     */
    public function setNumberOfSharesIssued(float $numberOfSharesIssued) : self
    {
        $this->initialized['numberOfSharesIssued'] = true;
        $this->numberOfSharesIssued = $numberOfSharesIssued;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportShareCapitalStructureShareHoldersItem[]
     */
    public function getShareHolders() : array
    {
        return $this->shareHolders;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportShareCapitalStructureShareHoldersItem[] $shareHolders
     *
     * @return self
     */
    public function setShareHolders(array $shareHolders) : self
    {
        $this->initialized['shareHolders'] = true;
        $this->shareHolders = $shareHolders;
        return $this;
    }
}