<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class IndoorMapScale
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var IndoorMapIndoorMapXy
     */
    protected $a;
    /**
     * @var IndoorMapIndoorMapXy
     */
    protected $b;
    /**
     * distance
     *
     * @var float
     */
    protected $distance;
    /**
     * unit
     *
     * @var string
     */
    protected $unit;
    /**
     * @return IndoorMapIndoorMapXy
     */
    public function getA(): IndoorMapIndoorMapXy
    {
        return $this->a;
    }
    /**
     * @param IndoorMapIndoorMapXy $a
     *
     * @return self
     */
    public function setA(IndoorMapIndoorMapXy $a): self
    {
        $this->initialized['a'] = true;
        $this->a = $a;
        return $this;
    }
    /**
     * @return IndoorMapIndoorMapXy
     */
    public function getB(): IndoorMapIndoorMapXy
    {
        return $this->b;
    }
    /**
     * @param IndoorMapIndoorMapXy $b
     *
     * @return self
     */
    public function setB(IndoorMapIndoorMapXy $b): self
    {
        $this->initialized['b'] = true;
        $this->b = $b;
        return $this;
    }
    /**
     * distance
     *
     * @return float
     */
    public function getDistance(): float
    {
        return $this->distance;
    }
    /**
     * distance
     *
     * @param float $distance
     *
     * @return self
     */
    public function setDistance(float $distance): self
    {
        $this->initialized['distance'] = true;
        $this->distance = $distance;
        return $this;
    }
    /**
     * unit
     *
     * @return string
     */
    public function getUnit(): string
    {
        return $this->unit;
    }
    /**
     * unit
     *
     * @param string $unit
     *
     * @return self
     */
    public function setUnit(string $unit): self
    {
        $this->initialized['unit'] = true;
        $this->unit = $unit;
        return $this;
    }
}