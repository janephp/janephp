<?php

namespace Jane\Generated\DigitalOcean\Model;

class EventsLogs extends \ArrayObject
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
     * ID of the particular event.
     *
     * @var string
     */
    protected $id;
    /**
     * The name of cluster.
     *
     * @var string
     */
    protected $clusterName;
    /**
     * Type of the event.
     *
     * @var string
     */
    protected $eventType;
    /**
     * The time of the generation of a event.
     *
     * @var string
     */
    protected $createTime;
    /**
     * ID of the particular event.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * ID of the particular event.
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
     * The name of cluster.
     *
     * @return string
     */
    public function getClusterName(): string
    {
        return $this->clusterName;
    }
    /**
     * The name of cluster.
     *
     * @param string $clusterName
     *
     * @return self
     */
    public function setClusterName(string $clusterName): self
    {
        $this->initialized['clusterName'] = true;
        $this->clusterName = $clusterName;
        return $this;
    }
    /**
     * Type of the event.
     *
     * @return string
     */
    public function getEventType(): string
    {
        return $this->eventType;
    }
    /**
     * Type of the event.
     *
     * @param string $eventType
     *
     * @return self
     */
    public function setEventType(string $eventType): self
    {
        $this->initialized['eventType'] = true;
        $this->eventType = $eventType;
        return $this;
    }
    /**
     * The time of the generation of a event.
     *
     * @return string
     */
    public function getCreateTime(): string
    {
        return $this->createTime;
    }
    /**
     * The time of the generation of a event.
     *
     * @param string $createTime
     *
     * @return self
     */
    public function setCreateTime(string $createTime): self
    {
        $this->initialized['createTime'] = true;
        $this->createTime = $createTime;
        return $this;
    }
}