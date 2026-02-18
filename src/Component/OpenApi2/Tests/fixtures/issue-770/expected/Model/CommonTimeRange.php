<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CommonTimeRange
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
     * start time for collecting data
     *
     * @var int
     */
    protected $start;
    /**
     * end time for collecting data
     *
     * @var int
     */
    protected $end;
    /**
     * time interval in second
     *
     * @var int
     */
    protected $interval;
    /**
     * time field for collecting data
     *
     * @var string
     */
    protected $field;
    /**
     * start time for collecting data
     *
     * @return int
     */
    public function getStart(): int
    {
        return $this->start;
    }
    /**
     * start time for collecting data
     *
     * @param int $start
     *
     * @return self
     */
    public function setStart(int $start): self
    {
        $this->initialized['start'] = true;
        $this->start = $start;
        return $this;
    }
    /**
     * end time for collecting data
     *
     * @return int
     */
    public function getEnd(): int
    {
        return $this->end;
    }
    /**
     * end time for collecting data
     *
     * @param int $end
     *
     * @return self
     */
    public function setEnd(int $end): self
    {
        $this->initialized['end'] = true;
        $this->end = $end;
        return $this;
    }
    /**
     * time interval in second
     *
     * @return int
     */
    public function getInterval(): int
    {
        return $this->interval;
    }
    /**
     * time interval in second
     *
     * @param int $interval
     *
     * @return self
     */
    public function setInterval(int $interval): self
    {
        $this->initialized['interval'] = true;
        $this->interval = $interval;
        return $this;
    }
    /**
     * time field for collecting data
     *
     * @return string
     */
    public function getField(): string
    {
        return $this->field;
    }
    /**
     * time field for collecting data
     *
     * @param string $field
     *
     * @return self
     */
    public function setField(string $field): self
    {
        $this->initialized['field'] = true;
        $this->field = $field;
        return $this;
    }
}