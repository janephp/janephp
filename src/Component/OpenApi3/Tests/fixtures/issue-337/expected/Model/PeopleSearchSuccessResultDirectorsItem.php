<?php

namespace CreditSafe\API\Model;

class PeopleSearchSuccessResultDirectorsItem extends \ArrayObject
{
    /**
     * 
     *
     * @var string
     */
    protected $peopleId;
    /**
     * 
     *
     * @var string
     */
    protected $firstName;
    /**
     * 
     *
     * @var string
     */
    protected $lastName;
    /**
     * 
     *
     * @var string
     */
    protected $country;
    /**
     * 
     *
     * @var PeopleSearchSuccessResultDirectorsItemCompany
     */
    protected $company;
    /**
     * 
     *
     * @var PeopleSearchSuccessResultDirectorsItemAddress
     */
    protected $address;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var string
     */
    protected $dateOfLatestChange;
    /**
     * 
     *
     * @var string
     */
    protected $dateOfBirth;
    /**
     * 
     *
     * @var string
     */
    protected $localDirectorNumber;
    /**
     * 
     *
     * @return string
     */
    public function getPeopleId() : string
    {
        return $this->peopleId;
    }
    /**
     * 
     *
     * @param string $peopleId
     *
     * @return self
     */
    public function setPeopleId(string $peopleId) : self
    {
        $this->peopleId = $peopleId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFirstName() : string
    {
        return $this->firstName;
    }
    /**
     * 
     *
     * @param string $firstName
     *
     * @return self
     */
    public function setFirstName(string $firstName) : self
    {
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLastName() : string
    {
        return $this->lastName;
    }
    /**
     * 
     *
     * @param string $lastName
     *
     * @return self
     */
    public function setLastName(string $lastName) : self
    {
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCountry() : string
    {
        return $this->country;
    }
    /**
     * 
     *
     * @param string $country
     *
     * @return self
     */
    public function setCountry(string $country) : self
    {
        $this->country = $country;
        return $this;
    }
    /**
     * 
     *
     * @return PeopleSearchSuccessResultDirectorsItemCompany
     */
    public function getCompany() : PeopleSearchSuccessResultDirectorsItemCompany
    {
        return $this->company;
    }
    /**
     * 
     *
     * @param PeopleSearchSuccessResultDirectorsItemCompany $company
     *
     * @return self
     */
    public function setCompany(PeopleSearchSuccessResultDirectorsItemCompany $company) : self
    {
        $this->company = $company;
        return $this;
    }
    /**
     * 
     *
     * @return PeopleSearchSuccessResultDirectorsItemAddress
     */
    public function getAddress() : PeopleSearchSuccessResultDirectorsItemAddress
    {
        return $this->address;
    }
    /**
     * 
     *
     * @param PeopleSearchSuccessResultDirectorsItemAddress $address
     *
     * @return self
     */
    public function setAddress(PeopleSearchSuccessResultDirectorsItemAddress $address) : self
    {
        $this->address = $address;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDateOfLatestChange() : string
    {
        return $this->dateOfLatestChange;
    }
    /**
     * 
     *
     * @param string $dateOfLatestChange
     *
     * @return self
     */
    public function setDateOfLatestChange(string $dateOfLatestChange) : self
    {
        $this->dateOfLatestChange = $dateOfLatestChange;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDateOfBirth() : string
    {
        return $this->dateOfBirth;
    }
    /**
     * 
     *
     * @param string $dateOfBirth
     *
     * @return self
     */
    public function setDateOfBirth(string $dateOfBirth) : self
    {
        $this->dateOfBirth = $dateOfBirth;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLocalDirectorNumber() : string
    {
        return $this->localDirectorNumber;
    }
    /**
     * 
     *
     * @param string $localDirectorNumber
     *
     * @return self
     */
    public function setLocalDirectorNumber(string $localDirectorNumber) : self
    {
        $this->localDirectorNumber = $localDirectorNumber;
        return $this;
    }
}