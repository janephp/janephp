<?php

namespace Docker\Api\Model;

class NodeSpec
{
    /**
     * Name for the node.
     *
     * @var string
     */
    protected $name;
    /**
     * User-defined key/value metadata.
     *
     * @var string[]
     */
    protected $labels;
    /**
     * Role of the node.
     *
     * @var string
     */
    protected $role;
    /**
     * Availability of the node.
     *
     * @var string
     */
    protected $availability;
    /**
     * Name for the node.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Name for the node.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * User-defined key/value metadata.
     *
     * @return string[]
     */
    public function getLabels() : iterable
    {
        return $this->labels;
    }
    /**
     * User-defined key/value metadata.
     *
     * @param string[] $labels
     *
     * @return self
     */
    public function setLabels(iterable $labels) : self
    {
        $this->labels = $labels;
        return $this;
    }
    /**
     * Role of the node.
     *
     * @return string
     */
    public function getRole() : string
    {
        return $this->role;
    }
    /**
     * Role of the node.
     *
     * @param string $role
     *
     * @return self
     */
    public function setRole(string $role) : self
    {
        $this->role = $role;
        return $this;
    }
    /**
     * Availability of the node.
     *
     * @return string
     */
    public function getAvailability() : string
    {
        return $this->availability;
    }
    /**
     * Availability of the node.
     *
     * @param string $availability
     *
     * @return self
     */
    public function setAvailability(string $availability) : self
    {
        $this->availability = $availability;
        return $this;
    }
}