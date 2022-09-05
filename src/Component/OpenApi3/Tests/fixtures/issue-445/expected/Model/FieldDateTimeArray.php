<?php

namespace PicturePark\API\Model;

class FieldDateTimeArray extends FieldBase
{
    /**
     * The date time format structure.
     *
     * @var string|null
     */
    protected $format;
    /**
     * Value to prioritize search results. Set to 1 by default. Ignored if SimpleSearch not set to true.
     *
     * @var float
     */
    protected $boost = 1;
    /**
     * If set to true, the date time value is automatically set when a content or list item is created.
     *
     * @var bool
     */
    protected $initializeOnItemCreation = false;
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
     * The date time format structure.
     *
     * @return string|null
     */
    public function getFormat() : ?string
    {
        return $this->format;
    }
    /**
     * The date time format structure.
     *
     * @param string|null $format
     *
     * @return self
     */
    public function setFormat(?string $format) : self
    {
        $this->format = $format;
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
        $this->boost = $boost;
        return $this;
    }
    /**
     * If set to true, the date time value is automatically set when a content or list item is created.
     *
     * @return bool
     */
    public function getInitializeOnItemCreation() : bool
    {
        return $this->initializeOnItemCreation;
    }
    /**
     * If set to true, the date time value is automatically set when a content or list item is created.
     *
     * @param bool $initializeOnItemCreation
     *
     * @return self
     */
    public function setInitializeOnItemCreation(bool $initializeOnItemCreation) : self
    {
        $this->initializeOnItemCreation = $initializeOnItemCreation;
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
        $this->minimumItems = $minimumItems;
        return $this;
    }
}