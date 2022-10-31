<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportDirectors extends \ArrayObject
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
        $this->initialized['currentDirectors'] = true;
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
        $this->initialized['previousDirectors'] = true;
        $this->previousDirectors = $previousDirectors;
        return $this;
    }
}