<?php

namespace CreditSafe\API\Model;

class ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsName extends \ArrayObject
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
    protected $full;
    /**
     * 
     *
     * @return string
     */
    public function getFull() : string
    {
        return $this->full;
    }
    /**
     * 
     *
     * @param string $full
     *
     * @return self
     */
    public function setFull(string $full) : self
    {
        $this->initialized['full'] = true;
        $this->full = $full;
        return $this;
    }
}