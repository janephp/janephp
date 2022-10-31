<?php

namespace CreditSafe\API\Model;

class CreateFreshInvestigationRequest extends \ArrayObject
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
     * @var bool
     */
    protected $consent;
    /**
     * 
     *
     * @var CreateFreshInvestigationRequestContactInfo
     */
    protected $contactInfo;
    /**
     * 
     *
     * @var string
     */
    protected $chargeReference;
    /**
     * 
     *
     * @var CreateFreshInvestigationRequestSearchCriteria
     */
    protected $searchCriteria;
    /**
     * 
     *
     * @return bool
     */
    public function getConsent() : bool
    {
        return $this->consent;
    }
    /**
     * 
     *
     * @param bool $consent
     *
     * @return self
     */
    public function setConsent(bool $consent) : self
    {
        $this->initialized['consent'] = true;
        $this->consent = $consent;
        return $this;
    }
    /**
     * 
     *
     * @return CreateFreshInvestigationRequestContactInfo
     */
    public function getContactInfo() : CreateFreshInvestigationRequestContactInfo
    {
        return $this->contactInfo;
    }
    /**
     * 
     *
     * @param CreateFreshInvestigationRequestContactInfo $contactInfo
     *
     * @return self
     */
    public function setContactInfo(CreateFreshInvestigationRequestContactInfo $contactInfo) : self
    {
        $this->initialized['contactInfo'] = true;
        $this->contactInfo = $contactInfo;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getChargeReference() : string
    {
        return $this->chargeReference;
    }
    /**
     * 
     *
     * @param string $chargeReference
     *
     * @return self
     */
    public function setChargeReference(string $chargeReference) : self
    {
        $this->initialized['chargeReference'] = true;
        $this->chargeReference = $chargeReference;
        return $this;
    }
    /**
     * 
     *
     * @return CreateFreshInvestigationRequestSearchCriteria
     */
    public function getSearchCriteria() : CreateFreshInvestigationRequestSearchCriteria
    {
        return $this->searchCriteria;
    }
    /**
     * 
     *
     * @param CreateFreshInvestigationRequestSearchCriteria $searchCriteria
     *
     * @return self
     */
    public function setSearchCriteria(CreateFreshInvestigationRequestSearchCriteria $searchCriteria) : self
    {
        $this->initialized['searchCriteria'] = true;
        $this->searchCriteria = $searchCriteria;
        return $this;
    }
}