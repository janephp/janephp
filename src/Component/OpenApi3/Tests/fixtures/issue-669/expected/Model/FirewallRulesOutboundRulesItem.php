<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class FirewallRulesOutboundRulesItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The type of traffic to be allowed. This may be one of `tcp`, `udp`, or `icmp`.
     *
     * @var string
     */
    protected $protocol;
    /**
     * The ports on which traffic will be allowed specified as a string containing a single port, a range (e.g. "8000-9000"), or "0" when all ports are open for a protocol. For ICMP rules this parameter will always return "0".
     *
     * @var string
     */
    protected $ports;
    /**
     * @var FirewallRulesOutboundRulesItemDestinations
     */
    protected $destinations;
    /**
     * The type of traffic to be allowed. This may be one of `tcp`, `udp`, or `icmp`.
     *
     * @return string
     */
    public function getProtocol(): string
    {
        return $this->protocol;
    }
    /**
     * The type of traffic to be allowed. This may be one of `tcp`, `udp`, or `icmp`.
     *
     * @param string $protocol
     *
     * @return self
     */
    public function setProtocol(string $protocol): self
    {
        $this->initialized['protocol'] = true;
        $this->protocol = $protocol;
        return $this;
    }
    /**
     * The ports on which traffic will be allowed specified as a string containing a single port, a range (e.g. "8000-9000"), or "0" when all ports are open for a protocol. For ICMP rules this parameter will always return "0".
     *
     * @return string
     */
    public function getPorts(): string
    {
        return $this->ports;
    }
    /**
     * The ports on which traffic will be allowed specified as a string containing a single port, a range (e.g. "8000-9000"), or "0" when all ports are open for a protocol. For ICMP rules this parameter will always return "0".
     *
     * @param string $ports
     *
     * @return self
     */
    public function setPorts(string $ports): self
    {
        $this->initialized['ports'] = true;
        $this->ports = $ports;
        return $this;
    }
    /**
     * @return FirewallRulesOutboundRulesItemDestinations
     */
    public function getDestinations(): FirewallRulesOutboundRulesItemDestinations
    {
        return $this->destinations;
    }
    /**
     * @param FirewallRulesOutboundRulesItemDestinations $destinations
     *
     * @return self
     */
    public function setDestinations(FirewallRulesOutboundRulesItemDestinations $destinations): self
    {
        $this->initialized['destinations'] = true;
        $this->destinations = $destinations;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['protocol' => ['protocol', 'getProtocol', 'setProtocol'], 'ports' => ['ports', 'getPorts', 'setPorts'], 'destinations' => ['destinations', 'getDestinations', 'setDestinations']];
    }
}