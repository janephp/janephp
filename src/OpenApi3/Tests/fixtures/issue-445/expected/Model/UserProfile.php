<?php

namespace PicturePark\API\Model;

class UserProfile
{
    /**
     * ID of the user.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Email address.
     *
     * @var string|null
     */
    protected $emailAddress;
    /**
     * First name.
     *
     * @var string|null
     */
    protected $firstName;
    /**
     * Last name.
     *
     * @var string|null
     */
    protected $lastName;
    /**
     * Language code.
     *
     * @var string|null
     */
    protected $languageCode;
    /**
     * Address.
     *
     * @var mixed|null
     */
    protected $address;
    /**
     * Authorization state.
     *
     * @var mixed
     */
    protected $authorizationState;
    /**
     * Indicates if the user is locked.
     *
     * @var bool
     */
    protected $isLocked;
    /**
     * A list of user rights assigned to the user.
     *
     * @var string[]|null
     */
    protected $userRights;
    /**
     * A list of user role IDs assigned to the user.
     *
     * @var string[]|null
     */
    protected $userRoleIds;
    /**
     * Indicates if the user has not accepted the latest terms of consent.
     *
     * @var bool
     */
    protected $termsConsentExpired;
    /**
     * A list of system user roles assigned to the user.
     *
     * @var string[]|null
     */
    protected $systemUserRoles;
    /**
     * Indicates if the user has the developer flag set.
     *
     * @var bool
     */
    protected $isDeveloper;
    /**
     * Federated user is a user who is (currently) governed by an external identity provider.
     *
     * @var bool
     */
    protected $isFederated;
    /**
     * ID of the user.
     *
     * @return string|null
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * ID of the user.
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Email address.
     *
     * @return string|null
     */
    public function getEmailAddress() : ?string
    {
        return $this->emailAddress;
    }
    /**
     * Email address.
     *
     * @param string|null $emailAddress
     *
     * @return self
     */
    public function setEmailAddress(?string $emailAddress) : self
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }
    /**
     * First name.
     *
     * @return string|null
     */
    public function getFirstName() : ?string
    {
        return $this->firstName;
    }
    /**
     * First name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setFirstName(?string $firstName) : self
    {
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * Last name.
     *
     * @return string|null
     */
    public function getLastName() : ?string
    {
        return $this->lastName;
    }
    /**
     * Last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setLastName(?string $lastName) : self
    {
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * Language code.
     *
     * @return string|null
     */
    public function getLanguageCode() : ?string
    {
        return $this->languageCode;
    }
    /**
     * Language code.
     *
     * @param string|null $languageCode
     *
     * @return self
     */
    public function setLanguageCode(?string $languageCode) : self
    {
        $this->languageCode = $languageCode;
        return $this;
    }
    /**
     * Address.
     *
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Address.
     *
     * @param mixed $address
     *
     * @return self
     */
    public function setAddress($address) : self
    {
        $this->address = $address;
        return $this;
    }
    /**
     * Authorization state.
     *
     * @return mixed
     */
    public function getAuthorizationState()
    {
        return $this->authorizationState;
    }
    /**
     * Authorization state.
     *
     * @param mixed $authorizationState
     *
     * @return self
     */
    public function setAuthorizationState($authorizationState) : self
    {
        $this->authorizationState = $authorizationState;
        return $this;
    }
    /**
     * Indicates if the user is locked.
     *
     * @return bool
     */
    public function getIsLocked() : bool
    {
        return $this->isLocked;
    }
    /**
     * Indicates if the user is locked.
     *
     * @param bool $isLocked
     *
     * @return self
     */
    public function setIsLocked(bool $isLocked) : self
    {
        $this->isLocked = $isLocked;
        return $this;
    }
    /**
     * A list of user rights assigned to the user.
     *
     * @return string[]|null
     */
    public function getUserRights() : ?array
    {
        return $this->userRights;
    }
    /**
     * A list of user rights assigned to the user.
     *
     * @param string[]|null $userRights
     *
     * @return self
     */
    public function setUserRights(?array $userRights) : self
    {
        $this->userRights = $userRights;
        return $this;
    }
    /**
     * A list of user role IDs assigned to the user.
     *
     * @return string[]|null
     */
    public function getUserRoleIds() : ?array
    {
        return $this->userRoleIds;
    }
    /**
     * A list of user role IDs assigned to the user.
     *
     * @param string[]|null $userRoleIds
     *
     * @return self
     */
    public function setUserRoleIds(?array $userRoleIds) : self
    {
        $this->userRoleIds = $userRoleIds;
        return $this;
    }
    /**
     * Indicates if the user has not accepted the latest terms of consent.
     *
     * @return bool
     */
    public function getTermsConsentExpired() : bool
    {
        return $this->termsConsentExpired;
    }
    /**
     * Indicates if the user has not accepted the latest terms of consent.
     *
     * @param bool $termsConsentExpired
     *
     * @return self
     */
    public function setTermsConsentExpired(bool $termsConsentExpired) : self
    {
        $this->termsConsentExpired = $termsConsentExpired;
        return $this;
    }
    /**
     * A list of system user roles assigned to the user.
     *
     * @return string[]|null
     */
    public function getSystemUserRoles() : ?array
    {
        return $this->systemUserRoles;
    }
    /**
     * A list of system user roles assigned to the user.
     *
     * @param string[]|null $systemUserRoles
     *
     * @return self
     */
    public function setSystemUserRoles(?array $systemUserRoles) : self
    {
        $this->systemUserRoles = $systemUserRoles;
        return $this;
    }
    /**
     * Indicates if the user has the developer flag set.
     *
     * @return bool
     */
    public function getIsDeveloper() : bool
    {
        return $this->isDeveloper;
    }
    /**
     * Indicates if the user has the developer flag set.
     *
     * @param bool $isDeveloper
     *
     * @return self
     */
    public function setIsDeveloper(bool $isDeveloper) : self
    {
        $this->isDeveloper = $isDeveloper;
        return $this;
    }
    /**
     * Federated user is a user who is (currently) governed by an external identity provider.
     *
     * @return bool
     */
    public function getIsFederated() : bool
    {
        return $this->isFederated;
    }
    /**
     * Federated user is a user who is (currently) governed by an external identity provider.
     *
     * @param bool $isFederated
     *
     * @return self
     */
    public function setIsFederated(bool $isFederated) : self
    {
        $this->isFederated = $isFederated;
        return $this;
    }
}