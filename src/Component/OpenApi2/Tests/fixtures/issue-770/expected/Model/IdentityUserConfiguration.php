<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class IdentityUserConfiguration
{
    /**
     * First name
     *
     * @var string
     */
    public string $firstName;
    /**
     * Last Name
     *
     * @var string
     */
    public string $lastName;
    /**
     * Email
     *
     * @var string
     */
    public string $email;
    /**
     * Phone
     *
     * @var string
     */
    public string $phone;
    /**
     * Address
     *
     * @var string
     */
    public string $address;
    /**
     * City
     *
     * @var string
     */
    public string $city;
    /**
     * State
     *
     * @var string
     */
    public string $state;
    /**
     * Zip Code
     *
     * @var string
     */
    public string $zipCode;
    /**
     * Country
     *
     * @var string
     */
    public string $countryName;
    /**
     * Country
     *
     * @var string
     */
    public string $countryShortName;
    /**
     * Remark
     *
     * @var string
     */
    public string $remark;
    /**
     * User Name
     *
     * @var string
     */
    public string $userName;
    /**
     * @var CommonGenericRef
     */
    public CommonGenericRef $subscriberPackage;
    /**
     * Is Disabled
     *
     * @var string
     */
    public string $isDisabled;
    /**
     * Package Status
     *
     * @var string
     */
    public string $packageStatus;
    /**
     * Package Expiration Interval
     *
     * @var string
     */
    public string $packageExpirationInterval;
    /**
     * Package Expiration Value
     *
     * @var int
     */
    public int $packageExpirationValue;
    /**
     * Package Expiration Date
     *
     * @var int
     */
    public int $packageExpirationDate;
    /**
     * Timestamp of being created
     *
     * @var int
     */
    public int $createDateTime;
    /**
     * Timestamp of being modified
     *
     * @var int
     */
    public int $modifiedDateTime;
    /**
     * Creator ID
     *
     * @var string
     */
    public string $creatorId;
    /**
     * Modifier ID
     *
     * @var string
     */
    public string $modifierId;
    /**
     * Creator Name
     *
     * @var string
     */
    public string $creatorUsername;
    /**
     * Modifier Name
     *
     * @var string
     */
    public string $modifierUsername;
    /**
     * @var IdentityUsernamePasswordCredentialsImplDto
     */
    public IdentityUsernamePasswordCredentialsImplDto $usernamePasswordCredentialsImplDto;
    /**
     * @var IdentityUserConfigurationCredentialsGuestPassDto
     */
    public IdentityUserConfigurationCredentialsGuestPassDto $credentialsGuestPassDto;
}