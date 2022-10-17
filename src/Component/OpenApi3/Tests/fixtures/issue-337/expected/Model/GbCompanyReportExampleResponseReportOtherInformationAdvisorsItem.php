<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportOtherInformationAdvisorsItem extends \ArrayObject
{
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
        $this->auditorName = $auditorName;
        return $this;
    }
}