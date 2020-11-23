<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Model;

class Contact
{
    /**
     * Unique ID for the contact.
     *
     * @var int
     */
    protected $id;
    /**
     * An object containing the contact’s client id and name.
     *
     * @var ContactClient
     */
    protected $client;
    /**
     * The title of the contact.
     *
     * @var string
     */
    protected $title;
    /**
     * The first name of the contact.
     *
     * @var string
     */
    protected $firstName;
    /**
     * The last name of the contact.
     *
     * @var string
     */
    protected $lastName;
    /**
     * The contact’s email address.
     *
     * @var string
     */
    protected $email;
    /**
     * The contact’s office phone number.
     *
     * @var string
     */
    protected $phoneOffice;
    /**
     * The contact’s mobile phone number.
     *
     * @var string
     */
    protected $phoneMobile;
    /**
     * The contact’s fax number.
     *
     * @var string
     */
    protected $fax;
    /**
     * Date and time the contact was created.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Date and time the contact was last updated.
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * Unique ID for the contact.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * Unique ID for the contact.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * An object containing the contact’s client id and name.
     *
     * @return ContactClient
     */
    public function getClient() : ContactClient
    {
        return $this->client;
    }
    /**
     * An object containing the contact’s client id and name.
     *
     * @param ContactClient $client
     *
     * @return self
     */
    public function setClient(ContactClient $client) : self
    {
        $this->client = $client;
        return $this;
    }
    /**
     * The title of the contact.
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * The title of the contact.
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title) : self
    {
        $this->title = $title;
        return $this;
    }
    /**
     * The first name of the contact.
     *
     * @return string
     */
    public function getFirstName() : string
    {
        return $this->firstName;
    }
    /**
     * The first name of the contact.
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
     * The last name of the contact.
     *
     * @return string
     */
    public function getLastName() : string
    {
        return $this->lastName;
    }
    /**
     * The last name of the contact.
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
     * The contact’s email address.
     *
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }
    /**
     * The contact’s email address.
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email) : self
    {
        $this->email = $email;
        return $this;
    }
    /**
     * The contact’s office phone number.
     *
     * @return string
     */
    public function getPhoneOffice() : string
    {
        return $this->phoneOffice;
    }
    /**
     * The contact’s office phone number.
     *
     * @param string $phoneOffice
     *
     * @return self
     */
    public function setPhoneOffice(string $phoneOffice) : self
    {
        $this->phoneOffice = $phoneOffice;
        return $this;
    }
    /**
     * The contact’s mobile phone number.
     *
     * @return string
     */
    public function getPhoneMobile() : string
    {
        return $this->phoneMobile;
    }
    /**
     * The contact’s mobile phone number.
     *
     * @param string $phoneMobile
     *
     * @return self
     */
    public function setPhoneMobile(string $phoneMobile) : self
    {
        $this->phoneMobile = $phoneMobile;
        return $this;
    }
    /**
     * The contact’s fax number.
     *
     * @return string
     */
    public function getFax() : string
    {
        return $this->fax;
    }
    /**
     * The contact’s fax number.
     *
     * @param string $fax
     *
     * @return self
     */
    public function setFax(string $fax) : self
    {
        $this->fax = $fax;
        return $this;
    }
    /**
     * Date and time the contact was created.
     *
     * @return \DateTime
     */
    public function getCreatedAt() : \DateTime
    {
        return $this->createdAt;
    }
    /**
     * Date and time the contact was created.
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Date and time the contact was last updated.
     *
     * @return \DateTime
     */
    public function getUpdatedAt() : \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * Date and time the contact was last updated.
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt) : self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
}