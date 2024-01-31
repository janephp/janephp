<?php

namespace Docker\Api\Model;

class NodeSpec
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Name for the node.
     *
     * @var string
     */
    protected $name;
    /**
     * User-defined key/value metadata.
     *
     * @var array<string, string>
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
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * User-defined key/value metadata.
     *
     * @return array<string, string>
     */
    public function getLabels() : iterable
    {
        return $this->labels;
    }
    /**
     * User-defined key/value metadata.
     *
     * @param array<string, string> $labels
     *
     * @return self
     */
    public function setLabels(iterable $labels) : self
    {
        $this->initialized['labels'] = true;
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
        $this->initialized['role'] = true;
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
        $this->initialized['availability'] = true;
        $this->availability = $availability;
        return $this;
    }
}