<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegistered extends \ArrayObject
{
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredExactItem[]
     */
    protected $exact;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredPossibleItem[]
     */
    protected $possible;
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredExactItem[]
     */
    public function getExact() : array
    {
        return $this->exact;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredExactItem[] $exact
     *
     * @return self
     */
    public function setExact(array $exact) : self
    {
        $this->exact = $exact;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredPossibleItem[]
     */
    public function getPossible() : array
    {
        return $this->possible;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredPossibleItem[] $possible
     *
     * @return self
     */
    public function setPossible(array $possible) : self
    {
        $this->possible = $possible;
        return $this;
    }
}