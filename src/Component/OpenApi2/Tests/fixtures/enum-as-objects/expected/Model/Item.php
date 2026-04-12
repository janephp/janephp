<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Model;

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
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var ItemStatus
     */
    protected $status;
    /**
     * @var Priority
     */
    protected $priority;
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
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
     * @return ItemStatus
     */
    public function getStatus(): ItemStatus
    {
        return $this->status;
    }
    /**
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
     * @return Priority
     */
    public function getPriority(): Priority
    {
        return $this->priority;
    }
    /**
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