<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class CompletedFreshInvestigationSearchCriteriaAddress implements AdditionalPropertiesInterface
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
    protected $postcode;
    /**
     * @var string
     */
    protected $simple;
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
    public function definedProperties(): array
    {
        return ['city' => ['city', 'getCity', 'setCity'], 'postcode' => ['postcode', 'getPostcode', 'setPostcode'], 'simple' => ['simple', 'getSimple', 'setSimple']];
    }
}