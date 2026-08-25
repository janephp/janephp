<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ReservedIpv6 implements AdditionalPropertiesInterface
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
     * The public IP address of the reserved IPv6. It also serves as its identifier.
     *
     * @var string
     */
    protected $ip;
    /**
     * The date and time when the reserved IPv6 was reserved.
     *
     * @var \DateTime
     */
    protected $reservedAt;
    /**
     * The region that the reserved IPv6 is reserved to. When you query a reserved IPv6,the region_slug will be returned.
     *
     * @var string
     */
    protected $regionSlug;
    /**
     * @var mixed
     */
    protected $droplet;
    /**
     * The public IP address of the reserved IPv6. It also serves as its identifier.
     *
     * @return string
     */
    public function getIp(): string
    {
        return $this->ip;
    }
    /**
     * The public IP address of the reserved IPv6. It also serves as its identifier.
     *
     * @param string $ip
     *
     * @return self
     */
    public function setIp(string $ip): self
    {
        $this->initialized['ip'] = true;
        $this->ip = $ip;
        return $this;
    }
    /**
     * The date and time when the reserved IPv6 was reserved.
     *
     * @return \DateTime
     */
    public function getReservedAt(): \DateTime
    {
        return $this->reservedAt;
    }
    /**
     * The date and time when the reserved IPv6 was reserved.
     *
     * @param \DateTime $reservedAt
     *
     * @return self
     */
    public function setReservedAt(\DateTime $reservedAt): self
    {
        $this->initialized['reservedAt'] = true;
        $this->reservedAt = $reservedAt;
        return $this;
    }
    /**
     * The region that the reserved IPv6 is reserved to. When you query a reserved IPv6,the region_slug will be returned.
     *
     * @return string
     */
    public function getRegionSlug(): string
    {
        return $this->regionSlug;
    }
    /**
     * The region that the reserved IPv6 is reserved to. When you query a reserved IPv6,the region_slug will be returned.
     *
     * @param string $regionSlug
     *
     * @return self
     */
    public function setRegionSlug(string $regionSlug): self
    {
        $this->initialized['regionSlug'] = true;
        $this->regionSlug = $regionSlug;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getDroplet()
    {
        return $this->droplet;
    }
    /**
     * @param mixed $droplet
     *
     * @return self
     */
    public function setDroplet($droplet): self
    {
        $this->initialized['droplet'] = true;
        $this->droplet = $droplet;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['ip' => ['ip', 'getIp', 'setIp'], 'reservedAt' => ['reserved_at', 'getReservedAt', 'setReservedAt'], 'regionSlug' => ['region_slug', 'getRegionSlug', 'setRegionSlug'], 'droplet' => ['droplet', 'getDroplet', 'setDroplet']];
    }
}