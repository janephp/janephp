<?php

namespace Jane\Generated\DigitalOcean\Model;

class DropletNetworks extends \ArrayObject
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
     * @var list<NetworkV4>
     */
    protected $v4;
    /**
     * @var list<NetworkV6>
     */
    protected $v6;
    /**
     * @return list<NetworkV4>
     */
    public function getV4(): array
    {
        return $this->v4;
    }
    /**
     * @param list<NetworkV4> $v4
     *
     * @return self
     */
    public function setV4(array $v4): self
    {
        $this->initialized['v4'] = true;
        $this->v4 = $v4;
        return $this;
    }
    /**
     * @return list<NetworkV6>
     */
    public function getV6(): array
    {
        return $this->v6;
    }
    /**
     * @param list<NetworkV6> $v6
     *
     * @return self
     */
    public function setV6(array $v6): self
    {
        $this->initialized['v6'] = true;
        $this->v6 = $v6;
        return $this;
    }
}