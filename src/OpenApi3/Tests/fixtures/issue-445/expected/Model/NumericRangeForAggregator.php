<?php

namespace PicturePark\API\Model;

class NumericRangeForAggregator
{
    /**
     * Language specific range names.
     *
     * @var mixed|null
     */
    protected $names;
    /**
     * The from value.
     *
     * @var float|null
     */
    protected $from;
    /**
     * The to value.
     *
     * @var float|null
     */
    protected $to;
    /**
     * Language specific range names.
     *
     * @return mixed
     */
    public function getNames()
    {
        return $this->names;
    }
    /**
     * Language specific range names.
     *
     * @param mixed $names
     *
     * @return self
     */
    public function setNames($names) : self
    {
        $this->names = $names;
        return $this;
    }
    /**
     * The from value.
     *
     * @return float|null
     */
    public function getFrom() : ?float
    {
        return $this->from;
    }
    /**
     * The from value.
     *
     * @param float|null $from
     *
     * @return self
     */
    public function setFrom(?float $from) : self
    {
        $this->from = $from;
        return $this;
    }
    /**
     * The to value.
     *
     * @return float|null
     */
    public function getTo() : ?float
    {
        return $this->to;
    }
    /**
     * The to value.
     *
     * @param float|null $to
     *
     * @return self
     */
    public function setTo(?float $to) : self
    {
        $this->to = $to;
        return $this;
    }
}