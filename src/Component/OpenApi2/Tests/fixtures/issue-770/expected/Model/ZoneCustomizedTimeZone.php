<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ZoneCustomizedTimeZone
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
     * Time zone abbreviation
     *
     * @var string
     */
    protected $abbreviation;
    /**
     * GMT offset
     *
     * @var int
     */
    protected $gmtOffset;
    /**
     * GMT offset minute
     *
     * @var int
     */
    protected $gmtOffsetMinute;
    /**
     * @var ZoneDaylightSavingTime
     */
    protected $start;
    /**
     * @var ZoneDaylightSavingTime
     */
    protected $end;
    /**
     * Time zone abbreviation
     *
     * @return string
     */
    public function getAbbreviation(): string
    {
        return $this->abbreviation;
    }
    /**
     * Time zone abbreviation
     *
     * @param string $abbreviation
     *
     * @return self
     */
    public function setAbbreviation(string $abbreviation): self
    {
        $this->initialized['abbreviation'] = true;
        $this->abbreviation = $abbreviation;
        return $this;
    }
    /**
     * GMT offset
     *
     * @return int
     */
    public function getGmtOffset(): int
    {
        return $this->gmtOffset;
    }
    /**
     * GMT offset
     *
     * @param int $gmtOffset
     *
     * @return self
     */
    public function setGmtOffset(int $gmtOffset): self
    {
        $this->initialized['gmtOffset'] = true;
        $this->gmtOffset = $gmtOffset;
        return $this;
    }
    /**
     * GMT offset minute
     *
     * @return int
     */
    public function getGmtOffsetMinute(): int
    {
        return $this->gmtOffsetMinute;
    }
    /**
     * GMT offset minute
     *
     * @param int $gmtOffsetMinute
     *
     * @return self
     */
    public function setGmtOffsetMinute(int $gmtOffsetMinute): self
    {
        $this->initialized['gmtOffsetMinute'] = true;
        $this->gmtOffsetMinute = $gmtOffsetMinute;
        return $this;
    }
    /**
     * @return ZoneDaylightSavingTime
     */
    public function getStart(): ZoneDaylightSavingTime
    {
        return $this->start;
    }
    /**
     * @param ZoneDaylightSavingTime $start
     *
     * @return self
     */
    public function setStart(ZoneDaylightSavingTime $start): self
    {
        $this->initialized['start'] = true;
        $this->start = $start;
        return $this;
    }
    /**
     * @return ZoneDaylightSavingTime
     */
    public function getEnd(): ZoneDaylightSavingTime
    {
        return $this->end;
    }
    /**
     * @param ZoneDaylightSavingTime $end
     *
     * @return self
     */
    public function setEnd(ZoneDaylightSavingTime $end): self
    {
        $this->initialized['end'] = true;
        $this->end = $end;
        return $this;
    }
}