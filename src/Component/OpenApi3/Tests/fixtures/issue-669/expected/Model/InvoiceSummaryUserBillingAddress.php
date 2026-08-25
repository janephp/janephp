<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class InvoiceSummaryUserBillingAddress implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Street address line 1
     *
     * @var string
     */
    protected $addressLine1;
    /**
     * Street address line 2
     *
     * @var string
     */
    protected $addressLine2;
    /**
     * City
     *
     * @var string
     */
    protected $city;
    /**
     * Region
     *
     * @var string
     */
    protected $region;
    /**
     * Postal code
     *
     * @var string
     */
    protected $postalCode;
    /**
     * Country (ISO2) code
     *
     * @var string
     */
    protected $countryIso2Code;
    /**
     * Timestamp billing address was created
     *
     * @var string
     */
    protected $createdAt;
    /**
     * Timestamp billing address was updated
     *
     * @var string
     */
    protected $updatedAt;
    /**
     * Street address line 1
     *
     * @return string
     */
    public function getAddressLine1(): string
    {
        return $this->addressLine1;
    }
    /**
     * Street address line 1
     *
     * @param string $addressLine1
     *
     * @return self
     */
    public function setAddressLine1(string $addressLine1): self
    {
        $this->initialized['addressLine1'] = true;
        $this->addressLine1 = $addressLine1;
        return $this;
    }
    /**
     * Street address line 2
     *
     * @return string
     */
    public function getAddressLine2(): string
    {
        return $this->addressLine2;
    }
    /**
     * Street address line 2
     *
     * @param string $addressLine2
     *
     * @return self
     */
    public function setAddressLine2(string $addressLine2): self
    {
        $this->initialized['addressLine2'] = true;
        $this->addressLine2 = $addressLine2;
        return $this;
    }
    /**
     * City
     *
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }
    /**
     * City
     *
     * @param string $city
     *
     * @return self
     */
    public function setCity(string $city): self
    {
        $this->initialized['city'] = true;
        $this->city = $city;
        return $this;
    }
    /**
     * Region
     *
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }
    /**
     * Region
     *
     * @param string $region
     *
     * @return self
     */
    public function setRegion(string $region): self
    {
        $this->initialized['region'] = true;
        $this->region = $region;
        return $this;
    }
    /**
     * Postal code
     *
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }
    /**
     * Postal code
     *
     * @param string $postalCode
     *
     * @return self
     */
    public function setPostalCode(string $postalCode): self
    {
        $this->initialized['postalCode'] = true;
        $this->postalCode = $postalCode;
        return $this;
    }
    /**
     * Country (ISO2) code
     *
     * @return string
     */
    public function getCountryIso2Code(): string
    {
        return $this->countryIso2Code;
    }
    /**
     * Country (ISO2) code
     *
     * @param string $countryIso2Code
     *
     * @return self
     */
    public function setCountryIso2Code(string $countryIso2Code): self
    {
        $this->initialized['countryIso2Code'] = true;
        $this->countryIso2Code = $countryIso2Code;
        return $this;
    }
    /**
     * Timestamp billing address was created
     *
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }
    /**
     * Timestamp billing address was created
     *
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(string $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Timestamp billing address was updated
     *
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }
    /**
     * Timestamp billing address was updated
     *
     * @param string $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(string $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['addressLine1' => ['address_line1', 'getAddressLine1', 'setAddressLine1'], 'addressLine2' => ['address_line2', 'getAddressLine2', 'setAddressLine2'], 'city' => ['city', 'getCity', 'setCity'], 'region' => ['region', 'getRegion', 'setRegion'], 'postalCode' => ['postal_code', 'getPostalCode', 'setPostalCode'], 'countryIso2Code' => ['country_iso2_code', 'getCountryIso2Code', 'setCountryIso2Code'], 'createdAt' => ['created_at', 'getCreatedAt', 'setCreatedAt'], 'updatedAt' => ['updated_at', 'getUpdatedAt', 'setUpdatedAt']];
    }
}