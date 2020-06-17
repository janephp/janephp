<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportCompanyIdentification
{
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformation
     */
    protected $basicInformation;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportCompanyIdentificationActivityClassificationsItem[]
     */
    protected $activityClassifications;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportCompanyIdentificationPreviousNamesItem[]
     */
    protected $previousNames;
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformation
     */
    public function getBasicInformation() : GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformation
    {
        return $this->basicInformation;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformation $basicInformation
     *
     * @return self
     */
    public function setBasicInformation(GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformation $basicInformation) : self
    {
        $this->basicInformation = $basicInformation;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportCompanyIdentificationActivityClassificationsItem[]
     */
    public function getActivityClassifications() : array
    {
        return $this->activityClassifications;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportCompanyIdentificationActivityClassificationsItem[] $activityClassifications
     *
     * @return self
     */
    public function setActivityClassifications(array $activityClassifications) : self
    {
        $this->activityClassifications = $activityClassifications;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportCompanyIdentificationPreviousNamesItem[]
     */
    public function getPreviousNames() : array
    {
        return $this->previousNames;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportCompanyIdentificationPreviousNamesItem[] $previousNames
     *
     * @return self
     */
    public function setPreviousNames(array $previousNames) : self
    {
        $this->previousNames = $previousNames;
        return $this;
    }
}