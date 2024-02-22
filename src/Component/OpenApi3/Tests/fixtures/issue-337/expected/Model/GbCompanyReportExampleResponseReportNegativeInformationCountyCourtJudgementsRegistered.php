<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegistered extends \ArrayObject
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
     * @var list<GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredExactItem>
     */
    protected $exact;
    /**
     * 
     *
     * @var list<GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredPossibleItem>
     */
    protected $possible;
    /**
     * 
     *
     * @return list<GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredExactItem>
     */
    public function getExact() : array
    {
        return $this->exact;
    }
    /**
     * 
     *
     * @param list<GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredExactItem> $exact
     *
     * @return self
     */
    public function setExact(array $exact) : self
    {
        $this->initialized['exact'] = true;
        $this->exact = $exact;
        return $this;
    }
    /**
     * 
     *
     * @return list<GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredPossibleItem>
     */
    public function getPossible() : array
    {
        return $this->possible;
    }
    /**
     * 
     *
     * @param list<GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredPossibleItem> $possible
     *
     * @return self
     */
    public function setPossible(array $possible) : self
    {
        $this->initialized['possible'] = true;
        $this->possible = $possible;
        return $this;
    }
}