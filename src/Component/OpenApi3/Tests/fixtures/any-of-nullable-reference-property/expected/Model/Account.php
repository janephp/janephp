<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class Account
{
    /**
     * 
     *
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $firstname;
    /**
     * 
     *
     * @var string
     */
    protected $lastname;
    /**
     * 
     *
     * @var Country|null
     */
    protected $countryOfBirth;
    /**
     * 
     *
     * @var Country
     */
    protected $country;
    /**
     * 
     *
     * @var Country|Country[]|null
     */
    protected $nationality;
    /**
     * 
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * 
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
     * 
     *
     * @return string
     */
    public function getFirstname() : string
    {
        return $this->firstname;
    }
    /**
     * 
     *
     * @param string $firstname
     *
     * @return self
     */
    public function setFirstname(string $firstname) : self
    {
        $this->firstname = $firstname;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLastname() : string
    {
        return $this->lastname;
    }
    /**
     * 
     *
     * @param string $lastname
     *
     * @return self
     */
    public function setLastname(string $lastname) : self
    {
        $this->lastname = $lastname;
        return $this;
    }
    /**
     * 
     *
     * @return Country|null
     */
    public function getCountryOfBirth() : ?Country
    {
        return $this->countryOfBirth;
    }
    /**
     * 
     *
     * @param Country|null $countryOfBirth
     *
     * @return self
     */
    public function setCountryOfBirth(?Country $countryOfBirth) : self
    {
        $this->countryOfBirth = $countryOfBirth;
        return $this;
    }
    /**
     * 
     *
     * @return Country
     */
    public function getCountry() : Country
    {
        return $this->country;
    }
    /**
     * 
     *
     * @param Country $country
     *
     * @return self
     */
    public function setCountry(Country $country) : self
    {
        $this->country = $country;
        return $this;
    }
    /**
     * 
     *
     * @return Country|Country[]|null
     */
    public function getNationality()
    {
        return $this->nationality;
    }
    /**
     * 
     *
     * @param Country|Country[]|null $nationality
     *
     * @return self
     */
    public function setNationality($nationality) : self
    {
        $this->nationality = $nationality;
        return $this;
    }
}