<?php

namespace CreditSafe\API\Model;

class GbPeopleReportReponseReportDirectorships extends \ArrayObject
{
    /**
     * 
     *
     * @var GbPeopleReportReponseReportDirectorshipsCurrentItem[]
     */
    protected $current;
    /**
     * 
     *
     * @var GbPeopleReportReponseReportDirectorshipsInactiveItem[]
     */
    protected $inactive;
    /**
     * 
     *
     * @var GbPeopleReportReponseReportDirectorshipsPreviousItem[]
     */
    protected $previous;
    /**
     * 
     *
     * @return GbPeopleReportReponseReportDirectorshipsCurrentItem[]
     */
    public function getCurrent() : array
    {
        return $this->current;
    }
    /**
     * 
     *
     * @param GbPeopleReportReponseReportDirectorshipsCurrentItem[] $current
     *
     * @return self
     */
    public function setCurrent(array $current) : self
    {
        $this->current = $current;
        return $this;
    }
    /**
     * 
     *
     * @return GbPeopleReportReponseReportDirectorshipsInactiveItem[]
     */
    public function getInactive() : array
    {
        return $this->inactive;
    }
    /**
     * 
     *
     * @param GbPeopleReportReponseReportDirectorshipsInactiveItem[] $inactive
     *
     * @return self
     */
    public function setInactive(array $inactive) : self
    {
        $this->inactive = $inactive;
        return $this;
    }
    /**
     * 
     *
     * @return GbPeopleReportReponseReportDirectorshipsPreviousItem[]
     */
    public function getPrevious() : array
    {
        return $this->previous;
    }
    /**
     * 
     *
     * @param GbPeopleReportReponseReportDirectorshipsPreviousItem[] $previous
     *
     * @return self
     */
    public function setPrevious(array $previous) : self
    {
        $this->previous = $previous;
        return $this;
    }
}