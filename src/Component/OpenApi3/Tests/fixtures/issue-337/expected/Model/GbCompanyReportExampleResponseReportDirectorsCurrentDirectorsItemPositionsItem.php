<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItemPositionsItem extends \ArrayObject
{
    /**
     * 
     *
     * @var string
     */
    protected $dateAppointed;
    /**
     * 
     *
     * @var string
     */
    protected $positionName;
    /**
     * 
     *
     * @return string
     */
    public function getDateAppointed() : string
    {
        return $this->dateAppointed;
    }
    /**
     * 
     *
     * @param string $dateAppointed
     *
     * @return self
     */
    public function setDateAppointed(string $dateAppointed) : self
    {
        $this->dateAppointed = $dateAppointed;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPositionName() : string
    {
        return $this->positionName;
    }
    /**
     * 
     *
     * @param string $positionName
     *
     * @return self
     */
    public function setPositionName(string $positionName) : self
    {
        $this->positionName = $positionName;
        return $this;
    }
}