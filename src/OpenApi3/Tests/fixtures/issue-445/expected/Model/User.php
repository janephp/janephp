<?php

namespace PicturePark\API\Model;

class User
{
    /**
     * User's Picturepark ID.
     *
     * @var string|null
     */
    protected $id;
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
     * Marks a user that was deleted from the system.
     *
     * @var bool
     */
    protected $isDeleted;
    /**
     * User's Picturepark ID.
     *
     * @return string|null
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * User's Picturepark ID.
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
     * Marks a user that was deleted from the system.
     *
     * @return bool
     */
    public function getIsDeleted() : bool
    {
        return $this->isDeleted;
    }
    /**
     * Marks a user that was deleted from the system.
     *
     * @param bool $isDeleted
     *
     * @return self
     */
    public function setIsDeleted(bool $isDeleted) : self
    {
        $this->isDeleted = $isDeleted;
        return $this;
    }
}