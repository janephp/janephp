<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportGroupStructure
{
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
        $this->subsidiaryCompanies = $subsidiaryCompanies;
        return $this;
    }
}