<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportNegativeInformationCcjSummary implements AdditionalPropertiesInterface
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
     * @var float
     */
    protected $exactRegistered;
    /**
     * @var float
     */
    protected $possibleRegistered;
    /**
     * @return float
     */
    public function getExactRegistered(): float
    {
        return $this->exactRegistered;
    }
    /**
     * @param float $exactRegistered
     *
     * @return self
     */
    public function setExactRegistered(float $exactRegistered): self
    {
        $this->initialized['exactRegistered'] = true;
        $this->exactRegistered = $exactRegistered;
        return $this;
    }
    /**
     * @return float
     */
    public function getPossibleRegistered(): float
    {
        return $this->possibleRegistered;
    }
    /**
     * @param float $possibleRegistered
     *
     * @return self
     */
    public function setPossibleRegistered(float $possibleRegistered): self
    {
        $this->initialized['possibleRegistered'] = true;
        $this->possibleRegistered = $possibleRegistered;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['exactRegistered' => ['exactRegistered', 'getExactRegistered', 'setExactRegistered'], 'possibleRegistered' => ['possibleRegistered', 'getPossibleRegistered', 'setPossibleRegistered']];
    }
}