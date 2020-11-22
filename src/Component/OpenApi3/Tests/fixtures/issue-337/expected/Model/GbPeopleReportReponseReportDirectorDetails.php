<?php

namespace CreditSafe\API\Model;

class GbPeopleReportReponseReportDirectorDetails
{
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
     * @var GbPeopleReportReponseReportDirectorDetailsPositionsItem[]
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
        $this->directorType = $directorType;
        return $this;
    }
    /**
     * 
     *
     * @return GbPeopleReportReponseReportDirectorDetailsPositionsItem[]
     */
    public function getPositions() : array
    {
        return $this->positions;
    }
    /**
     * 
     *
     * @param GbPeopleReportReponseReportDirectorDetailsPositionsItem[] $positions
     *
     * @return self
     */
    public function setPositions(array $positions) : self
    {
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
        $this->additionalData = $additionalData;
        return $this;
    }
}