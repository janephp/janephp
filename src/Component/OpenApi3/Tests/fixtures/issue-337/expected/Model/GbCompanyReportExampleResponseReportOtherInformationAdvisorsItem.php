<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportOtherInformationAdvisorsItem extends \ArrayObject
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
    protected $auditorName;
    /**
     * 
     *
     * @return string
     */
    public function getAuditorName() : string
    {
        return $this->auditorName;
    }
    /**
     * 
     *
     * @param string $auditorName
     *
     * @return self
     */
    public function setAuditorName(string $auditorName) : self
    {
        $this->initialized['auditorName'] = true;
        $this->auditorName = $auditorName;
        return $this;
    }
}