<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportNegativeInformation
{
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
        $this->countyCourtJudgements = $countyCourtJudgements;
        return $this;
    }
}