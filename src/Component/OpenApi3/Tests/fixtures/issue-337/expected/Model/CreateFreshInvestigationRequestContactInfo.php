<?php

namespace CreditSafe\API\Model;

class CreateFreshInvestigationRequestContactInfo extends \ArrayObject
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
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $emailAddress;
    /**
     * 
     *
     * @var string
     */
    protected $telephoneNumber;
    /**
     * 
     *
     * @var CreateFreshInvestigationRequestContactInfoCompany
     */
    protected $company;
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
    public function getEmailAddress() : string
    {
        return $this->emailAddress;
    }
    /**
     * 
     *
     * @param string $emailAddress
     *
     * @return self
     */
    public function setEmailAddress(string $emailAddress) : self
    {
        $this->initialized['emailAddress'] = true;
        $this->emailAddress = $emailAddress;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTelephoneNumber() : string
    {
        return $this->telephoneNumber;
    }
    /**
     * 
     *
     * @param string $telephoneNumber
     *
     * @return self
     */
    public function setTelephoneNumber(string $telephoneNumber) : self
    {
        $this->initialized['telephoneNumber'] = true;
        $this->telephoneNumber = $telephoneNumber;
        return $this;
    }
    /**
     * 
     *
     * @return CreateFreshInvestigationRequestContactInfoCompany
     */
    public function getCompany() : CreateFreshInvestigationRequestContactInfoCompany
    {
        return $this->company;
    }
    /**
     * 
     *
     * @param CreateFreshInvestigationRequestContactInfoCompany $company
     *
     * @return self
     */
    public function setCompany(CreateFreshInvestigationRequestContactInfoCompany $company) : self
    {
        $this->initialized['company'] = true;
        $this->company = $company;
        return $this;
    }
}