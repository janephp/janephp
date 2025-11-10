<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CommonAltitude
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
     * altitude unit
     *
     * @var string
     */
    protected $altitudeUnit = 'meters';
    /**
     * altitude value
     *
     * @var int
     */
    protected $altitudeValue;
    /**
     * altitude unit
     *
     * @return string
     */
    public function getAltitudeUnit(): string
    {
        return $this->altitudeUnit;
    }
    /**
     * altitude unit
     *
     * @param string $altitudeUnit
     *
     * @return self
     */
    public function setAltitudeUnit(string $altitudeUnit): self
    {
        $this->initialized['altitudeUnit'] = true;
        $this->altitudeUnit = $altitudeUnit;
        return $this;
    }
    /**
     * altitude value
     *
     * @return int
     */
    public function getAltitudeValue(): int
    {
        return $this->altitudeValue;
    }
    /**
     * altitude value
     *
     * @param int $altitudeValue
     *
     * @return self
     */
    public function setAltitudeValue(int $altitudeValue): self
    {
        $this->initialized['altitudeValue'] = true;
        $this->altitudeValue = $altitudeValue;
        return $this;
    }
}