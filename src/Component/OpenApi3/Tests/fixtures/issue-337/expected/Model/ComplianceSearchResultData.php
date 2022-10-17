<?php

namespace CreditSafe\API\Model;

class ComplianceSearchResultData extends \ArrayObject
{
    /**
     * 
     *
     * @var ComplianceSearchResultDataBody
     */
    protected $body;
    /**
     * 
     *
     * @return ComplianceSearchResultDataBody
     */
    public function getBody() : ComplianceSearchResultDataBody
    {
        return $this->body;
    }
    /**
     * 
     *
     * @param ComplianceSearchResultDataBody $body
     *
     * @return self
     */
    public function setBody(ComplianceSearchResultDataBody $body) : self
    {
        $this->body = $body;
        return $this;
    }
}