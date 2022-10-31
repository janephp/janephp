<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportCompanyIdentification extends \ArrayObject
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
        $this->initialized['basicInformation'] = true;
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
        $this->initialized['activityClassifications'] = true;
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
        $this->initialized['previousNames'] = true;
        $this->previousNames = $previousNames;
        return $this;
    }
}