<?php

namespace Jane\Generated\DigitalOcean\Model;

class DatabaseLayoutOption extends \ArrayObject
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
    protected $numNodes;
    /**
     * An array of objects containing the slugs available with various node counts
     *
     * @var list<string>
     */
    protected $sizes;
    /**
     * @return int
     */
    public function getNumNodes(): int
    {
        return $this->numNodes;
    }
    /**
     * @param int $numNodes
     *
     * @return self
     */
    public function setNumNodes(int $numNodes): self
    {
        $this->initialized['numNodes'] = true;
        $this->numNodes = $numNodes;
        return $this;
    }
    /**
     * An array of objects containing the slugs available with various node counts
     *
     * @return list<string>
     */
    public function getSizes(): array
    {
        return $this->sizes;
    }
    /**
     * An array of objects containing the slugs available with various node counts
     *
     * @param list<string> $sizes
     *
     * @return self
     */
    public function setSizes(array $sizes): self
    {
        $this->initialized['sizes'] = true;
        $this->sizes = $sizes;
        return $this;
    }
}