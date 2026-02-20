<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

class MuseumDailyHours
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
     * @var \DateTime
     */
    protected $date;
    /**
     * Time the museum opens on a specific date. Uses 24 hour time format (`HH:mm`).
     *
     * @var string
     */
    protected $timeOpen;
    /**
     * Time the museum closes on a specific date. Uses 24 hour time format (`HH:mm`).
     *
     * @var string
     */
    protected $timeClose;
    /**
     * @return \DateTime
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }
    /**
     * @param \DateTime $date
     *
     * @return self
     */
    public function setDate(\DateTime $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;
        return $this;
    }
    /**
     * Time the museum opens on a specific date. Uses 24 hour time format (`HH:mm`).
     *
     * @return string
     */
    public function getTimeOpen(): string
    {
        return $this->timeOpen;
    }
    /**
     * Time the museum opens on a specific date. Uses 24 hour time format (`HH:mm`).
     *
     * @param string $timeOpen
     *
     * @return self
     */
    public function setTimeOpen(string $timeOpen): self
    {
        $this->initialized['timeOpen'] = true;
        $this->timeOpen = $timeOpen;
        return $this;
    }
    /**
     * Time the museum closes on a specific date. Uses 24 hour time format (`HH:mm`).
     *
     * @return string
     */
    public function getTimeClose(): string
    {
        return $this->timeClose;
    }
    /**
     * Time the museum closes on a specific date. Uses 24 hour time format (`HH:mm`).
     *
     * @param string $timeClose
     *
     * @return self
     */
    public function setTimeClose(string $timeClose): self
    {
        $this->initialized['timeClose'] = true;
        $this->timeClose = $timeClose;
        return $this;
    }
}