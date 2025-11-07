<?php

namespace Jane\Generated\DigitalOcean\Model;

class VpcPeeringUpdatable extends \ArrayObject
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
     * The name of the VPC peering. Must be unique within the team and may only contain alphanumeric characters and dashes.
     *
     * @var string
     */
    protected $name;
    /**
     * The name of the VPC peering. Must be unique within the team and may only contain alphanumeric characters and dashes.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The name of the VPC peering. Must be unique within the team and may only contain alphanumeric characters and dashes.
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
}