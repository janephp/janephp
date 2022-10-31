<?php

namespace CreditSafe\API\Model;

class ListFreshInvestigationResponseOrdersItemContactDetails extends \ArrayObject
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
}