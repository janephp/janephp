<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class GlbSettings implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The protocol used for forwarding traffic from the load balancer to the target backends. The possible values are `http`, `https` and `http2`.
     *
     * @var string
     */
    public string $targetProtocol;
    /**
     * An integer representing the port on the target backends which the load balancer will forward traffic to.
     *
     * @var int
     */
    public int $targetPort;
    /**
     * An object specifying CDN configurations for a Global load balancer.
     *
     * @var GlbSettingsCdn
     */
    public GlbSettingsCdn $cdn;
    /**
     * A map of region string to an integer priority value indicating preference for which regional target a Global load balancer will forward traffic to. A lower value indicates a higher priority.
     *
     * @var array<string, int>
     */
    public iterable $regionPriorities;
    /**
     * An integer value as a percentage to indicate failure threshold to decide how the regional priorities will take effect. A value of `50` would indicate that the Global load balancer will choose a lower priority region to forward traffic to once this failure threshold has been reached for the higher priority region.
     *
     * @var int
     */
    public int $failoverThreshold;
    public function definedProperties(): array
    {
        return ['targetProtocol' => 'target_protocol', 'targetPort' => 'target_port', 'cdn' => 'cdn', 'regionPriorities' => 'region_priorities', 'failoverThreshold' => 'failover_threshold'];
    }
}