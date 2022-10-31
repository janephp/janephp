<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportNegativeInformation extends \ArrayObject
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
     * @var GbCompanyReportExampleResponseReportNegativeInformationCcjSummary
     */
    protected $ccjSummary;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgements
     */
    protected $countyCourtJudgements;
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportNegativeInformationCcjSummary
     */
    public function getCcjSummary() : GbCompanyReportExampleResponseReportNegativeInformationCcjSummary
    {
        return $this->ccjSummary;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportNegativeInformationCcjSummary $ccjSummary
     *
     * @return self
     */
    public function setCcjSummary(GbCompanyReportExampleResponseReportNegativeInformationCcjSummary $ccjSummary) : self
    {
        $this->initialized['ccjSummary'] = true;
        $this->ccjSummary = $ccjSummary;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgements
     */
    public function getCountyCourtJudgements() : GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgements
    {
        return $this->countyCourtJudgements;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgements $countyCourtJudgements
     *
     * @return self
     */
    public function setCountyCourtJudgements(GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgements $countyCourtJudgements) : self
    {
        $this->initialized['countyCourtJudgements'] = true;
        $this->countyCourtJudgements = $countyCourtJudgements;
        return $this;
    }
}