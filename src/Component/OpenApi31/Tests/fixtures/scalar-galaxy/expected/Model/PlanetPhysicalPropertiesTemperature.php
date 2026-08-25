<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class PlanetPhysicalPropertiesTemperature implements AdditionalPropertiesInterface
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
     * Minimum temperature in Kelvin
     *
     * @var float
     */
    protected $min;
    /**
     * Maximum temperature in Kelvin
     *
     * @var float
     */
    protected $max;
    /**
     * Average temperature in Kelvin
     *
     * @var float
     */
    protected $average;
    /**
     * Minimum temperature in Kelvin
     *
     * @return float
     */
    public function getMin(): float
    {
        return $this->min;
    }
    /**
     * Minimum temperature in Kelvin
     *
     * @param float $min
     *
     * @return self
     */
    public function setMin(float $min): self
    {
        $this->initialized['min'] = true;
        $this->min = $min;
        return $this;
    }
    /**
     * Maximum temperature in Kelvin
     *
     * @return float
     */
    public function getMax(): float
    {
        return $this->max;
    }
    /**
     * Maximum temperature in Kelvin
     *
     * @param float $max
     *
     * @return self
     */
    public function setMax(float $max): self
    {
        $this->initialized['max'] = true;
        $this->max = $max;
        return $this;
    }
    /**
     * Average temperature in Kelvin
     *
     * @return float
     */
    public function getAverage(): float
    {
        return $this->average;
    }
    /**
     * Average temperature in Kelvin
     *
     * @param float $average
     *
     * @return self
     */
    public function setAverage(float $average): self
    {
        $this->initialized['average'] = true;
        $this->average = $average;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['min' => ['min', 'getMin', 'setMin'], 'max' => ['max', 'getMax', 'setMax'], 'average' => ['average', 'getAverage', 'setAverage']];
    }
}