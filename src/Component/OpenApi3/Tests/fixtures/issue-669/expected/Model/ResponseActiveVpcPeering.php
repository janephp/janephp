<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseActiveVpcPeering extends \ArrayObject
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
    protected $vpcPeering;
    /**
     * @return array<string, mixed>
     */
    public function getVpcPeering(): iterable
    {
        return $this->vpcPeering;
    }
    /**
     * @param array<string, mixed> $vpcPeering
     *
     * @return self
     */
    public function setVpcPeering(iterable $vpcPeering): self
    {
        $this->initialized['vpcPeering'] = true;
        $this->vpcPeering = $vpcPeering;
        return $this;
    }
}