<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseCreateFirewallResponse extends \ArrayObject
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
    protected $firewall;
    /**
     * @return array<string, mixed>
     */
    public function getFirewall(): iterable
    {
        return $this->firewall;
    }
    /**
     * @param array<string, mixed> $firewall
     *
     * @return self
     */
    public function setFirewall(iterable $firewall): self
    {
        $this->initialized['firewall'] = true;
        $this->firewall = $firewall;
        return $this;
    }
}