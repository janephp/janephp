<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class CreateFreshInvestigationRequestSearchCriteriaAddress implements AdditionalPropertiesInterface
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
    protected $simple;
    /**
     * @var string
     */
    protected $postcode;
    /**
     * @var string
     */
    protected $city;
    /**
     * @return string
     */
    public function getSimple(): string
    {
        return $this->simple;
    }
    /**
     * @param string $simple
     *
     * @return self
     */
    public function setSimple(string $simple): self
    {
        $this->initialized['simple'] = true;
        $this->simple = $simple;
        return $this;
    }
    /**
     * @return string
     */
    public function getPostcode(): string
    {
        return $this->postcode;
    }
    /**
     * @param string $postcode
     *
     * @return self
     */
    public function setPostcode(string $postcode): self
    {
        $this->initialized['postcode'] = true;
        $this->postcode = $postcode;
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
    public function definedProperties(): array
    {
        return ['simple' => ['simple', 'getSimple', 'setSimple'], 'postcode' => ['postcode', 'getPostcode', 'setPostcode'], 'city' => ['city', 'getCity', 'setCity']];
    }
}