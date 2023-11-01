<?php

namespace PicturePark\API\Model;

class FieldDate extends FieldBase
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
     * The date format structure.
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
     * The date format structure.
     *
     * @return string|null
     */
    public function getFormat() : ?string
    {
        return $this->format;
    }
    /**
     * The date format structure.
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
}