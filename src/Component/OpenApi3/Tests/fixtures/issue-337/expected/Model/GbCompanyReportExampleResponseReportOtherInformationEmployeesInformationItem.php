<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportOtherInformationEmployeesInformationItem extends \ArrayObject
{
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
        $this->numberOfEmployees = $numberOfEmployees;
        return $this;
    }
}