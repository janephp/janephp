<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiGetChildrenOutput extends \ArrayObject
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
     * Child agents
     *
     * @var list<ApiAgent>
     */
    protected $children;
    /**
     * Child agents
     *
     * @return list<ApiAgent>
     */
    public function getChildren(): array
    {
        return $this->children;
    }
    /**
     * Child agents
     *
     * @param list<ApiAgent> $children
     *
     * @return self
     */
    public function setChildren(array $children): self
    {
        $this->initialized['children'] = true;
        $this->children = $children;
        return $this;
    }
}