<?php

namespace CreditSafe\API\Model;

class ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsName
{
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
        $this->full = $full;
        return $this;
    }
}