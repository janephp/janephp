<?php

namespace Jane\Generated\DigitalOcean\Model;

class DatabaseClusterReadMaintenanceWindow extends \ArrayObject
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
     * The day of the week on which to apply maintenance updates.
     *
     * @var string
     */
    protected $day;
    /**
     * The hour in UTC at which maintenance updates will be applied in 24 hour format.
     *
     * @var string
     */
    protected $hour;
    /**
     * A boolean value indicating whether any maintenance is scheduled to be performed in the next window.
     *
     * @var bool
     */
    protected $pending;
    /**
     * A list of strings, each containing information about a pending maintenance update.
     *
     * @var list<string>
     */
    protected $description;
    /**
     * The day of the week on which to apply maintenance updates.
     *
     * @return string
     */
    public function getDay(): string
    {
        return $this->day;
    }
    /**
     * The day of the week on which to apply maintenance updates.
     *
     * @param string $day
     *
     * @return self
     */
    public function setDay(string $day): self
    {
        $this->initialized['day'] = true;
        $this->day = $day;
        return $this;
    }
    /**
     * The hour in UTC at which maintenance updates will be applied in 24 hour format.
     *
     * @return string
     */
    public function getHour(): string
    {
        return $this->hour;
    }
    /**
     * The hour in UTC at which maintenance updates will be applied in 24 hour format.
     *
     * @param string $hour
     *
     * @return self
     */
    public function setHour(string $hour): self
    {
        $this->initialized['hour'] = true;
        $this->hour = $hour;
        return $this;
    }
    /**
     * A boolean value indicating whether any maintenance is scheduled to be performed in the next window.
     *
     * @return bool
     */
    public function getPending(): bool
    {
        return $this->pending;
    }
    /**
     * A boolean value indicating whether any maintenance is scheduled to be performed in the next window.
     *
     * @param bool $pending
     *
     * @return self
     */
    public function setPending(bool $pending): self
    {
        $this->initialized['pending'] = true;
        $this->pending = $pending;
        return $this;
    }
    /**
     * A list of strings, each containing information about a pending maintenance update.
     *
     * @return list<string>
     */
    public function getDescription(): array
    {
        return $this->description;
    }
    /**
     * A list of strings, each containing information about a pending maintenance update.
     *
     * @param list<string> $description
     *
     * @return self
     */
    public function setDescription(array $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
}