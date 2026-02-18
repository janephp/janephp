<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ZoneBandBalancing
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
     * Percentage of client load on 2.4GHz radio band
     *
     * @var int
     */
    protected $wifi24Percentage = 25;
    /**
     * Percentage of client load on 2.4GHz radio band
     *
     * @return int
     */
    public function getWifi24Percentage(): int
    {
        return $this->wifi24Percentage;
    }
    /**
     * Percentage of client load on 2.4GHz radio band
     *
     * @param int $wifi24Percentage
     *
     * @return self
     */
    public function setWifi24Percentage(int $wifi24Percentage): self
    {
        $this->initialized['wifi24Percentage'] = true;
        $this->wifi24Percentage = $wifi24Percentage;
        return $this;
    }
}