<?php

namespace PicturePark\API\Model;

class DateRangeForAggregator
{
    /**
     * Language specific range names.
     *
     * @var mixed|null
     */
    protected $names;
    /**
     * The from value: it can be a datetime string or a pattern now(+-)(int)(YMDHm).
     *
     * @var string|null
     */
    protected $from;
    /**
     * The to value: it can be a datetime string or a pattern now(+-)(int)(YMDHm).
     *
     * @var string|null
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
     * The from value: it can be a datetime string or a pattern now(+-)(int)(YMDHm).
     *
     * @return string|null
     */
    public function getFrom() : ?string
    {
        return $this->from;
    }
    /**
     * The from value: it can be a datetime string or a pattern now(+-)(int)(YMDHm).
     *
     * @param string|null $from
     *
     * @return self
     */
    public function setFrom(?string $from) : self
    {
        $this->from = $from;
        return $this;
    }
    /**
     * The to value: it can be a datetime string or a pattern now(+-)(int)(YMDHm).
     *
     * @return string|null
     */
    public function getTo() : ?string
    {
        return $this->to;
    }
    /**
     * The to value: it can be a datetime string or a pattern now(+-)(int)(YMDHm).
     *
     * @param string|null $to
     *
     * @return self
     */
    public function setTo(?string $to) : self
    {
        $this->to = $to;
        return $this;
    }
}