<?php

namespace PicturePark\API\Model;

class FieldDateTime extends FieldBase
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
        $this->initialized['format'] = true;
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
        $this->initialized['boost'] = true;
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
        $this->initialized['initializeOnItemCreation'] = true;
        $this->initializeOnItemCreation = $initializeOnItemCreation;
        return $this;
    }
}