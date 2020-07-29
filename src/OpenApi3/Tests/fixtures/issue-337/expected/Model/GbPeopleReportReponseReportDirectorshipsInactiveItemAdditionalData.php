<?php

namespace CreditSafe\API\Model;

class GbPeopleReportReponseReportDirectorshipsInactiveItemAdditionalData
{
    /**
     * 
     *
     * @var string
     */
    protected $occupation;
    /**
     * 
     *
     * @var string
     */
    protected $statusDescription;
    /**
     * 
     *
     * @var float
     */
    protected $gearing;
    /**
     * 
     *
     * @return string
     */
    public function getOccupation() : string
    {
        return $this->occupation;
    }
    /**
     * 
     *
     * @param string $occupation
     *
     * @return self
     */
    public function setOccupation(string $occupation) : self
    {
        $this->occupation = $occupation;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatusDescription() : string
    {
        return $this->statusDescription;
    }
    /**
     * 
     *
     * @param string $statusDescription
     *
     * @return self
     */
    public function setStatusDescription(string $statusDescription) : self
    {
        $this->statusDescription = $statusDescription;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getGearing() : float
    {
        return $this->gearing;
    }
    /**
     * 
     *
     * @param float $gearing
     *
     * @return self
     */
    public function setGearing(float $gearing) : self
    {
        $this->gearing = $gearing;
        return $this;
    }
}