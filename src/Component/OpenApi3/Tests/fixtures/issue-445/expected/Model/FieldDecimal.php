<?php

namespace PicturePark\API\Model;

class FieldDecimal extends FieldBase
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The decimal pattern structure.
     *
     * @var string|null
     */
    protected $pattern;
    /**
     * The minimum possible value.
     *
     * @var float|null
     */
    protected $minimum;
    /**
     * The maximum possible value.
     *
     * @var float|null
     */
    protected $maximum;
    /**
     * Value to prioritize search results. Set to 1 by default. Ignored if SimpleSearch not set to true.
     *
     * @var float
     */
    protected $boost = 1;
    /**
     * The decimal pattern structure.
     *
     * @return string|null
     */
    public function getPattern() : ?string
    {
        return $this->pattern;
    }
    /**
     * The decimal pattern structure.
     *
     * @param string|null $pattern
     *
     * @return self
     */
    public function setPattern(?string $pattern) : self
    {
        $this->initialized['pattern'] = true;
        $this->pattern = $pattern;
        return $this;
    }
    /**
     * The minimum possible value.
     *
     * @return float|null
     */
    public function getMinimum() : ?float
    {
        return $this->minimum;
    }
    /**
     * The minimum possible value.
     *
     * @param float|null $minimum
     *
     * @return self
     */
    public function setMinimum(?float $minimum) : self
    {
        $this->initialized['minimum'] = true;
        $this->minimum = $minimum;
        return $this;
    }
    /**
     * The maximum possible value.
     *
     * @return float|null
     */
    public function getMaximum() : ?float
    {
        return $this->maximum;
    }
    /**
     * The maximum possible value.
     *
     * @param float|null $maximum
     *
     * @return self
     */
    public function setMaximum(?float $maximum) : self
    {
        $this->initialized['maximum'] = true;
        $this->maximum = $maximum;
        return $this;
    }
    /**
     * Value to prioritize search results. Set to 1 by default. Ignored if SimpleSearch not set to true.
     *
     * @return float
     */
    public function getBoost() : float
    {
        return $this->boost;
    }
    /**
     * Value to prioritize search results. Set to 1 by default. Ignored if SimpleSearch not set to true.
     *
     * @param float $boost
     *
     * @return self
     */
    public function setBoost(float $boost) : self
    {
        $this->initialized['boost'] = true;
        $this->boost = $boost;
        return $this;
    }
}