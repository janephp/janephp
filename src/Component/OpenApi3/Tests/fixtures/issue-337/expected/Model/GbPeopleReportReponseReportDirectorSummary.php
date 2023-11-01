<?php

namespace CreditSafe\API\Model;

class GbPeopleReportReponseReportDirectorSummary extends \ArrayObject
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
     * @var int
     */
    protected $currentAppointments;
    /**
     * 
     *
     * @var int
     */
    protected $inactiveAppointments;
    /**
     * 
     *
     * @var int
     */
    protected $previousAppointments;
    /**
     * 
     *
     * @return int
     */
    public function getCurrentAppointments() : int
    {
        return $this->currentAppointments;
    }
    /**
     * 
     *
     * @param int $currentAppointments
     *
     * @return self
     */
    public function setCurrentAppointments(int $currentAppointments) : self
    {
        $this->initialized['currentAppointments'] = true;
        $this->currentAppointments = $currentAppointments;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getInactiveAppointments() : int
    {
        return $this->inactiveAppointments;
    }
    /**
     * 
     *
     * @param int $inactiveAppointments
     *
     * @return self
     */
    public function setInactiveAppointments(int $inactiveAppointments) : self
    {
        $this->initialized['inactiveAppointments'] = true;
        $this->inactiveAppointments = $inactiveAppointments;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPreviousAppointments() : int
    {
        return $this->previousAppointments;
    }
    /**
     * 
     *
     * @param int $previousAppointments
     *
     * @return self
     */
    public function setPreviousAppointments(int $previousAppointments) : self
    {
        $this->initialized['previousAppointments'] = true;
        $this->previousAppointments = $previousAppointments;
        return $this;
    }
}