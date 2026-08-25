<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportOtherInformation implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var list<GbCompanyReportExampleResponseReportOtherInformationAdvisorsItem>
     */
    protected $advisors;
    /**
     * @var list<GbCompanyReportExampleResponseReportOtherInformationEmployeesInformationItem>
     */
    protected $employeesInformation;
    /**
     * @return list<GbCompanyReportExampleResponseReportOtherInformationAdvisorsItem>
     */
    public function getAdvisors(): array
    {
        return $this->advisors;
    }
    /**
     * @param list<GbCompanyReportExampleResponseReportOtherInformationAdvisorsItem> $advisors
     *
     * @return self
     */
    public function setAdvisors(array $advisors): self
    {
        $this->initialized['advisors'] = true;
        $this->advisors = $advisors;
        return $this;
    }
    /**
     * @return list<GbCompanyReportExampleResponseReportOtherInformationEmployeesInformationItem>
     */
    public function getEmployeesInformation(): array
    {
        return $this->employeesInformation;
    }
    /**
     * @param list<GbCompanyReportExampleResponseReportOtherInformationEmployeesInformationItem> $employeesInformation
     *
     * @return self
     */
    public function setEmployeesInformation(array $employeesInformation): self
    {
        $this->initialized['employeesInformation'] = true;
        $this->employeesInformation = $employeesInformation;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['advisors' => ['advisors', 'getAdvisors', 'setAdvisors'], 'employeesInformation' => ['employeesInformation', 'getEmployeesInformation', 'setEmployeesInformation']];
    }
}