<?php

namespace PicturePark\API\Model;

class UserEmail
{
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
     * Email address
     *
     * @var string
     */
    protected $emailAddress;
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
     * Email address
     *
     * @return string
     */
    public function getEmailAddress() : string
    {
        return $this->emailAddress;
    }
    /**
     * Email address
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
}