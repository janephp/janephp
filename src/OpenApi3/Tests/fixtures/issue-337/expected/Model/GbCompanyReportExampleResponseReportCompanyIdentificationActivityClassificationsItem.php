<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportCompanyIdentificationActivityClassificationsItem
{
    /**
     * 
     *
     * @var string
     */
    protected $classification;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportCompanyIdentificationActivityClassificationsItemActivitiesItem[]
     */
    protected $activities;
    /**
     * 
     *
     * @return string
     */
    public function getClassification() : string
    {
        return $this->classification;
    }
    /**
     * 
     *
     * @param string $classification
     *
     * @return self
     */
    public function setClassification(string $classification) : self
    {
        $this->classification = $classification;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportCompanyIdentificationActivityClassificationsItemActivitiesItem[]
     */
    public function getActivities() : array
    {
        return $this->activities;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportCompanyIdentificationActivityClassificationsItemActivitiesItem[] $activities
     *
     * @return self
     */
    public function setActivities(array $activities) : self
    {
        $this->activities = $activities;
        return $this;
    }
}