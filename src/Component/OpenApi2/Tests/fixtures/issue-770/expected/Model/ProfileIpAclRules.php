<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileIpAclRules
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
     * Priority
     *
     * @var int
     */
    protected $priority;
    /**
     * @var string
     */
    protected $description;
    /**
     * Uplink rate limiting enabled
     *
     * @var bool
     */
    protected $uplinkRateLimitingEnabled;
    /**
     * Uplink rate limiting
     *
     * @var float
     */
    protected $uplinkRateLimitingMbps;
    /**
     * Downlink rate limiting enabled
     *
     * @var bool
     */
    protected $downlinkRateLimitingEnabled;
    /**
     * Downlink rate limiting
     *
     * @var float
     */
    protected $downlinkRateLimitingMbps;
    /**
     * IP Type(IPv4 or IPv6).
     *
     * @var string
     */
    protected $ipType = 'IPv4';
    /**
     * Source IP subnet enabled or disabled
     *
     * @var bool
     */
    protected $enableSourceIpSubnet;
    /**
     * Subnet network address or ip address of source IP.
     *
     * @var string
     */
    protected $sourceIp;
    /**
     * Subnet mask of source IP
     *
     * @var string
     */
    protected $sourceIpMask;
    /**
     * Enable Source IPv6 prefix.
     *
     * @var bool
     */
    protected $enableSourceV6Prefix;
    /**
     * Source IPv6 Address.
     *
     * @var string
     */
    protected $sourceIpV6;
    /**
     * Destination IP subnet enabled or disabled
     *
     * @var bool
     */
    protected $enableDestinationIpSubnet;
    /**
     * Subnet network address or ip address of destination IP.
     *
     * @var string
     */
    protected $destinationIp;
    /**
     * Subnet mask of destination IP
     *
     * @var string
     */
    protected $destinationIpMask;
    /**
     * Enable Destination IPv6 prefix.
     *
     * @var bool
     */
    protected $enableDestinationV6Prefix;
    /**
     * Destination IPv6 Address.
     *
     * @var string
     */
    protected $destinationIpV6;
    /**
     * Source port range enabled or disabled
     *
     * @var bool
     */
    protected $enableSourcePortRange;
    /**
     * The minunum port of source port range.
     *
     * @var int
     */
    protected $sourceMinPort;
    /**
     * The maxinum port of source port range.
     *
     * @var int
     */
    protected $sourceMaxPort;
    /**
     * Destincation port range enabled or disabled
     *
     * @var bool
     */
    protected $enableDestinationPortRange;
    /**
     * The mininum port of destination port range.
     *
     * @var int
     */
    protected $destinationMinPort;
    /**
     * The maxinum port of destination port range.
     *
     * @var int
     */
    protected $destinationMaxPort;
    /**
     * The protocol of traffic access control.
     *
     * @var string
     */
    protected $protocol;
    /**
     * The protocol of traffic access control. Available if the protocol is set to CUSTOM.
     *
     * @var int
     */
    protected $customProtocol;
    /**
     * The access of traffic access control.
     *
     * @var string
     */
    protected $action = 'ALLOW';
    /**
     * The direction of traffic access control.
     *
     * @var string
     */
    protected $direction = 'UPSTREAM';
    /**
     * Priority
     *
     * @return int
     */
    public function getPriority(): int
    {
        return $this->priority;
    }
    /**
     * Priority
     *
     * @param int $priority
     *
     * @return self
     */
    public function setPriority(int $priority): self
    {
        $this->initialized['priority'] = true;
        $this->priority = $priority;
        return $this;
    }
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Uplink rate limiting enabled
     *
     * @return bool
     */
    public function getUplinkRateLimitingEnabled(): bool
    {
        return $this->uplinkRateLimitingEnabled;
    }
    /**
     * Uplink rate limiting enabled
     *
     * @param bool $uplinkRateLimitingEnabled
     *
     * @return self
     */
    public function setUplinkRateLimitingEnabled(bool $uplinkRateLimitingEnabled): self
    {
        $this->initialized['uplinkRateLimitingEnabled'] = true;
        $this->uplinkRateLimitingEnabled = $uplinkRateLimitingEnabled;
        return $this;
    }
    /**
     * Uplink rate limiting
     *
     * @return float
     */
    public function getUplinkRateLimitingMbps(): float
    {
        return $this->uplinkRateLimitingMbps;
    }
    /**
     * Uplink rate limiting
     *
     * @param float $uplinkRateLimitingMbps
     *
     * @return self
     */
    public function setUplinkRateLimitingMbps(float $uplinkRateLimitingMbps): self
    {
        $this->initialized['uplinkRateLimitingMbps'] = true;
        $this->uplinkRateLimitingMbps = $uplinkRateLimitingMbps;
        return $this;
    }
    /**
     * Downlink rate limiting enabled
     *
     * @return bool
     */
    public function getDownlinkRateLimitingEnabled(): bool
    {
        return $this->downlinkRateLimitingEnabled;
    }
    /**
     * Downlink rate limiting enabled
     *
     * @param bool $downlinkRateLimitingEnabled
     *
     * @return self
     */
    public function setDownlinkRateLimitingEnabled(bool $downlinkRateLimitingEnabled): self
    {
        $this->initialized['downlinkRateLimitingEnabled'] = true;
        $this->downlinkRateLimitingEnabled = $downlinkRateLimitingEnabled;
        return $this;
    }
    /**
     * Downlink rate limiting
     *
     * @return float
     */
    public function getDownlinkRateLimitingMbps(): float
    {
        return $this->downlinkRateLimitingMbps;
    }
    /**
     * Downlink rate limiting
     *
     * @param float $downlinkRateLimitingMbps
     *
     * @return self
     */
    public function setDownlinkRateLimitingMbps(float $downlinkRateLimitingMbps): self
    {
        $this->initialized['downlinkRateLimitingMbps'] = true;
        $this->downlinkRateLimitingMbps = $downlinkRateLimitingMbps;
        return $this;
    }
    /**
     * IP Type(IPv4 or IPv6).
     *
     * @return string
     */
    public function getIpType(): string
    {
        return $this->ipType;
    }
    /**
     * IP Type(IPv4 or IPv6).
     *
     * @param string $ipType
     *
     * @return self
     */
    public function setIpType(string $ipType): self
    {
        $this->initialized['ipType'] = true;
        $this->ipType = $ipType;
        return $this;
    }
    /**
     * Source IP subnet enabled or disabled
     *
     * @return bool
     */
    public function getEnableSourceIpSubnet(): bool
    {
        return $this->enableSourceIpSubnet;
    }
    /**
     * Source IP subnet enabled or disabled
     *
     * @param bool $enableSourceIpSubnet
     *
     * @return self
     */
    public function setEnableSourceIpSubnet(bool $enableSourceIpSubnet): self
    {
        $this->initialized['enableSourceIpSubnet'] = true;
        $this->enableSourceIpSubnet = $enableSourceIpSubnet;
        return $this;
    }
    /**
     * Subnet network address or ip address of source IP.
     *
     * @return string
     */
    public function getSourceIp(): string
    {
        return $this->sourceIp;
    }
    /**
     * Subnet network address or ip address of source IP.
     *
     * @param string $sourceIp
     *
     * @return self
     */
    public function setSourceIp(string $sourceIp): self
    {
        $this->initialized['sourceIp'] = true;
        $this->sourceIp = $sourceIp;
        return $this;
    }
    /**
     * Subnet mask of source IP
     *
     * @return string
     */
    public function getSourceIpMask(): string
    {
        return $this->sourceIpMask;
    }
    /**
     * Subnet mask of source IP
     *
     * @param string $sourceIpMask
     *
     * @return self
     */
    public function setSourceIpMask(string $sourceIpMask): self
    {
        $this->initialized['sourceIpMask'] = true;
        $this->sourceIpMask = $sourceIpMask;
        return $this;
    }
    /**
     * Enable Source IPv6 prefix.
     *
     * @return bool
     */
    public function getEnableSourceV6Prefix(): bool
    {
        return $this->enableSourceV6Prefix;
    }
    /**
     * Enable Source IPv6 prefix.
     *
     * @param bool $enableSourceV6Prefix
     *
     * @return self
     */
    public function setEnableSourceV6Prefix(bool $enableSourceV6Prefix): self
    {
        $this->initialized['enableSourceV6Prefix'] = true;
        $this->enableSourceV6Prefix = $enableSourceV6Prefix;
        return $this;
    }
    /**
     * Source IPv6 Address.
     *
     * @return string
     */
    public function getSourceIpV6(): string
    {
        return $this->sourceIpV6;
    }
    /**
     * Source IPv6 Address.
     *
     * @param string $sourceIpV6
     *
     * @return self
     */
    public function setSourceIpV6(string $sourceIpV6): self
    {
        $this->initialized['sourceIpV6'] = true;
        $this->sourceIpV6 = $sourceIpV6;
        return $this;
    }
    /**
     * Destination IP subnet enabled or disabled
     *
     * @return bool
     */
    public function getEnableDestinationIpSubnet(): bool
    {
        return $this->enableDestinationIpSubnet;
    }
    /**
     * Destination IP subnet enabled or disabled
     *
     * @param bool $enableDestinationIpSubnet
     *
     * @return self
     */
    public function setEnableDestinationIpSubnet(bool $enableDestinationIpSubnet): self
    {
        $this->initialized['enableDestinationIpSubnet'] = true;
        $this->enableDestinationIpSubnet = $enableDestinationIpSubnet;
        return $this;
    }
    /**
     * Subnet network address or ip address of destination IP.
     *
     * @return string
     */
    public function getDestinationIp(): string
    {
        return $this->destinationIp;
    }
    /**
     * Subnet network address or ip address of destination IP.
     *
     * @param string $destinationIp
     *
     * @return self
     */
    public function setDestinationIp(string $destinationIp): self
    {
        $this->initialized['destinationIp'] = true;
        $this->destinationIp = $destinationIp;
        return $this;
    }
    /**
     * Subnet mask of destination IP
     *
     * @return string
     */
    public function getDestinationIpMask(): string
    {
        return $this->destinationIpMask;
    }
    /**
     * Subnet mask of destination IP
     *
     * @param string $destinationIpMask
     *
     * @return self
     */
    public function setDestinationIpMask(string $destinationIpMask): self
    {
        $this->initialized['destinationIpMask'] = true;
        $this->destinationIpMask = $destinationIpMask;
        return $this;
    }
    /**
     * Enable Destination IPv6 prefix.
     *
     * @return bool
     */
    public function getEnableDestinationV6Prefix(): bool
    {
        return $this->enableDestinationV6Prefix;
    }
    /**
     * Enable Destination IPv6 prefix.
     *
     * @param bool $enableDestinationV6Prefix
     *
     * @return self
     */
    public function setEnableDestinationV6Prefix(bool $enableDestinationV6Prefix): self
    {
        $this->initialized['enableDestinationV6Prefix'] = true;
        $this->enableDestinationV6Prefix = $enableDestinationV6Prefix;
        return $this;
    }
    /**
     * Destination IPv6 Address.
     *
     * @return string
     */
    public function getDestinationIpV6(): string
    {
        return $this->destinationIpV6;
    }
    /**
     * Destination IPv6 Address.
     *
     * @param string $destinationIpV6
     *
     * @return self
     */
    public function setDestinationIpV6(string $destinationIpV6): self
    {
        $this->initialized['destinationIpV6'] = true;
        $this->destinationIpV6 = $destinationIpV6;
        return $this;
    }
    /**
     * Source port range enabled or disabled
     *
     * @return bool
     */
    public function getEnableSourcePortRange(): bool
    {
        return $this->enableSourcePortRange;
    }
    /**
     * Source port range enabled or disabled
     *
     * @param bool $enableSourcePortRange
     *
     * @return self
     */
    public function setEnableSourcePortRange(bool $enableSourcePortRange): self
    {
        $this->initialized['enableSourcePortRange'] = true;
        $this->enableSourcePortRange = $enableSourcePortRange;
        return $this;
    }
    /**
     * The minunum port of source port range.
     *
     * @return int
     */
    public function getSourceMinPort(): int
    {
        return $this->sourceMinPort;
    }
    /**
     * The minunum port of source port range.
     *
     * @param int $sourceMinPort
     *
     * @return self
     */
    public function setSourceMinPort(int $sourceMinPort): self
    {
        $this->initialized['sourceMinPort'] = true;
        $this->sourceMinPort = $sourceMinPort;
        return $this;
    }
    /**
     * The maxinum port of source port range.
     *
     * @return int
     */
    public function getSourceMaxPort(): int
    {
        return $this->sourceMaxPort;
    }
    /**
     * The maxinum port of source port range.
     *
     * @param int $sourceMaxPort
     *
     * @return self
     */
    public function setSourceMaxPort(int $sourceMaxPort): self
    {
        $this->initialized['sourceMaxPort'] = true;
        $this->sourceMaxPort = $sourceMaxPort;
        return $this;
    }
    /**
     * Destincation port range enabled or disabled
     *
     * @return bool
     */
    public function getEnableDestinationPortRange(): bool
    {
        return $this->enableDestinationPortRange;
    }
    /**
     * Destincation port range enabled or disabled
     *
     * @param bool $enableDestinationPortRange
     *
     * @return self
     */
    public function setEnableDestinationPortRange(bool $enableDestinationPortRange): self
    {
        $this->initialized['enableDestinationPortRange'] = true;
        $this->enableDestinationPortRange = $enableDestinationPortRange;
        return $this;
    }
    /**
     * The mininum port of destination port range.
     *
     * @return int
     */
    public function getDestinationMinPort(): int
    {
        return $this->destinationMinPort;
    }
    /**
     * The mininum port of destination port range.
     *
     * @param int $destinationMinPort
     *
     * @return self
     */
    public function setDestinationMinPort(int $destinationMinPort): self
    {
        $this->initialized['destinationMinPort'] = true;
        $this->destinationMinPort = $destinationMinPort;
        return $this;
    }
    /**
     * The maxinum port of destination port range.
     *
     * @return int
     */
    public function getDestinationMaxPort(): int
    {
        return $this->destinationMaxPort;
    }
    /**
     * The maxinum port of destination port range.
     *
     * @param int $destinationMaxPort
     *
     * @return self
     */
    public function setDestinationMaxPort(int $destinationMaxPort): self
    {
        $this->initialized['destinationMaxPort'] = true;
        $this->destinationMaxPort = $destinationMaxPort;
        return $this;
    }
    /**
     * The protocol of traffic access control.
     *
     * @return string
     */
    public function getProtocol(): string
    {
        return $this->protocol;
    }
    /**
     * The protocol of traffic access control.
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
     * The protocol of traffic access control. Available if the protocol is set to CUSTOM.
     *
     * @return int
     */
    public function getCustomProtocol(): int
    {
        return $this->customProtocol;
    }
    /**
     * The protocol of traffic access control. Available if the protocol is set to CUSTOM.
     *
     * @param int $customProtocol
     *
     * @return self
     */
    public function setCustomProtocol(int $customProtocol): self
    {
        $this->initialized['customProtocol'] = true;
        $this->customProtocol = $customProtocol;
        return $this;
    }
    /**
     * The access of traffic access control.
     *
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }
    /**
     * The access of traffic access control.
     *
     * @param string $action
     *
     * @return self
     */
    public function setAction(string $action): self
    {
        $this->initialized['action'] = true;
        $this->action = $action;
        return $this;
    }
    /**
     * The direction of traffic access control.
     *
     * @return string
     */
    public function getDirection(): string
    {
        return $this->direction;
    }
    /**
     * The direction of traffic access control.
     *
     * @param string $direction
     *
     * @return self
     */
    public function setDirection(string $direction): self
    {
        $this->initialized['direction'] = true;
        $this->direction = $direction;
        return $this;
    }
}