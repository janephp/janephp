<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgements
{
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegistered
     */
    protected $registered;
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegistered
     */
    public function getRegistered() : GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegistered
    {
        return $this->registered;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegistered $registered
     *
     * @return self
     */
    public function setRegistered(GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegistered $registered) : self
    {
        $this->registered = $registered;
        return $this;
    }
}