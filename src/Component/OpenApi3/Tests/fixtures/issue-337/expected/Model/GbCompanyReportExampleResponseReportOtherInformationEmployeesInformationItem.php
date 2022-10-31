<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportOtherInformationEmployeesInformationItem extends \ArrayObject
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
     * @var float
     */
    protected $year;
    /**
     * 
     *
     * @var string
     */
    protected $numberOfEmployees;
    /**
     * 
     *
     * @return float
     */
    public function getYear() : float
    {
        return $this->year;
    }
    /**
     * 
     *
     * @param float $year
     *
     * @return self
     */
    public function setYear(float $year) : self
    {
        $this->initialized['year'] = true;
        $this->year = $year;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNumberOfEmployees() : string
    {
        return $this->numberOfEmployees;
    }
    /**
     * 
     *
     * @param string $numberOfEmployees
     *
     * @return self
     */
    public function setNumberOfEmployees(string $numberOfEmployees) : self
    {
        $this->initialized['numberOfEmployees'] = true;
        $this->numberOfEmployees = $numberOfEmployees;
        return $this;
    }
}