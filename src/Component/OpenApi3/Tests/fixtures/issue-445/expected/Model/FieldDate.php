<?php

namespace PicturePark\API\Model;

class FieldDate extends FieldBase
{
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
}