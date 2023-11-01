<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportGroupStructure extends \ArrayObject
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
     * @var GbCompanyReportExampleResponseReportGroupStructureSubsidiaryCompaniesItem[]
     */
    protected $subsidiaryCompanies;
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportGroupStructureSubsidiaryCompaniesItem[]
     */
    public function getSubsidiaryCompanies() : array
    {
        return $this->subsidiaryCompanies;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportGroupStructureSubsidiaryCompaniesItem[] $subsidiaryCompanies
     *
     * @return self
     */
    public function setSubsidiaryCompanies(array $subsidiaryCompanies) : self
    {
        $this->initialized['subsidiaryCompanies'] = true;
        $this->subsidiaryCompanies = $subsidiaryCompanies;
        return $this;
    }
}