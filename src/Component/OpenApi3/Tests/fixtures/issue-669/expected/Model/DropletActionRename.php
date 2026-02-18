<?php

namespace Jane\Generated\DigitalOcean\Model;

class DropletActionRename extends \ArrayObject
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
     * The type of action to initiate for the Droplet.
     *
     * @var string
     */
    protected $type;
    /**
     * The new name for the Droplet.
     *
     * @var string
     */
    protected $name;
    /**
     * The type of action to initiate for the Droplet.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * The type of action to initiate for the Droplet.
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
     * The new name for the Droplet.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The new name for the Droplet.
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