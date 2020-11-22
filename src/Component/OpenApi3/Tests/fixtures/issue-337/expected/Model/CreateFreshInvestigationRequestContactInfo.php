<?php

namespace CreditSafe\API\Model;

class CreateFreshInvestigationRequestContactInfo
{
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
        $this->company = $company;
        return $this;
    }
}