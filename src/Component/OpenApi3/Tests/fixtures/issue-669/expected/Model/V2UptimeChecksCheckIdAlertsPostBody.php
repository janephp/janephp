<?php

namespace Jane\Generated\DigitalOcean\Model;

class V2UptimeChecksCheckIdAlertsPostBody extends \ArrayObject
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
     * A unique ID that can be used to identify and reference the alert.
     *
     * @var string
     */
    protected $id;
    /**
     * A human-friendly display name.
     *
     * @var string
     */
    protected $name;
    /**
     * The type of alert.
     *
     * @var string
     */
    protected $type;
    /**
     * The threshold at which the alert will enter a trigger state. The specific threshold is dependent on the alert type.
     *
     * @var int
     */
    protected $threshold;
    /**
     * The comparison operator used against the alert's threshold.
     *
     * @var string
     */
    protected $comparison;
    /**
     * The notification settings for a trigger alert.
     *
     * @var Notification
     */
    protected $notifications;
    /**
     * Period of time the threshold must be exceeded to trigger the alert.
     *
     * @var string
     */
    protected $period;
    /**
     * A unique ID that can be used to identify and reference the alert.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * A unique ID that can be used to identify and reference the alert.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * A human-friendly display name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * A human-friendly display name.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * The type of alert.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * The type of alert.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * The threshold at which the alert will enter a trigger state. The specific threshold is dependent on the alert type.
     *
     * @return int
     */
    public function getThreshold(): int
    {
        return $this->threshold;
    }
    /**
     * The threshold at which the alert will enter a trigger state. The specific threshold is dependent on the alert type.
     *
     * @param int $threshold
     *
     * @return self
     */
    public function setThreshold(int $threshold): self
    {
        $this->initialized['threshold'] = true;
        $this->threshold = $threshold;
        return $this;
    }
    /**
     * The comparison operator used against the alert's threshold.
     *
     * @return string
     */
    public function getComparison(): string
    {
        return $this->comparison;
    }
    /**
     * The comparison operator used against the alert's threshold.
     *
     * @param string $comparison
     *
     * @return self
     */
    public function setComparison(string $comparison): self
    {
        $this->initialized['comparison'] = true;
        $this->comparison = $comparison;
        return $this;
    }
    /**
     * The notification settings for a trigger alert.
     *
     * @return Notification
     */
    public function getNotifications(): Notification
    {
        return $this->notifications;
    }
    /**
     * The notification settings for a trigger alert.
     *
     * @param Notification $notifications
     *
     * @return self
     */
    public function setNotifications(Notification $notifications): self
    {
        $this->initialized['notifications'] = true;
        $this->notifications = $notifications;
        return $this;
    }
    /**
     * Period of time the threshold must be exceeded to trigger the alert.
     *
     * @return string
     */
    public function getPeriod(): string
    {
        return $this->period;
    }
    /**
     * Period of time the threshold must be exceeded to trigger the alert.
     *
     * @param string $period
     *
     * @return self
     */
    public function setPeriod(string $period): self
    {
        $this->initialized['period'] = true;
        $this->period = $period;
        return $this;
    }
}