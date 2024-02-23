<?php

namespace CreditSafe\API\Model;

class GbPeopleReportReponseReportDirectorships extends \ArrayObject
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
     * @var list<GbPeopleReportReponseReportDirectorshipsCurrentItem>
     */
    protected $current;
    /**
     * 
     *
     * @var list<GbPeopleReportReponseReportDirectorshipsInactiveItem>
     */
    protected $inactive;
    /**
     * 
     *
     * @var list<GbPeopleReportReponseReportDirectorshipsPreviousItem>
     */
    protected $previous;
    /**
     * 
     *
     * @return list<GbPeopleReportReponseReportDirectorshipsCurrentItem>
     */
    public function getCurrent() : array
    {
        return $this->current;
    }
    /**
     * 
     *
     * @param list<GbPeopleReportReponseReportDirectorshipsCurrentItem> $current
     *
     * @return self
     */
    public function setCurrent(array $current) : self
    {
        $this->initialized['current'] = true;
        $this->current = $current;
        return $this;
    }
    /**
     * 
     *
     * @return list<GbPeopleReportReponseReportDirectorshipsInactiveItem>
     */
    public function getInactive() : array
    {
        return $this->inactive;
    }
    /**
     * 
     *
     * @param list<GbPeopleReportReponseReportDirectorshipsInactiveItem> $inactive
     *
     * @return self
     */
    public function setInactive(array $inactive) : self
    {
        $this->initialized['inactive'] = true;
        $this->inactive = $inactive;
        return $this;
    }
    /**
     * 
     *
     * @return list<GbPeopleReportReponseReportDirectorshipsPreviousItem>
     */
    public function getPrevious() : array
    {
        return $this->previous;
    }
    /**
     * 
     *
     * @param list<GbPeopleReportReponseReportDirectorshipsPreviousItem> $previous
     *
     * @return self
     */
    public function setPrevious(array $previous) : self
    {
        $this->initialized['previous'] = true;
        $this->previous = $previous;
        return $this;
    }
}