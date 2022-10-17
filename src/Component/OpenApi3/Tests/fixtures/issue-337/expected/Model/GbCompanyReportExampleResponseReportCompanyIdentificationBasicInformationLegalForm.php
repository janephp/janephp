<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationLegalForm extends \ArrayObject
{
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->description = $description;
        return $this;
    }
}