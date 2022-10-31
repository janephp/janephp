<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportOtherInformation extends \ArrayObject
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
        $this->initialized['advisors'] = true;
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
        $this->initialized['employeesInformation'] = true;
        $this->employeesInformation = $employeesInformation;
        return $this;
    }
}