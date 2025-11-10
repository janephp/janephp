<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class IdentityCreateUser
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * First name
     *
     * @var string
     */
    protected $firstName;
    /**
     * Last Name
     *
     * @var string
     */
    protected $lastName;
    /**
     * Email
     *
     * @var string
     */
    protected $email;
    /**
     * Phone
     *
     * @var string
     */
    protected $phone;
    /**
     * Address
     *
     * @var string
     */
    protected $address;
    /**
     * City
     *
     * @var string
     */
    protected $city;
    /**
     * State
     *
     * @var string
     */
    protected $state;
    /**
     * Zip Code
     *
     * @var string
     */
    protected $zipCode;
    /**
     * Country
     *
     * @var string
     */
    protected $countryName;
    /**
     * Country
     *
     * @var string
     */
    protected $countryShortName;
    /**
     * Is Disabled
     *
     * @var string
     */
    protected $isDisabled;
    /**
     * Remark
     *
     * @var string
     */
    protected $remark;
    /**
     * User Name
     *
     * @var string
     */
    protected $userName;
    /**
     * Password
     *
     * @var string
     */
    protected $password;
    /**
     * Domain ID
     *
     * @var string
     */
    protected $domainId;
    /**
     * @var CommonGenericRef
     */
    protected $subscriberPackage;
    /**
     * First name
     *
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }
    /**
     * First name
     *
     * @param string $firstName
     *
     * @return self
     */
    public function setFirstName(string $firstName): self
    {
        $this->initialized['firstName'] = true;
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * Last Name
     *
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }
    /**
     * Last Name
     *
     * @param string $lastName
     *
     * @return self
     */
    public function setLastName(string $lastName): self
    {
        $this->initialized['lastName'] = true;
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * Email
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    /**
     * Email
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * Phone
     *
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }
    /**
     * Phone
     *
     * @param string $phone
     *
     * @return self
     */
    public function setPhone(string $phone): self
    {
        $this->initialized['phone'] = true;
        $this->phone = $phone;
        return $this;
    }
    /**
     * Address
     *
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }
    /**
     * Address
     *
     * @param string $address
     *
     * @return self
     */
    public function setAddress(string $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * City
     *
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }
    /**
     * City
     *
     * @param string $city
     *
     * @return self
     */
    public function setCity(string $city): self
    {
        $this->initialized['city'] = true;
        $this->city = $city;
        return $this;
    }
    /**
     * State
     *
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }
    /**
     * State
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
    /**
     * Zip Code
     *
     * @return string
     */
    public function getZipCode(): string
    {
        return $this->zipCode;
    }
    /**
     * Zip Code
     *
     * @param string $zipCode
     *
     * @return self
     */
    public function setZipCode(string $zipCode): self
    {
        $this->initialized['zipCode'] = true;
        $this->zipCode = $zipCode;
        return $this;
    }
    /**
     * Country
     *
     * @return string
     */
    public function getCountryName(): string
    {
        return $this->countryName;
    }
    /**
     * Country
     *
     * @param string $countryName
     *
     * @return self
     */
    public function setCountryName(string $countryName): self
    {
        $this->initialized['countryName'] = true;
        $this->countryName = $countryName;
        return $this;
    }
    /**
     * Country
     *
     * @return string
     */
    public function getCountryShortName(): string
    {
        return $this->countryShortName;
    }
    /**
     * Country
     *
     * @param string $countryShortName
     *
     * @return self
     */
    public function setCountryShortName(string $countryShortName): self
    {
        $this->initialized['countryShortName'] = true;
        $this->countryShortName = $countryShortName;
        return $this;
    }
    /**
     * Is Disabled
     *
     * @return string
     */
    public function getIsDisabled(): string
    {
        return $this->isDisabled;
    }
    /**
     * Is Disabled
     *
     * @param string $isDisabled
     *
     * @return self
     */
    public function setIsDisabled(string $isDisabled): self
    {
        $this->initialized['isDisabled'] = true;
        $this->isDisabled = $isDisabled;
        return $this;
    }
    /**
     * Remark
     *
     * @return string
     */
    public function getRemark(): string
    {
        return $this->remark;
    }
    /**
     * Remark
     *
     * @param string $remark
     *
     * @return self
     */
    public function setRemark(string $remark): self
    {
        $this->initialized['remark'] = true;
        $this->remark = $remark;
        return $this;
    }
    /**
     * User Name
     *
     * @return string
     */
    public function getUserName(): string
    {
        return $this->userName;
    }
    /**
     * User Name
     *
     * @param string $userName
     *
     * @return self
     */
    public function setUserName(string $userName): self
    {
        $this->initialized['userName'] = true;
        $this->userName = $userName;
        return $this;
    }
    /**
     * Password
     *
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }
    /**
     * Password
     *
     * @param string $password
     *
     * @return self
     */
    public function setPassword(string $password): self
    {
        $this->initialized['password'] = true;
        $this->password = $password;
        return $this;
    }
    /**
     * Domain ID
     *
     * @return string
     */
    public function getDomainId(): string
    {
        return $this->domainId;
    }
    /**
     * Domain ID
     *
     * @param string $domainId
     *
     * @return self
     */
    public function setDomainId(string $domainId): self
    {
        $this->initialized['domainId'] = true;
        $this->domainId = $domainId;
        return $this;
    }
    /**
     * @return CommonGenericRef
     */
    public function getSubscriberPackage(): CommonGenericRef
    {
        return $this->subscriberPackage;
    }
    /**
     * @param CommonGenericRef $subscriberPackage
     *
     * @return self
     */
    public function setSubscriberPackage(CommonGenericRef $subscriberPackage): self
    {
        $this->initialized['subscriberPackage'] = true;
        $this->subscriberPackage = $subscriberPackage;
        return $this;
    }
}