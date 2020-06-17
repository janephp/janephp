<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportOtherInformation
{
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportOtherInformationAdvisorsItem[]
     */
    protected $advisors;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportOtherInformationEmployeesInformationItem[]
     */
    protected $employeesInformation;
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportOtherInformationAdvisorsItem[]
     */
    public function getAdvisors() : array
    {
        return $this->advisors;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportOtherInformationAdvisorsItem[] $advisors
     *
     * @return self
     */
    public function setAdvisors(array $advisors) : self
    {
        $this->advisors = $advisors;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportOtherInformationEmployeesInformationItem[]
     */
    public function getEmployeesInformation() : array
    {
        return $this->employeesInformation;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportOtherInformationEmployeesInformationItem[] $employeesInformation
     *
     * @return self
     */
    public function setEmployeesInformation(array $employeesInformation) : self
    {
        $this->employeesInformation = $employeesInformation;
        return $this;
    }
}