<?php

namespace Jane\Generated\DigitalOcean\Model;

class ReservedIpv6ListReservedIpv6sItem extends \ArrayObject
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
     * The public IP address of the reserved IPv6. It also serves as its identifier.
     *
     * @var string
     */
    protected $ip;
    /**
     * The region that the reserved IPv6 is reserved to. When you query a reserved IPv6,the region_slug will be returned.
     *
     * @var string
     */
    protected $regionSlug;
    /**
     * @var \DateTime
     */
    protected $reservedAt;
    /**
     * Requires `droplet:read` scope.
     *
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
     * @return \DateTime
     */
    public function getReservedAt(): \DateTime
    {
        return $this->reservedAt;
    }
    /**
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
     * Requires `droplet:read` scope.
     *
     * @return mixed
     */
    public function getDroplet()
    {
        return $this->droplet;
    }
    /**
     * Requires `droplet:read` scope.
     *
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
}