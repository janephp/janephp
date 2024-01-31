<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportCompanyIdentificationPreviousNamesItem extends \ArrayObject
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
        $this->initialized['name'] = true;
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
        $this->initialized['dateChanged'] = true;
        $this->dateChanged = $dateChanged;
        return $this;
    }
}