<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseExistingDroplet extends \ArrayObject
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
     * @var Droplet
     */
    protected $droplet;
    /**
     * @return Droplet
     */
    public function getDroplet(): Droplet
    {
        return $this->droplet;
    }
    /**
     * @param Droplet $droplet
     *
     * @return self
     */
    public function setDroplet(Droplet $droplet): self
    {
        $this->initialized['droplet'] = true;
        $this->droplet = $droplet;
        return $this;
    }
}