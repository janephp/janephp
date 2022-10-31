<?php

namespace CreditSafe\API\Model;

class GbPeopleReportReponseReport extends \ArrayObject
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
     * @var string
     */
    protected $directorId;
    /**
     * 
     *
     * @var GbPeopleReportReponseReportDirectorSummary
     */
    protected $directorSummary;
    /**
     * 
     *
     * @var GbPeopleReportReponseReportDirectorDetails
     */
    protected $directorDetails;
    /**
     * 
     *
     * @var GbPeopleReportReponseReportOtherAddressesItem[]
     */
    protected $otherAddresses;
    /**
     * 
     *
     * @var GbPeopleReportReponseReportDirectorships
     */
    protected $directorships;
    /**
     * 
     *
     * @return string
     */
    public function getDirectorId() : string
    {
        return $this->directorId;
    }
    /**
     * 
     *
     * @param string $directorId
     *
     * @return self
     */
    public function setDirectorId(string $directorId) : self
    {
        $this->initialized['directorId'] = true;
        $this->directorId = $directorId;
        return $this;
    }
    /**
     * 
     *
     * @return GbPeopleReportReponseReportDirectorSummary
     */
    public function getDirectorSummary() : GbPeopleReportReponseReportDirectorSummary
    {
        return $this->directorSummary;
    }
    /**
     * 
     *
     * @param GbPeopleReportReponseReportDirectorSummary $directorSummary
     *
     * @return self
     */
    public function setDirectorSummary(GbPeopleReportReponseReportDirectorSummary $directorSummary) : self
    {
        $this->initialized['directorSummary'] = true;
        $this->directorSummary = $directorSummary;
        return $this;
    }
    /**
     * 
     *
     * @return GbPeopleReportReponseReportDirectorDetails
     */
    public function getDirectorDetails() : GbPeopleReportReponseReportDirectorDetails
    {
        return $this->directorDetails;
    }
    /**
     * 
     *
     * @param GbPeopleReportReponseReportDirectorDetails $directorDetails
     *
     * @return self
     */
    public function setDirectorDetails(GbPeopleReportReponseReportDirectorDetails $directorDetails) : self
    {
        $this->initialized['directorDetails'] = true;
        $this->directorDetails = $directorDetails;
        return $this;
    }
    /**
     * 
     *
     * @return GbPeopleReportReponseReportOtherAddressesItem[]
     */
    public function getOtherAddresses() : array
    {
        return $this->otherAddresses;
    }
    /**
     * 
     *
     * @param GbPeopleReportReponseReportOtherAddressesItem[] $otherAddresses
     *
     * @return self
     */
    public function setOtherAddresses(array $otherAddresses) : self
    {
        $this->initialized['otherAddresses'] = true;
        $this->otherAddresses = $otherAddresses;
        return $this;
    }
    /**
     * 
     *
     * @return GbPeopleReportReponseReportDirectorships
     */
    public function getDirectorships() : GbPeopleReportReponseReportDirectorships
    {
        return $this->directorships;
    }
    /**
     * 
     *
     * @param GbPeopleReportReponseReportDirectorships $directorships
     *
     * @return self
     */
    public function setDirectorships(GbPeopleReportReponseReportDirectorships $directorships) : self
    {
        $this->initialized['directorships'] = true;
        $this->directorships = $directorships;
        return $this;
    }
}