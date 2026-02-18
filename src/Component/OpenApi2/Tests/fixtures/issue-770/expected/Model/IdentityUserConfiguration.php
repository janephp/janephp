<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class IdentityUserConfiguration
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
     * @var CommonGenericRef
     */
    protected $subscriberPackage;
    /**
     * Is Disabled
     *
     * @var string
     */
    protected $isDisabled;
    /**
     * Package Status
     *
     * @var string
     */
    protected $packageStatus;
    /**
     * Package Expiration Interval
     *
     * @var string
     */
    protected $packageExpirationInterval;
    /**
     * Package Expiration Value
     *
     * @var int
     */
    protected $packageExpirationValue;
    /**
     * Package Expiration Date
     *
     * @var int
     */
    protected $packageExpirationDate;
    /**
     * Timestamp of being created
     *
     * @var int
     */
    protected $createDateTime;
    /**
     * Timestamp of being modified
     *
     * @var int
     */
    protected $modifiedDateTime;
    /**
     * Creator ID
     *
     * @var string
     */
    protected $creatorId;
    /**
     * Modifier ID
     *
     * @var string
     */
    protected $modifierId;
    /**
     * Creator Name
     *
     * @var string
     */
    protected $creatorUsername;
    /**
     * Modifier Name
     *
     * @var string
     */
    protected $modifierUsername;
    /**
     * @var IdentityUsernamePasswordCredentialsImplDto
     */
    protected $usernamePasswordCredentialsImplDto;
    /**
     * @var IdentityUserConfigurationCredentialsGuestPassDto
     */
    protected $credentialsGuestPassDto;
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
     * Package Status
     *
     * @return string
     */
    public function getPackageStatus(): string
    {
        return $this->packageStatus;
    }
    /**
     * Package Status
     *
     * @param string $packageStatus
     *
     * @return self
     */
    public function setPackageStatus(string $packageStatus): self
    {
        $this->initialized['packageStatus'] = true;
        $this->packageStatus = $packageStatus;
        return $this;
    }
    /**
     * Package Expiration Interval
     *
     * @return string
     */
    public function getPackageExpirationInterval(): string
    {
        return $this->packageExpirationInterval;
    }
    /**
     * Package Expiration Interval
     *
     * @param string $packageExpirationInterval
     *
     * @return self
     */
    public function setPackageExpirationInterval(string $packageExpirationInterval): self
    {
        $this->initialized['packageExpirationInterval'] = true;
        $this->packageExpirationInterval = $packageExpirationInterval;
        return $this;
    }
    /**
     * Package Expiration Value
     *
     * @return int
     */
    public function getPackageExpirationValue(): int
    {
        return $this->packageExpirationValue;
    }
    /**
     * Package Expiration Value
     *
     * @param int $packageExpirationValue
     *
     * @return self
     */
    public function setPackageExpirationValue(int $packageExpirationValue): self
    {
        $this->initialized['packageExpirationValue'] = true;
        $this->packageExpirationValue = $packageExpirationValue;
        return $this;
    }
    /**
     * Package Expiration Date
     *
     * @return int
     */
    public function getPackageExpirationDate(): int
    {
        return $this->packageExpirationDate;
    }
    /**
     * Package Expiration Date
     *
     * @param int $packageExpirationDate
     *
     * @return self
     */
    public function setPackageExpirationDate(int $packageExpirationDate): self
    {
        $this->initialized['packageExpirationDate'] = true;
        $this->packageExpirationDate = $packageExpirationDate;
        return $this;
    }
    /**
     * Timestamp of being created
     *
     * @return int
     */
    public function getCreateDateTime(): int
    {
        return $this->createDateTime;
    }
    /**
     * Timestamp of being created
     *
     * @param int $createDateTime
     *
     * @return self
     */
    public function setCreateDateTime(int $createDateTime): self
    {
        $this->initialized['createDateTime'] = true;
        $this->createDateTime = $createDateTime;
        return $this;
    }
    /**
     * Timestamp of being modified
     *
     * @return int
     */
    public function getModifiedDateTime(): int
    {
        return $this->modifiedDateTime;
    }
    /**
     * Timestamp of being modified
     *
     * @param int $modifiedDateTime
     *
     * @return self
     */
    public function setModifiedDateTime(int $modifiedDateTime): self
    {
        $this->initialized['modifiedDateTime'] = true;
        $this->modifiedDateTime = $modifiedDateTime;
        return $this;
    }
    /**
     * Creator ID
     *
     * @return string
     */
    public function getCreatorId(): string
    {
        return $this->creatorId;
    }
    /**
     * Creator ID
     *
     * @param string $creatorId
     *
     * @return self
     */
    public function setCreatorId(string $creatorId): self
    {
        $this->initialized['creatorId'] = true;
        $this->creatorId = $creatorId;
        return $this;
    }
    /**
     * Modifier ID
     *
     * @return string
     */
    public function getModifierId(): string
    {
        return $this->modifierId;
    }
    /**
     * Modifier ID
     *
     * @param string $modifierId
     *
     * @return self
     */
    public function setModifierId(string $modifierId): self
    {
        $this->initialized['modifierId'] = true;
        $this->modifierId = $modifierId;
        return $this;
    }
    /**
     * Creator Name
     *
     * @return string
     */
    public function getCreatorUsername(): string
    {
        return $this->creatorUsername;
    }
    /**
     * Creator Name
     *
     * @param string $creatorUsername
     *
     * @return self
     */
    public function setCreatorUsername(string $creatorUsername): self
    {
        $this->initialized['creatorUsername'] = true;
        $this->creatorUsername = $creatorUsername;
        return $this;
    }
    /**
     * Modifier Name
     *
     * @return string
     */
    public function getModifierUsername(): string
    {
        return $this->modifierUsername;
    }
    /**
     * Modifier Name
     *
     * @param string $modifierUsername
     *
     * @return self
     */
    public function setModifierUsername(string $modifierUsername): self
    {
        $this->initialized['modifierUsername'] = true;
        $this->modifierUsername = $modifierUsername;
        return $this;
    }
    /**
     * @return IdentityUsernamePasswordCredentialsImplDto
     */
    public function getUsernamePasswordCredentialsImplDto(): IdentityUsernamePasswordCredentialsImplDto
    {
        return $this->usernamePasswordCredentialsImplDto;
    }
    /**
     * @param IdentityUsernamePasswordCredentialsImplDto $usernamePasswordCredentialsImplDto
     *
     * @return self
     */
    public function setUsernamePasswordCredentialsImplDto(IdentityUsernamePasswordCredentialsImplDto $usernamePasswordCredentialsImplDto): self
    {
        $this->initialized['usernamePasswordCredentialsImplDto'] = true;
        $this->usernamePasswordCredentialsImplDto = $usernamePasswordCredentialsImplDto;
        return $this;
    }
    /**
     * @return IdentityUserConfigurationCredentialsGuestPassDto
     */
    public function getCredentialsGuestPassDto(): IdentityUserConfigurationCredentialsGuestPassDto
    {
        return $this->credentialsGuestPassDto;
    }
    /**
     * @param IdentityUserConfigurationCredentialsGuestPassDto $credentialsGuestPassDto
     *
     * @return self
     */
    public function setCredentialsGuestPassDto(IdentityUserConfigurationCredentialsGuestPassDto $credentialsGuestPassDto): self
    {
        $this->initialized['credentialsGuestPassDto'] = true;
        $this->credentialsGuestPassDto = $credentialsGuestPassDto;
        return $this;
    }
}