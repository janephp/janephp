<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationPrincipalActivity
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
     * @var string
     */
    protected $classification;
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
    /**
     * 
     *
     * @return string
     */
    public function getClassification() : string
    {
        return $this->classification;
    }
    /**
     * 
     *
     * @param string $classification
     *
     * @return self
     */
    public function setClassification(string $classification) : self
    {
        $this->classification = $classification;
        return $this;
    }
}