<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportDirectors extends \ArrayObject
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
     * @var list<GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItem>
     */
    protected $currentDirectors;
    /**
     * 
     *
     * @var list<GbCompanyReportExampleResponseReportDirectorsPreviousDirectorsItem>
     */
    protected $previousDirectors;
    /**
     * 
     *
     * @return list<GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItem>
     */
    public function getCurrentDirectors() : array
    {
        return $this->currentDirectors;
    }
    /**
     * 
     *
     * @param list<GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItem> $currentDirectors
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
     * @return list<GbCompanyReportExampleResponseReportDirectorsPreviousDirectorsItem>
     */
    public function getPreviousDirectors() : array
    {
        return $this->previousDirectors;
    }
    /**
     * 
     *
     * @param list<GbCompanyReportExampleResponseReportDirectorsPreviousDirectorsItem> $previousDirectors
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