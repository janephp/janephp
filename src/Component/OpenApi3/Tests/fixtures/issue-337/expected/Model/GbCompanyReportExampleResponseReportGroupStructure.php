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
     * @var list<GbCompanyReportExampleResponseReportGroupStructureSubsidiaryCompaniesItem>
     */
    protected $subsidiaryCompanies;
    /**
     * 
     *
     * @return list<GbCompanyReportExampleResponseReportGroupStructureSubsidiaryCompaniesItem>
     */
    public function getSubsidiaryCompanies() : array
    {
        return $this->subsidiaryCompanies;
    }
    /**
     * 
     *
     * @param list<GbCompanyReportExampleResponseReportGroupStructureSubsidiaryCompaniesItem> $subsidiaryCompanies
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