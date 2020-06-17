<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportDirectors
{
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItem[]
     */
    protected $currentDirectors;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportDirectorsPreviousDirectorsItem[]
     */
    protected $previousDirectors;
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItem[]
     */
    public function getCurrentDirectors() : array
    {
        return $this->currentDirectors;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItem[] $currentDirectors
     *
     * @return self
     */
    public function setCurrentDirectors(array $currentDirectors) : self
    {
        $this->currentDirectors = $currentDirectors;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportDirectorsPreviousDirectorsItem[]
     */
    public function getPreviousDirectors() : array
    {
        return $this->previousDirectors;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportDirectorsPreviousDirectorsItem[] $previousDirectors
     *
     * @return self
     */
    public function setPreviousDirectors(array $previousDirectors) : self
    {
        $this->previousDirectors = $previousDirectors;
        return $this;
    }
}