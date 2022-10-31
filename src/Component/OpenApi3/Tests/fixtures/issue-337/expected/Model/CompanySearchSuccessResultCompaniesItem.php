<?php

namespace CreditSafe\API\Model;

class CompanySearchSuccessResultCompaniesItem extends \ArrayObject
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
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $country;
    /**
     * 
     *
     * @var string
     */
    protected $regNo;
    /**
     * 
     *
     * @var CompanySearchSuccessResultCompaniesItemVatNo
     */
    protected $vatNo;
    /**
     * 
     *
     * @var string
     */
    protected $safeNo;
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
    protected $status;
    /**
     * 
     *
     * @var string
     */
    protected $officeType;
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var string
     */
    protected $statusDescription;
    /**
     * 
     *
     * @var string
     */
    protected $activityCode;
    /**
     * 
     *
     * @var CompanySearchSuccessResultCompaniesItemTradingNames
     */
    protected $tradingNames;
    /**
     * 
     *
     * @var CompanySearchSuccessResultCompaniesItemAddress
     */
    protected $address;
    /**
     * 
     *
     * @var CompanySearchSuccessResultCompaniesItemDateOfLatestChange
     */
    protected $dateOfLatestChange;
    /**
     * 
     *
     * @var CompanySearchSuccessResultCompaniesItemDateOfLatestCAccounts
     */
    protected $dateOfLatestCAccounts;
    /**
     * 
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
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
        $this->initialized['country'] = true;
        $this->country = $country;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRegNo() : string
    {
        return $this->regNo;
    }
    /**
     * 
     *
     * @param string $regNo
     *
     * @return self
     */
    public function setRegNo(string $regNo) : self
    {
        $this->initialized['regNo'] = true;
        $this->regNo = $regNo;
        return $this;
    }
    /**
     * 
     *
     * @return CompanySearchSuccessResultCompaniesItemVatNo
     */
    public function getVatNo() : CompanySearchSuccessResultCompaniesItemVatNo
    {
        return $this->vatNo;
    }
    /**
     * 
     *
     * @param CompanySearchSuccessResultCompaniesItemVatNo $vatNo
     *
     * @return self
     */
    public function setVatNo(CompanySearchSuccessResultCompaniesItemVatNo $vatNo) : self
    {
        $this->initialized['vatNo'] = true;
        $this->vatNo = $vatNo;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSafeNo() : string
    {
        return $this->safeNo;
    }
    /**
     * 
     *
     * @param string $safeNo
     *
     * @return self
     */
    public function setSafeNo(string $safeNo) : self
    {
        $this->initialized['safeNo'] = true;
        $this->safeNo = $safeNo;
        return $this;
    }
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
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOfficeType() : string
    {
        return $this->officeType;
    }
    /**
     * 
     *
     * @param string $officeType
     *
     * @return self
     */
    public function setOfficeType(string $officeType) : self
    {
        $this->initialized['officeType'] = true;
        $this->officeType = $officeType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatusDescription() : string
    {
        return $this->statusDescription;
    }
    /**
     * 
     *
     * @param string $statusDescription
     *
     * @return self
     */
    public function setStatusDescription(string $statusDescription) : self
    {
        $this->initialized['statusDescription'] = true;
        $this->statusDescription = $statusDescription;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getActivityCode() : string
    {
        return $this->activityCode;
    }
    /**
     * 
     *
     * @param string $activityCode
     *
     * @return self
     */
    public function setActivityCode(string $activityCode) : self
    {
        $this->initialized['activityCode'] = true;
        $this->activityCode = $activityCode;
        return $this;
    }
    /**
     * 
     *
     * @return CompanySearchSuccessResultCompaniesItemTradingNames
     */
    public function getTradingNames() : CompanySearchSuccessResultCompaniesItemTradingNames
    {
        return $this->tradingNames;
    }
    /**
     * 
     *
     * @param CompanySearchSuccessResultCompaniesItemTradingNames $tradingNames
     *
     * @return self
     */
    public function setTradingNames(CompanySearchSuccessResultCompaniesItemTradingNames $tradingNames) : self
    {
        $this->initialized['tradingNames'] = true;
        $this->tradingNames = $tradingNames;
        return $this;
    }
    /**
     * 
     *
     * @return CompanySearchSuccessResultCompaniesItemAddress
     */
    public function getAddress() : CompanySearchSuccessResultCompaniesItemAddress
    {
        return $this->address;
    }
    /**
     * 
     *
     * @param CompanySearchSuccessResultCompaniesItemAddress $address
     *
     * @return self
     */
    public function setAddress(CompanySearchSuccessResultCompaniesItemAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * 
     *
     * @return CompanySearchSuccessResultCompaniesItemDateOfLatestChange
     */
    public function getDateOfLatestChange() : CompanySearchSuccessResultCompaniesItemDateOfLatestChange
    {
        return $this->dateOfLatestChange;
    }
    /**
     * 
     *
     * @param CompanySearchSuccessResultCompaniesItemDateOfLatestChange $dateOfLatestChange
     *
     * @return self
     */
    public function setDateOfLatestChange(CompanySearchSuccessResultCompaniesItemDateOfLatestChange $dateOfLatestChange) : self
    {
        $this->initialized['dateOfLatestChange'] = true;
        $this->dateOfLatestChange = $dateOfLatestChange;
        return $this;
    }
    /**
     * 
     *
     * @return CompanySearchSuccessResultCompaniesItemDateOfLatestCAccounts
     */
    public function getDateOfLatestCAccounts() : CompanySearchSuccessResultCompaniesItemDateOfLatestCAccounts
    {
        return $this->dateOfLatestCAccounts;
    }
    /**
     * 
     *
     * @param CompanySearchSuccessResultCompaniesItemDateOfLatestCAccounts $dateOfLatestCAccounts
     *
     * @return self
     */
    public function setDateOfLatestCAccounts(CompanySearchSuccessResultCompaniesItemDateOfLatestCAccounts $dateOfLatestCAccounts) : self
    {
        $this->initialized['dateOfLatestCAccounts'] = true;
        $this->dateOfLatestCAccounts = $dateOfLatestCAccounts;
        return $this;
    }
}