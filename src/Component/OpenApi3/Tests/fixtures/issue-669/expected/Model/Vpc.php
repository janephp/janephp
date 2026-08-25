<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class Vpc implements AdditionalPropertiesInterface
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
     * The name of the VPC. Must be unique and may only contain alphanumeric characters, dashes, and periods.
     *
     * @var string
     */
    protected $name;
    /**
     * A free-form text field for describing the VPC's purpose. It may be a maximum of 255 characters.
     *
     * @var string
     */
    protected $description;
    /**
     * The slug identifier for the region where the VPC will be created.
     *
     * @var string
     */
    protected $region;
    /**
     * The range of IP addresses in the VPC in CIDR notation. Network ranges cannot overlap with other networks in the same account and must be in range of private addresses as defined in RFC1918. It may not be smaller than `/28` nor larger than `/16`. If no IP range is specified, a `/20` network range is generated that won't conflict with other VPC networks in your account.
     *
     * @var string
     */
    protected $ipRange;
    /**
     * A boolean value indicating whether or not the VPC is the default network for the region. All applicable resources are placed into the default VPC network unless otherwise specified during their creation. The `default` field cannot be unset from `true`. If you want to set a new default VPC network, update the `default` field of another VPC network in the same region. The previous network's `default` field will be set to `false` when a new default VPC has been defined.
     *
     * @var bool
     */
    protected $default;
    /**
     * A unique ID that can be used to identify and reference the VPC.
     *
     * @var string
     */
    protected $id;
    /**
     * The uniform resource name (URN) for the resource in the format do:resource_type:resource_id.
     *
     * @var string
     */
    protected $urn;
    /**
     * A time value given in ISO8601 combined date and time format.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * The name of the VPC. Must be unique and may only contain alphanumeric characters, dashes, and periods.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The name of the VPC. Must be unique and may only contain alphanumeric characters, dashes, and periods.
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
     * A free-form text field for describing the VPC's purpose. It may be a maximum of 255 characters.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * A free-form text field for describing the VPC's purpose. It may be a maximum of 255 characters.
     *
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
     * The slug identifier for the region where the VPC will be created.
     *
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }
    /**
     * The slug identifier for the region where the VPC will be created.
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
     * The range of IP addresses in the VPC in CIDR notation. Network ranges cannot overlap with other networks in the same account and must be in range of private addresses as defined in RFC1918. It may not be smaller than `/28` nor larger than `/16`. If no IP range is specified, a `/20` network range is generated that won't conflict with other VPC networks in your account.
     *
     * @return string
     */
    public function getIpRange(): string
    {
        return $this->ipRange;
    }
    /**
     * The range of IP addresses in the VPC in CIDR notation. Network ranges cannot overlap with other networks in the same account and must be in range of private addresses as defined in RFC1918. It may not be smaller than `/28` nor larger than `/16`. If no IP range is specified, a `/20` network range is generated that won't conflict with other VPC networks in your account.
     *
     * @param string $ipRange
     *
     * @return self
     */
    public function setIpRange(string $ipRange): self
    {
        $this->initialized['ipRange'] = true;
        $this->ipRange = $ipRange;
        return $this;
    }
    /**
     * A boolean value indicating whether or not the VPC is the default network for the region. All applicable resources are placed into the default VPC network unless otherwise specified during their creation. The `default` field cannot be unset from `true`. If you want to set a new default VPC network, update the `default` field of another VPC network in the same region. The previous network's `default` field will be set to `false` when a new default VPC has been defined.
     *
     * @return bool
     */
    public function getDefault(): bool
    {
        return $this->default;
    }
    /**
     * A boolean value indicating whether or not the VPC is the default network for the region. All applicable resources are placed into the default VPC network unless otherwise specified during their creation. The `default` field cannot be unset from `true`. If you want to set a new default VPC network, update the `default` field of another VPC network in the same region. The previous network's `default` field will be set to `false` when a new default VPC has been defined.
     *
     * @param bool $default
     *
     * @return self
     */
    public function setDefault(bool $default): self
    {
        $this->initialized['default'] = true;
        $this->default = $default;
        return $this;
    }
    /**
     * A unique ID that can be used to identify and reference the VPC.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * A unique ID that can be used to identify and reference the VPC.
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
     * The uniform resource name (URN) for the resource in the format do:resource_type:resource_id.
     *
     * @return string
     */
    public function getUrn(): string
    {
        return $this->urn;
    }
    /**
     * The uniform resource name (URN) for the resource in the format do:resource_type:resource_id.
     *
     * @param string $urn
     *
     * @return self
     */
    public function setUrn(string $urn): self
    {
        $this->initialized['urn'] = true;
        $this->urn = $urn;
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
    public function definedProperties(): array
    {
        return ['name' => ['name', 'getName', 'setName'], 'description' => ['description', 'getDescription', 'setDescription'], 'region' => ['region', 'getRegion', 'setRegion'], 'ipRange' => ['ip_range', 'getIpRange', 'setIpRange'], 'default' => ['default', 'getDefault', 'setDefault'], 'id' => ['id', 'getId', 'setId'], 'urn' => ['urn', 'getUrn', 'setUrn'], 'createdAt' => ['created_at', 'getCreatedAt', 'setCreatedAt']];
    }
}