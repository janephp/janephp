<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportCompanyIdentificationPreviousNamesItem
{
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $dateChanged;
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDateChanged() : string
    {
        return $this->dateChanged;
    }
    /**
     * 
     *
     * @param string $dateChanged
     *
     * @return self
     */
    public function setDateChanged(string $dateChanged) : self
    {
        $this->dateChanged = $dateChanged;
        return $this;
    }
}