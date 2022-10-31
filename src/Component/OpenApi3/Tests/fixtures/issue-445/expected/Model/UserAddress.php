<?php

namespace PicturePark\API\Model;

class UserAddress
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Company address line
     *
     * @var string|null
     */
    protected $company;
    /**
     * Company department.
     *
     * @var string|null
     */
    protected $department;
    /**
     * Street and house number.
     *
     * @var string|null
     */
    protected $address;
    /**
     * Additional address line.
     *
     * @var string|null
     */
    protected $alternativeAddress;
    /**
     * ZIP code.
     *
     * @var string|null
     */
    protected $zip;
    /**
     * City or town.
     *
     * @var string|null
     */
    protected $city;
    /**
     * Phone number.
     *
     * @var string|null
     */
    protected $phone;
    /**
     * Country code.
     *
     * @var string|null
     */
    protected $countryCode;
    /**
     * Company address line
     *
     * @return string|null
     */
    public function getCompany() : ?string
    {
        return $this->company;
    }
    /**
     * Company address line
     *
     * @param string|null $company
     *
     * @return self
     */
    public function setCompany(?string $company) : self
    {
        $this->initialized['company'] = true;
        $this->company = $company;
        return $this;
    }
    /**
     * Company department.
     *
     * @return string|null
     */
    public function getDepartment() : ?string
    {
        return $this->department;
    }
    /**
     * Company department.
     *
     * @param string|null $department
     *
     * @return self
     */
    public function setDepartment(?string $department) : self
    {
        $this->initialized['department'] = true;
        $this->department = $department;
        return $this;
    }
    /**
     * Street and house number.
     *
     * @return string|null
     */
    public function getAddress() : ?string
    {
        return $this->address;
    }
    /**
     * Street and house number.
     *
     * @param string|null $address
     *
     * @return self
     */
    public function setAddress(?string $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Additional address line.
     *
     * @return string|null
     */
    public function getAlternativeAddress() : ?string
    {
        return $this->alternativeAddress;
    }
    /**
     * Additional address line.
     *
     * @param string|null $alternativeAddress
     *
     * @return self
     */
    public function setAlternativeAddress(?string $alternativeAddress) : self
    {
        $this->initialized['alternativeAddress'] = true;
        $this->alternativeAddress = $alternativeAddress;
        return $this;
    }
    /**
     * ZIP code.
     *
     * @return string|null
     */
    public function getZip() : ?string
    {
        return $this->zip;
    }
    /**
     * ZIP code.
     *
     * @param string|null $zip
     *
     * @return self
     */
    public function setZip(?string $zip) : self
    {
        $this->initialized['zip'] = true;
        $this->zip = $zip;
        return $this;
    }
    /**
     * City or town.
     *
     * @return string|null
     */
    public function getCity() : ?string
    {
        return $this->city;
    }
    /**
     * City or town.
     *
     * @param string|null $city
     *
     * @return self
     */
    public function setCity(?string $city) : self
    {
        $this->initialized['city'] = true;
        $this->city = $city;
        return $this;
    }
    /**
     * Phone number.
     *
     * @return string|null
     */
    public function getPhone() : ?string
    {
        return $this->phone;
    }
    /**
     * Phone number.
     *
     * @param string|null $phone
     *
     * @return self
     */
    public function setPhone(?string $phone) : self
    {
        $this->initialized['phone'] = true;
        $this->phone = $phone;
        return $this;
    }
    /**
     * Country code.
     *
     * @return string|null
     */
    public function getCountryCode() : ?string
    {
        return $this->countryCode;
    }
    /**
     * Country code.
     *
     * @param string|null $countryCode
     *
     * @return self
     */
    public function setCountryCode(?string $countryCode) : self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;
        return $this;
    }
}