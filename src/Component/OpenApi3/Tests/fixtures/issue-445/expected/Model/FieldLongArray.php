<?php

namespace PicturePark\API\Model;

class FieldLongArray extends FieldBase
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The long pattern structure.
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
     * The maximum number of items that can be stored.
     *
     * @var int|null
     */
    protected $maximumItems;
    /**
     * The minimum number of items that must be stored.
     *
     * @var int|null
     */
    protected $minimumItems;
    /**
     * The long pattern structure.
     *
     * @return string|null
     */
    public function getPattern() : ?string
    {
        return $this->pattern;
    }
    /**
     * The long pattern structure.
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
    /**
     * The maximum number of items that can be stored.
     *
     * @return int|null
     */
    public function getMaximumItems() : ?int
    {
        return $this->maximumItems;
    }
    /**
     * The maximum number of items that can be stored.
     *
     * @param int|null $maximumItems
     *
     * @return self
     */
    public function setMaximumItems(?int $maximumItems) : self
    {
        $this->initialized['maximumItems'] = true;
        $this->maximumItems = $maximumItems;
        return $this;
    }
    /**
     * The minimum number of items that must be stored.
     *
     * @return int|null
     */
    public function getMinimumItems() : ?int
    {
        return $this->minimumItems;
    }
    /**
     * The minimum number of items that must be stored.
     *
     * @param int|null $minimumItems
     *
     * @return self
     */
    public function setMinimumItems(?int $minimumItems) : self
    {
        $this->initialized['minimumItems'] = true;
        $this->minimumItems = $minimumItems;
        return $this;
    }
}