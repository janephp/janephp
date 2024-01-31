<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgements extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
        $this->initialized['registered'] = true;
        $this->registered = $registered;
        return $this;
    }
}