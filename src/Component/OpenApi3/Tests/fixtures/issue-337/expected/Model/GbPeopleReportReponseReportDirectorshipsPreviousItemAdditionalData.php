<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbPeopleReportReponseReportDirectorshipsPreviousItemAdditionalData implements AdditionalPropertiesInterface
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
    protected $occupation;
    /**
     * @var string
     */
    protected $statusDescription;
    /**
     * @var float
     */
    protected $gearing;
    /**
     * @return string
     */
    public function getOccupation(): string
    {
        return $this->occupation;
    }
    /**
     * @param string $occupation
     *
     * @return self
     */
    public function setOccupation(string $occupation): self
    {
        $this->initialized['occupation'] = true;
        $this->occupation = $occupation;
        return $this;
    }
    /**
     * @return string
     */
    public function getStatusDescription(): string
    {
        return $this->statusDescription;
    }
    /**
     * @param string $statusDescription
     *
     * @return self
     */
    public function setStatusDescription(string $statusDescription): self
    {
        $this->initialized['statusDescription'] = true;
        $this->statusDescription = $statusDescription;
        return $this;
    }
    /**
     * @return float
     */
    public function getGearing(): float
    {
        return $this->gearing;
    }
    /**
     * @param float $gearing
     *
     * @return self
     */
    public function setGearing(float $gearing): self
    {
        $this->initialized['gearing'] = true;
        $this->gearing = $gearing;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['occupation' => ['occupation', 'getOccupation', 'setOccupation'], 'statusDescription' => ['statusDescription', 'getStatusDescription', 'setStatusDescription'], 'gearing' => ['gearing', 'getGearing', 'setGearing']];
    }
}