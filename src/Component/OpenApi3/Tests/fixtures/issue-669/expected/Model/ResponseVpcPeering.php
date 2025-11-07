<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseVpcPeering extends \ArrayObject
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
     * @var array<string, mixed>
     */
    protected $peering;
    /**
     * @return array<string, mixed>
     */
    public function getPeering(): iterable
    {
        return $this->peering;
    }
    /**
     * @param array<string, mixed> $peering
     *
     * @return self
     */
    public function setPeering(iterable $peering): self
    {
        $this->initialized['peering'] = true;
        $this->peering = $peering;
        return $this;
    }
}