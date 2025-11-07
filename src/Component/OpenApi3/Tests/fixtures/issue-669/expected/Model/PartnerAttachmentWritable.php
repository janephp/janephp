<?php

namespace Jane\Generated\DigitalOcean\Model;

class PartnerAttachmentWritable extends \ArrayObject
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
     * The name of the partner attachment. Must be unique and may only contain alphanumeric characters, dashes, and periods.
     *
     * @var string
     */
    protected $name;
    /**
     * Bandwidth (in Mbps) of the connection.
     *
     * @var int
     */
    protected $connectionBandwidthInMbps;
    /**
     * The region to create the partner attachment.
     *
     * @var string
     */
    protected $region;
    /**
     * @var string
     */
    protected $naasProvider;
    /**
     * An array of VPCs IDs.
     *
     * @var list<string>
     */
    protected $vpcIds;
    /**
     * Optional associated partner attachment UUID
     *
     * @var string
     */
    protected $parentUuid;
    /**
     * Optional BGP configurations
     *
     * @var PartnerAttachmentWritableBgp
     */
    protected $bgp;
    /**
     * Optional redundancy zone for the partner attachment.
     *
     * @var string
     */
    protected $redundancyZone;
    /**
     * The name of the partner attachment. Must be unique and may only contain alphanumeric characters, dashes, and periods.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The name of the partner attachment. Must be unique and may only contain alphanumeric characters, dashes, and periods.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Bandwidth (in Mbps) of the connection.
     *
     * @return int
     */
    public function getConnectionBandwidthInMbps(): int
    {
        return $this->connectionBandwidthInMbps;
    }
    /**
     * Bandwidth (in Mbps) of the connection.
     *
     * @param int $connectionBandwidthInMbps
     *
     * @return self
     */
    public function setConnectionBandwidthInMbps(int $connectionBandwidthInMbps): self
    {
        $this->initialized['connectionBandwidthInMbps'] = true;
        $this->connectionBandwidthInMbps = $connectionBandwidthInMbps;
        return $this;
    }
    /**
     * The region to create the partner attachment.
     *
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }
    /**
     * The region to create the partner attachment.
     *
     * @param string $region
     *
     * @return self
     */
    public function setRegion(string $region): self
    {
        $this->initialized['region'] = true;
        $this->region = $region;
        return $this;
    }
    /**
     * @return string
     */
    public function getNaasProvider(): string
    {
        return $this->naasProvider;
    }
    /**
     * @param string $naasProvider
     *
     * @return self
     */
    public function setNaasProvider(string $naasProvider): self
    {
        $this->initialized['naasProvider'] = true;
        $this->naasProvider = $naasProvider;
        return $this;
    }
    /**
     * An array of VPCs IDs.
     *
     * @return list<string>
     */
    public function getVpcIds(): array
    {
        return $this->vpcIds;
    }
    /**
     * An array of VPCs IDs.
     *
     * @param list<string> $vpcIds
     *
     * @return self
     */
    public function setVpcIds(array $vpcIds): self
    {
        $this->initialized['vpcIds'] = true;
        $this->vpcIds = $vpcIds;
        return $this;
    }
    /**
     * Optional associated partner attachment UUID
     *
     * @return string
     */
    public function getParentUuid(): string
    {
        return $this->parentUuid;
    }
    /**
     * Optional associated partner attachment UUID
     *
     * @param string $parentUuid
     *
     * @return self
     */
    public function setParentUuid(string $parentUuid): self
    {
        $this->initialized['parentUuid'] = true;
        $this->parentUuid = $parentUuid;
        return $this;
    }
    /**
     * Optional BGP configurations
     *
     * @return PartnerAttachmentWritableBgp
     */
    public function getBgp(): PartnerAttachmentWritableBgp
    {
        return $this->bgp;
    }
    /**
     * Optional BGP configurations
     *
     * @param PartnerAttachmentWritableBgp $bgp
     *
     * @return self
     */
    public function setBgp(PartnerAttachmentWritableBgp $bgp): self
    {
        $this->initialized['bgp'] = true;
        $this->bgp = $bgp;
        return $this;
    }
    /**
     * Optional redundancy zone for the partner attachment.
     *
     * @return string
     */
    public function getRedundancyZone(): string
    {
        return $this->redundancyZone;
    }
    /**
     * Optional redundancy zone for the partner attachment.
     *
     * @param string $redundancyZone
     *
     * @return self
     */
    public function setRedundancyZone(string $redundancyZone): self
    {
        $this->initialized['redundancyZone'] = true;
        $this->redundancyZone = $redundancyZone;
        return $this;
    }
}