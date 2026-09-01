<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class FirewallRuleBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The type of traffic to be allowed. This may be one of `tcp`, `udp`, or `icmp`.
     *
     * @var string
     */
    public string $protocol;
    /**
     * The ports on which traffic will be allowed specified as a string containing a single port, a range (e.g. "8000-9000"), or "0" when all ports are open for a protocol. For ICMP rules this parameter will always return "0".
     *
     * @var string
     */
    public string $ports;
    public function definedProperties(): array
    {
        return ['protocol' => 'protocol', 'ports' => 'ports'];
    }
}