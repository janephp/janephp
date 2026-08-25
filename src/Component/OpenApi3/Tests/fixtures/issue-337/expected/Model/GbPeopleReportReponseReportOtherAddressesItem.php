<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbPeopleReportReponseReportOtherAddressesItem implements AdditionalPropertiesInterface
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
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $simpleValue;
    /**
     * @var string
     */
    protected $street;
    /**
     * @var string
     */
    protected $city;
    /**
     * @var string
     */
    protected $postalCode;
    /**
     * @var string
     */
    protected $province;
    /**
     * @var string
     */
    protected $country;
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * @return string
     */
    public function getSimpleValue(): string
    {
        return $this->simpleValue;
    }
    /**
     * @param string $simpleValue
     *
     * @return self
     */
    public function setSimpleValue(string $simpleValue): self
    {
        $this->initialized['simpleValue'] = true;
        $this->simpleValue = $simpleValue;
        return $this;
    }
    /**
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }
    /**
     * @param string $street
     *
     * @return self
     */
    public function setStreet(string $street): self
    {
        $this->initialized['street'] = true;
        $this->street = $street;
        return $this;
    }
    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }
    /**
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
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }
    /**
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
     * @return string
     */
    public function getProvince(): string
    {
        return $this->province;
    }
    /**
     * @param string $province
     *
     * @return self
     */
    public function setProvince(string $province): self
    {
        $this->initialized['province'] = true;
        $this->province = $province;
        return $this;
    }
    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }
    /**
     * @param string $country
     *
     * @return self
     */
    public function setCountry(string $country): self
    {
        $this->initialized['country'] = true;
        $this->country = $country;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['type' => ['type', 'getType', 'setType'], 'simpleValue' => ['simpleValue', 'getSimpleValue', 'setSimpleValue'], 'street' => ['street', 'getStreet', 'setStreet'], 'city' => ['city', 'getCity', 'setCity'], 'postalCode' => ['postalCode', 'getPostalCode', 'setPostalCode'], 'province' => ['province', 'getProvince', 'setProvince'], 'country' => ['country', 'getCountry', 'setCountry']];
    }
}