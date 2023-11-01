<?php

namespace PicturePark\API\Model;

class FieldDictionaryArray extends FieldBase
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