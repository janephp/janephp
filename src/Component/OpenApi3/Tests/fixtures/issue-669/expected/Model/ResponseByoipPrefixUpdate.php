<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseByoipPrefixUpdate extends \ArrayObject
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
     * @var ByoipPrefix
     */
    protected $byoipPrefix;
    /**
     * @return ByoipPrefix
     */
    public function getByoipPrefix(): ByoipPrefix
    {
        return $this->byoipPrefix;
    }
    /**
     * @param ByoipPrefix $byoipPrefix
     *
     * @return self
     */
    public function setByoipPrefix(ByoipPrefix $byoipPrefix): self
    {
        $this->initialized['byoipPrefix'] = true;
        $this->byoipPrefix = $byoipPrefix;
        return $this;
    }
}