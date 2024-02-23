<?php

namespace CreditSafe\API\Model;

class GbPeopleReportReponseReportDirectorDetails extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
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
    protected $idType;
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
    protected $title;
    /**
     * 
     *
     * @var string
     */
    protected $firstName;
    /**
     * 
     *
     * @var string
     */
    protected $middleName;
    /**
     * 
     *
     * @var string
     */
    protected $surname;
    /**
     * 
     *
     * @var GbPeopleReportReponseReportDirectorDetailsAddress
     */
    protected $address;
    /**
     * 
     *
     * @var string
     */
    protected $gender;
    /**
     * 
     *
     * @var string
     */
    protected $dateOfBirth;
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
    protected $directorType;
    /**
     * 
     *
     * @var list<GbPeopleReportReponseReportDirectorDetailsPositionsItem>
     */
    protected $positions;
    /**
     * 
     *
     * @var GbPeopleReportReponseReportDirectorDetailsAdditionalData
     */
    protected $additionalData;
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
    public function getIdType() : string
    {
        return $this->idType;
    }
    /**
     * 
     *
     * @param string $idType
     *
     * @return self
     */
    public function setIdType(string $idType) : self
    {
        $this->initialized['idType'] = true;
        $this->idType = $idType;
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
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * 
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title) : self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFirstName() : string
    {
        return $this->firstName;
    }
    /**
     * 
     *
     * @param string $firstName
     *
     * @return self
     */
    public function setFirstName(string $firstName) : self
    {
        $this->initialized['firstName'] = true;
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMiddleName() : string
    {
        return $this->middleName;
    }
    /**
     * 
     *
     * @param string $middleName
     *
     * @return self
     */
    public function setMiddleName(string $middleName) : self
    {
        $this->initialized['middleName'] = true;
        $this->middleName = $middleName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSurname() : string
    {
        return $this->surname;
    }
    /**
     * 
     *
     * @param string $surname
     *
     * @return self
     */
    public function setSurname(string $surname) : self
    {
        $this->initialized['surname'] = true;
        $this->surname = $surname;
        return $this;
    }
    /**
     * 
     *
     * @return GbPeopleReportReponseReportDirectorDetailsAddress
     */
    public function getAddress() : GbPeopleReportReponseReportDirectorDetailsAddress
    {
        return $this->address;
    }
    /**
     * 
     *
     * @param GbPeopleReportReponseReportDirectorDetailsAddress $address
     *
     * @return self
     */
    public function setAddress(GbPeopleReportReponseReportDirectorDetailsAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getGender() : string
    {
        return $this->gender;
    }
    /**
     * 
     *
     * @param string $gender
     *
     * @return self
     */
    public function setGender(string $gender) : self
    {
        $this->initialized['gender'] = true;
        $this->gender = $gender;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDateOfBirth() : string
    {
        return $this->dateOfBirth;
    }
    /**
     * 
     *
     * @param string $dateOfBirth
     *
     * @return self
     */
    public function setDateOfBirth(string $dateOfBirth) : self
    {
        $this->initialized['dateOfBirth'] = true;
        $this->dateOfBirth = $dateOfBirth;
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
    public function getDirectorType() : string
    {
        return $this->directorType;
    }
    /**
     * 
     *
     * @param string $directorType
     *
     * @return self
     */
    public function setDirectorType(string $directorType) : self
    {
        $this->initialized['directorType'] = true;
        $this->directorType = $directorType;
        return $this;
    }
    /**
     * 
     *
     * @return list<GbPeopleReportReponseReportDirectorDetailsPositionsItem>
     */
    public function getPositions() : array
    {
        return $this->positions;
    }
    /**
     * 
     *
     * @param list<GbPeopleReportReponseReportDirectorDetailsPositionsItem> $positions
     *
     * @return self
     */
    public function setPositions(array $positions) : self
    {
        $this->initialized['positions'] = true;
        $this->positions = $positions;
        return $this;
    }
    /**
     * 
     *
     * @return GbPeopleReportReponseReportDirectorDetailsAdditionalData
     */
    public function getAdditionalData() : GbPeopleReportReponseReportDirectorDetailsAdditionalData
    {
        return $this->additionalData;
    }
    /**
     * 
     *
     * @param GbPeopleReportReponseReportDirectorDetailsAdditionalData $additionalData
     *
     * @return self
     */
    public function setAdditionalData(GbPeopleReportReponseReportDirectorDetailsAdditionalData $additionalData) : self
    {
        $this->initialized['additionalData'] = true;
        $this->additionalData = $additionalData;
        return $this;
    }
}