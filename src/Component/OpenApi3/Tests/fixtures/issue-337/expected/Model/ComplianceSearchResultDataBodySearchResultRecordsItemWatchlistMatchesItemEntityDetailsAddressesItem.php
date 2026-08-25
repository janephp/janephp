<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAddressesItem implements AdditionalPropertiesInterface
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
    protected $city;
    /**
     * @var string
     */
    protected $country;
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $postalCode;
    /**
     * @var string
     */
    protected $street1;
    /**
     * @var string
     */
    protected $type;
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
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
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
    public function getStreet1(): string
    {
        return $this->street1;
    }
    /**
     * @param string $street1
     *
     * @return self
     */
    public function setStreet1(string $street1): self
    {
        $this->initialized['street1'] = true;
        $this->street1 = $street1;
        return $this;
    }
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
    public function definedProperties(): array
    {
        return ['city' => ['city', 'getCity', 'setCity'], 'country' => ['country', 'getCountry', 'setCountry'], 'id' => ['id', 'getId', 'setId'], 'postalCode' => ['postalCode', 'getPostalCode', 'setPostalCode'], 'street1' => ['street1', 'getStreet1', 'setStreet1'], 'type' => ['type', 'getType', 'setType']];
    }
}