<?php

namespace PicturePark\API\Model;

class UserCreateRequest
{
    /**
     * User's first name.
     *
     * @var string|null
     */
    protected $firstName;
    /**
     * User's last name.
     *
     * @var string|null
     */
    protected $lastName;
    /**
     * Email address of the user (doubles as username).
     *
     * @var string
     */
    protected $emailAddress;
    /**
     * Preferred language, e.g. for correspondence.
     *
     * @var string|null
     */
    protected $languageCode;
    /**
     * IDs of user roles the user is assigned to.
     *
     * @var string[]|null
     */
    protected $userRoleIds;
    /**
     * User address.
     *
     * @var mixed|null
     */
    protected $address;
    /**
     * User's first name.
     *
     * @return string|null
     */
    public function getFirstName() : ?string
    {
        return $this->firstName;
    }
    /**
     * User's first name.
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
     * User's last name.
     *
     * @return string|null
     */
    public function getLastName() : ?string
    {
        return $this->lastName;
    }
    /**
     * User's last name.
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
     * Email address of the user (doubles as username).
     *
     * @return string
     */
    public function getEmailAddress() : string
    {
        return $this->emailAddress;
    }
    /**
     * Email address of the user (doubles as username).
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
     * Preferred language, e.g. for correspondence.
     *
     * @return string|null
     */
    public function getLanguageCode() : ?string
    {
        return $this->languageCode;
    }
    /**
     * Preferred language, e.g. for correspondence.
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
     * IDs of user roles the user is assigned to.
     *
     * @return string[]|null
     */
    public function getUserRoleIds() : ?array
    {
        return $this->userRoleIds;
    }
    /**
     * IDs of user roles the user is assigned to.
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
     * User address.
     *
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * User address.
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
}