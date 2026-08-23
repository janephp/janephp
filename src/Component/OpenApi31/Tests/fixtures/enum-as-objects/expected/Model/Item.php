<?php

namespace Jane\Component\OpenApi31\Tests\EnumAsObjects\Model;

class Item
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
     * The status of an item
     *
     * @var ItemStatus
     */
    protected $status;
    /**
     * The priority level of an item
     *
     * @var Priority
     */
    protected $priority;
    /**
     * The status of an item
     *
     * @return ItemStatus
     */
    public function getStatus(): ItemStatus
    {
        return $this->status;
    }
    /**
     * The status of an item
     *
     * @param ItemStatus $status
     *
     * @return self
     */
    public function setStatus(ItemStatus $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * The priority level of an item
     *
     * @return Priority
     */
    public function getPriority(): Priority
    {
        return $this->priority;
    }
    /**
     * The priority level of an item
     *
     * @param Priority $priority
     *
     * @return self
     */
    public function setPriority(Priority $priority): self
    {
        $this->initialized['priority'] = true;
        $this->priority = $priority;
        return $this;
    }
}