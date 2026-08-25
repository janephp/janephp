<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class GlbSettings implements AdditionalPropertiesInterface
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
     * The protocol used for forwarding traffic from the load balancer to the target backends. The possible values are `http`, `https` and `http2`.
     *
     * @var string
     */
    protected $targetProtocol;
    /**
     * An integer representing the port on the target backends which the load balancer will forward traffic to.
     *
     * @var int
     */
    protected $targetPort;
    /**
     * An object specifying CDN configurations for a Global load balancer.
     *
     * @var GlbSettingsCdn
     */
    protected $cdn;
    /**
     * A map of region string to an integer priority value indicating preference for which regional target a Global load balancer will forward traffic to. A lower value indicates a higher priority.
     *
     * @var array<string, int>
     */
    protected $regionPriorities;
    /**
     * An integer value as a percentage to indicate failure threshold to decide how the regional priorities will take effect. A value of `50` would indicate that the Global load balancer will choose a lower priority region to forward traffic to once this failure threshold has been reached for the higher priority region.
     *
     * @var int
     */
    protected $failoverThreshold;
    /**
     * The protocol used for forwarding traffic from the load balancer to the target backends. The possible values are `http`, `https` and `http2`.
     *
     * @return string
     */
    public function getTargetProtocol(): string
    {
        return $this->targetProtocol;
    }
    /**
     * The protocol used for forwarding traffic from the load balancer to the target backends. The possible values are `http`, `https` and `http2`.
     *
     * @param string $targetProtocol
     *
     * @return self
     */
    public function setTargetProtocol(string $targetProtocol): self
    {
        $this->initialized['targetProtocol'] = true;
        $this->targetProtocol = $targetProtocol;
        return $this;
    }
    /**
     * An integer representing the port on the target backends which the load balancer will forward traffic to.
     *
     * @return int
     */
    public function getTargetPort(): int
    {
        return $this->targetPort;
    }
    /**
     * An integer representing the port on the target backends which the load balancer will forward traffic to.
     *
     * @param int $targetPort
     *
     * @return self
     */
    public function setTargetPort(int $targetPort): self
    {
        $this->initialized['targetPort'] = true;
        $this->targetPort = $targetPort;
        return $this;
    }
    /**
     * An object specifying CDN configurations for a Global load balancer.
     *
     * @return GlbSettingsCdn
     */
    public function getCdn(): GlbSettingsCdn
    {
        return $this->cdn;
    }
    /**
     * An object specifying CDN configurations for a Global load balancer.
     *
     * @param GlbSettingsCdn $cdn
     *
     * @return self
     */
    public function setCdn(GlbSettingsCdn $cdn): self
    {
        $this->initialized['cdn'] = true;
        $this->cdn = $cdn;
        return $this;
    }
    /**
     * A map of region string to an integer priority value indicating preference for which regional target a Global load balancer will forward traffic to. A lower value indicates a higher priority.
     *
     * @return array<string, int>
     */
    public function getRegionPriorities(): iterable
    {
        return $this->regionPriorities;
    }
    /**
     * A map of region string to an integer priority value indicating preference for which regional target a Global load balancer will forward traffic to. A lower value indicates a higher priority.
     *
     * @param array<string, int> $regionPriorities
     *
     * @return self
     */
    public function setRegionPriorities(iterable $regionPriorities): self
    {
        $this->initialized['regionPriorities'] = true;
        $this->regionPriorities = $regionPriorities;
        return $this;
    }
    /**
     * An integer value as a percentage to indicate failure threshold to decide how the regional priorities will take effect. A value of `50` would indicate that the Global load balancer will choose a lower priority region to forward traffic to once this failure threshold has been reached for the higher priority region.
     *
     * @return int
     */
    public function getFailoverThreshold(): int
    {
        return $this->failoverThreshold;
    }
    /**
     * An integer value as a percentage to indicate failure threshold to decide how the regional priorities will take effect. A value of `50` would indicate that the Global load balancer will choose a lower priority region to forward traffic to once this failure threshold has been reached for the higher priority region.
     *
     * @param int $failoverThreshold
     *
     * @return self
     */
    public function setFailoverThreshold(int $failoverThreshold): self
    {
        $this->initialized['failoverThreshold'] = true;
        $this->failoverThreshold = $failoverThreshold;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['targetProtocol' => ['target_protocol', 'getTargetProtocol', 'setTargetProtocol'], 'targetPort' => ['target_port', 'getTargetPort', 'setTargetPort'], 'cdn' => ['cdn', 'getCdn', 'setCdn'], 'regionPriorities' => ['region_priorities', 'getRegionPriorities', 'setRegionPriorities'], 'failoverThreshold' => ['failover_threshold', 'getFailoverThreshold', 'setFailoverThreshold']];
    }
}