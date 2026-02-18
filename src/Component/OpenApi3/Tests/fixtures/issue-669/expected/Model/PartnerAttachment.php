<?php

namespace Jane\Generated\DigitalOcean\Model;

class PartnerAttachment extends \ArrayObject
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
     * A unique ID that can be used to identify and reference the partner attachment.
     *
     * @var string
     */
    protected $id;
    /**
     * The name of the partner attachment. Must be unique and may only contain alphanumeric characters, dashes, and periods.
     *
     * @var string
     */
    protected $name;
    /**
     * The current operational state of the attachment.
     *
     * @var string
     */
    protected $state;
    /**
     * The bandwidth (in Mbps) of the connection.
     *
     * @var int
     */
    protected $connectionBandwidthInMbps;
    /**
     * The region where the partner attachment is located.
     *
     * @var string
     */
    protected $region;
    /**
     * The Network as a Service (NaaS) provider for the partner attachment.
     *
     * @var string
     */
    protected $naasProvider;
    /**
     * An array of VPC network IDs.
     *
     * @var list<string>
     */
    protected $vpcIds;
    /**
     * The BGP configuration for the partner attachment.
     *
     * @var PartnerAttachmentBgp
     */
    protected $bgp;
    /**
     * A time value given in ISO8601 combined date and time format.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Associated partner attachment UUID
     *
     * @var string
     */
    protected $parentUuid;
    /**
     * An array of associated partner attachment UUIDs.
     *
     * @var list<string>
     */
    protected $children;
    /**
     * A unique ID that can be used to identify and reference the partner attachment.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * A unique ID that can be used to identify and reference the partner attachment.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
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
     * The current operational state of the attachment.
     *
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }
    /**
     * The current operational state of the attachment.
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
    /**
     * The bandwidth (in Mbps) of the connection.
     *
     * @return int
     */
    public function getConnectionBandwidthInMbps(): int
    {
        return $this->connectionBandwidthInMbps;
    }
    /**
     * The bandwidth (in Mbps) of the connection.
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
     * The region where the partner attachment is located.
     *
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }
    /**
     * The region where the partner attachment is located.
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
     * The Network as a Service (NaaS) provider for the partner attachment.
     *
     * @return string
     */
    public function getNaasProvider(): string
    {
        return $this->naasProvider;
    }
    /**
     * The Network as a Service (NaaS) provider for the partner attachment.
     *
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
     * An array of VPC network IDs.
     *
     * @return list<string>
     */
    public function getVpcIds(): array
    {
        return $this->vpcIds;
    }
    /**
     * An array of VPC network IDs.
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
     * The BGP configuration for the partner attachment.
     *
     * @return PartnerAttachmentBgp
     */
    public function getBgp(): PartnerAttachmentBgp
    {
        return $this->bgp;
    }
    /**
     * The BGP configuration for the partner attachment.
     *
     * @param PartnerAttachmentBgp $bgp
     *
     * @return self
     */
    public function setBgp(PartnerAttachmentBgp $bgp): self
    {
        $this->initialized['bgp'] = true;
        $this->bgp = $bgp;
        return $this;
    }
    /**
     * A time value given in ISO8601 combined date and time format.
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * A time value given in ISO8601 combined date and time format.
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Associated partner attachment UUID
     *
     * @return string
     */
    public function getParentUuid(): string
    {
        return $this->parentUuid;
    }
    /**
     * Associated partner attachment UUID
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
     * An array of associated partner attachment UUIDs.
     *
     * @return list<string>
     */
    public function getChildren(): array
    {
        return $this->children;
    }
    /**
     * An array of associated partner attachment UUIDs.
     *
     * @param list<string> $children
     *
     * @return self
     */
    public function setChildren(array $children): self
    {
        $this->initialized['children'] = true;
        $this->children = $children;
        return $this;
    }
}