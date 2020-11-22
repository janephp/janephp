<?php

namespace PicturePark\API\Model;

class UserProfileUpdateRequest
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
}